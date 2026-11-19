<?php
/**
 * Viscar Tailwind Theme functions and definitions.
 */

// Theme setup
function viscar_theme_setup()
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5', array(
        'search-form',
        'gallery',
        'caption',
        'style',
        'script',
    ));
    // Wide image support for Gutenberg blocks
    add_theme_support('align-wide');
    add_theme_support('responsive-embeds');

    add_post_type_support('page', 'excerpt');

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'viscar'),
    ));
}
add_action('after_setup_theme', 'viscar_theme_setup');

/**
 * Whether the Vite dev server is running.
 *
 * vite.config.js writes a `hot` file while `npm run dev` is running and
 * removes it when the server stops. If the server was killed without
 * cleaning up (crash, closed terminal), the file is left behind, so the
 * server is also pinged before it is trusted; otherwise the built CSS is used.
 */
function viscar_is_vite_dev()
{
    static $is_dev = null;
    if ($is_dev !== null) {
        return $is_dev;
    }

    $is_dev = false;
    if (file_exists(get_template_directory() . '/hot')) {
        $parts = wp_parse_url(viscar_vite_url());
        $host = isset($parts['host']) ? $parts['host'] : 'localhost';
        $port = isset($parts['port']) ? (int) $parts['port'] : 3000;
        $socket = @fsockopen($host, $port, $errno, $errstr, 0.2);
        if ($socket) {
            fclose($socket);
            $is_dev = true;
        }
    }

    return $is_dev;
}

function viscar_vite_url()
{
    $url = trim((string) file_get_contents(get_template_directory() . '/hot'));
    return $url !== '' ? untrailingslashit($url) : 'http://localhost:3000';
}

// Theme assets
function viscar_theme_assets()
{
    $theme_uri = get_template_directory_uri();
    $theme_dir = get_template_directory();

    // Third-party libraries
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css', array(), null);
    wp_enqueue_style('splide', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css', array(), null);
    wp_enqueue_script('splide', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js', array(), null, true);
    wp_enqueue_script('splide-autoscroll', 'https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js', array('splide'), null, true);

    if (viscar_is_vite_dev()) {
        // DEVELOPMENT: load the Vite client and the CSS entry as a module so HMR works.
        $vite_url = viscar_vite_url();
        wp_enqueue_script('vite-client', $vite_url . '/@vite/client', array(), null, false);
        wp_enqueue_script('vite-css', $vite_url . '/assets/css/input.css', array('vite-client'), null, false);
    } else {
        // PRODUCTION: use the built CSS file.
        $css = $theme_dir . '/dist/output.css';
        wp_enqueue_style('viscar-style', $theme_uri . '/dist/output.css', array('bootstrap-icons', 'splide'), file_exists($css) ? filemtime($css) : null);
    }

    // Theme JS is loaded directly (not through Vite).
    wp_enqueue_script('viscar-main', $theme_uri . '/assets/js/main.js', array('splide', 'splide-autoscroll'), filemtime($theme_dir . '/assets/js/main.js'), true);
}
add_action('wp_enqueue_scripts', 'viscar_theme_assets');

// Add type="module" to Vite scripts
function viscar_vite_module_type($tag, $handle, $src)
{
    if (strpos($handle, 'vite-') === 0) {
        $tag = '<script type="module" src="' . esc_url($src) . '"></script>' . "\n";
    }
    return $tag;
}
add_filter('script_loader_tag', 'viscar_vite_module_type', 10, 3);

// Page slug body class
function viscar_slug_body_class($classes)
{
    global $post;
    if (isset($post)) {
        $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
}
add_filter('body_class', 'viscar_slug_body_class');

/**
 * Formats a CFS date field value as "F j" (e.g. "March 4"). Returns '' when empty.
 */
function viscar_format_date($date)
{
    if (empty($date)) {
        return '';
    }
    $timestamp = strtotime($date);
    return $timestamp ? date('F j', $timestamp) : '';
}

/**
 * Reads a Custom Field Suite field without fataling when the plugin is inactive.
 */
function viscar_field($name, $post_id = false)
{
    if (!function_exists('CFS')) {
        return null;
    }
    return CFS()->get($name, $post_id);
}

/**
 * Slug of the first category of the current post, or '' when it has none.
 */
function viscar_first_category_slug()
{
    $categories = get_the_category();
    return !empty($categories) ? $categories[0]->slug : '';
}

/**
 * Filter to disable Rank Math's Content AI and Table of Contents tests.
 */
add_filter('rank_math/researches/tests', function ($tests, $type) {
    unset($tests['hasContentAI'], $tests['contentHasTOC']);
    return $tests;
}, 10, 2);

// Disable comments on all post types
function viscar_disable_comments_status()
{
    return false;
}
add_filter('comments_open', 'viscar_disable_comments_status', 20, 2);
add_filter('pings_open', 'viscar_disable_comments_status', 20, 2);

// Hide existing comments
function viscar_hide_existing_comments($comments)
{
    return array();
}
add_filter('comments_array', 'viscar_hide_existing_comments');

// Remove comments page from the WordPress menu
function viscar_disable_comments_admin_menu()
{
    remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'viscar_disable_comments_admin_menu');

// Redirect any user trying to access comments page
function viscar_disable_comments_admin_menu_redirect()
{
    global $pagenow;
    if ($pagenow === 'edit-comments.php') {
        wp_redirect(admin_url());
        exit;
    }
}
add_action('admin_init', 'viscar_disable_comments_admin_menu_redirect');
