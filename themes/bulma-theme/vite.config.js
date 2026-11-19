import fs from "node:fs";
import path from "node:path";
import { fileURLToPath } from "node:url";
import { defineConfig } from "vite";
import liveReload from "vite-plugin-live-reload";
import tailwindcss from "@tailwindcss/vite";

const themeDir = path.dirname(fileURLToPath(import.meta.url));
const hotFile = path.join(themeDir, "hot");

/**
 * Writes a `hot` file while the dev server is running. functions.php only
 * loads assets from the Vite dev server when this file exists, so the site
 * falls back to the built dist/output.css whenever `npm run dev` is stopped.
 */
function wordpressHotFile() {
  const removeHotFile = () => {
    if (fs.existsSync(hotFile)) fs.rmSync(hotFile);
  };

  return {
    name: "wordpress-hot-file",
    apply: "serve",
    configureServer(server) {
      server.httpServer?.once("listening", () => {
        fs.writeFileSync(hotFile, "http://localhost:3000");
      });
      server.httpServer?.once("close", removeHotFile);
      for (const signal of ["SIGINT", "SIGTERM", "SIGHUP"]) {
        process.once(signal, () => {
          removeHotFile();
          process.exit();
        });
      }
      process.once("exit", removeHotFile);
    },
  };
}

/**
 * Images referenced from the CSS already live in assets/img. Instead of copying
 * them into dist/, the built CSS points back at the originals
 * (dist/output.css → ../assets/img/...), which works wherever WordPress is installed.
 */
function keepThemeImages() {
  return {
    name: "keep-theme-images",
    apply: "build",
    generateBundle(_options, bundle) {
      for (const [fileName, chunk] of Object.entries(bundle)) {
        if (chunk.type === "asset" && fileName.startsWith("img/")) {
          delete bundle[fileName];
        }
      }
    },
  };
}

export default defineConfig({
  plugins: [
    liveReload(["**/*.php"]), // Live reload for PHP files
    tailwindcss(),
    wordpressHotFile(),
    keepThemeImages(),
  ],

  experimental: {
    renderBuiltUrl(fileName, { hostType }) {
      if (hostType === "css" && fileName.startsWith("img/")) {
        return `../assets/${fileName}`;
      }
      return { relative: true };
    },
  },

  publicDir: false,

  optimizeDeps: {
    include: [],
  },

  build: {
    outDir: "dist",
    emptyOutDir: true,
    rollupOptions: {
      input: {
        style: "assets/css/input.css",
      },
      output: {
        // CSS goes to dist/output.css. Images keep their original names under
        // img/ so keepThemeImages() can map them back to assets/img.
        assetFileNames: (assetInfo) => {
          const name = assetInfo.names?.[0] ?? assetInfo.name ?? "";
          return name.endsWith(".css") ? "output.css" : "img/[name][extname]";
        },
      },
    },
  },

  server: {
    port: 3000,
    strictPort: true,
    host: "localhost",
    // Asset URLs in dev point at the Vite server, not the WordPress site (Laragon/Apache).
    origin: "http://localhost:3000",
    cors: {
      origin: "*", // Allow any localhost subdirectory
      credentials: true,
    },
    hmr: {
      host: "localhost",
      port: 3000,
      protocol: "ws",
      clientPort: 3000,
    },
    watch: {
      usePolling: true,
      interval: 100,
      ignored: ["**/node_modules/**", "**/dist/**"],
    },
  },
});
