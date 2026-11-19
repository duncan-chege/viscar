/**
 * Viscar theme scripts. Loaded directly by WordPress (not bundled by Vite).
 * Each feature only runs when its markup is on the page.
 */

/* ------------------------------------------------------------------ */
/* Data center / broadband pages: service tabs (desktop) and picker (mobile).
 * Called from onclick attributes in the page templates, so they stay global. */
/* ------------------------------------------------------------------ */
function showService(serviceId) {
  document.querySelectorAll(".sub-services").forEach((section) => {
    section.style.display = section.id === serviceId ? "block" : "none";
  });
}

window.openService = function (evt, serviceId) {
  showService(serviceId);
  document.querySelectorAll(".tablink").forEach((tab) => tab.classList.remove("active-tab"));
  evt.currentTarget.classList.add("active-tab");
};

window.dropService = function (serviceId, menuItem) {
  const menu = menuItem.closest(".select-menu");
  if (menu) {
    menu.querySelectorAll(".select-menu-item").forEach((item) => {
      item.classList.toggle("is-current", item === menuItem);
    });
    const label = menu.querySelector(".select-menu-button span");
    if (label) label.textContent = menuItem.textContent;
  }
  showService(serviceId);
};

document.addEventListener("DOMContentLoaded", function () {
  /* ---------------------------------------------- Mobile drawer menu */
  const mobileToggle = document.getElementById("mobile-menu-toggle");
  const mobileMenu = document.getElementById("mobile-menu");
  const mobileClose = document.getElementById("mobile-menu-close");
  const mobileOverlay = document.getElementById("mobile-menu-overlay");

  if (mobileToggle && mobileMenu && mobileOverlay) {
    const openMobileMenu = () => {
      mobileMenu.classList.remove("translate-x-full");
      mobileOverlay.classList.remove("opacity-0", "invisible", "pointer-events-none");
      mobileToggle.setAttribute("aria-expanded", "true");
      document.body.classList.add("overflow-hidden");
    };

    const closeMobileMenu = () => {
      mobileMenu.classList.add("translate-x-full");
      mobileOverlay.classList.add("opacity-0", "invisible", "pointer-events-none");
      mobileToggle.setAttribute("aria-expanded", "false");
      document.body.classList.remove("overflow-hidden");
    };

    mobileToggle.addEventListener("click", () => {
      const isExpanded = mobileToggle.getAttribute("aria-expanded") === "true";
      isExpanded ? closeMobileMenu() : openMobileMenu();
    });

    mobileClose?.addEventListener("click", closeMobileMenu);
    mobileOverlay.addEventListener("click", closeMobileMenu);
    document.addEventListener("keydown", (event) => {
      if (event.key === "Escape") closeMobileMenu();
    });
  }

  /* ------------------------------- Lazy loading for images with data-src */
  if ("IntersectionObserver" in window) {
    const imageObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const img = entry.target;
          if (img.dataset.src) {
            img.src = img.dataset.src;
            img.removeAttribute("data-src");
            observer.unobserve(img);
          }
        }
      });
    });

    document.querySelectorAll("img[data-src]").forEach((img) => imageObserver.observe(img));
  }

  /* ------------------------------------------------ Splide carousels */
  // Options come from each element's data-splide attribute.
  if (window.Splide) {
    document.querySelectorAll(".splide[data-splide]").forEach((el) => {
      const slider = new Splide(el);
      if (el.hasAttribute("data-autoscroll") && window.splide && window.splide.Extensions) {
        slider.mount(window.splide.Extensions);
      } else {
        slider.mount();
      }
    });
  }

  /* --------------------------------- Home page: partner logo rotation */
  const firstRow = document.getElementById("first-row");
  const secondRow = document.getElementById("second-row");
  if (firstRow && secondRow) {
    const columns = firstRow.getElementsByClassName("grid-column");
    let currentIndex = 0;

    setInterval(() => {
      const column = columns[currentIndex];
      if (!column) return;
      secondRow.appendChild(column.cloneNode(true));
      firstRow.removeChild(column);
      currentIndex++;
      if (currentIndex >= columns.length) currentIndex = 0;
    }, 300000);
  }

  /* -------------------------------------------- About page: milestone tabs */
  document.querySelectorAll("[data-tabs]").forEach((tabNav) => {
    const tabs = tabNav.querySelectorAll("li[data-target]");
    const panels = document.querySelectorAll("#tab-content > div");

    tabs.forEach((tab) => {
      tab.addEventListener("click", () => {
        tabs.forEach((item) => item.classList.remove("is-current"));
        tab.classList.add("is-current");
        panels.forEach((panel) => {
          panel.classList.toggle("hidden", panel.id !== tab.dataset.target);
        });
      });
    });
  });

  /* --------------------------------------- Courses archive: category tabs */
  document.querySelectorAll("[data-course-tabs]").forEach((tabNav) => {
    const tabs = tabNav.querySelectorAll("li[data-category]");
    const cards = document.querySelectorAll(".courses-bloc .card-column");

    const filterCourses = (category) => {
      cards.forEach((card) => {
        card.style.display = card.dataset.category === category ? "block" : "none";
      });
    };

    const current = tabNav.querySelector("li.is-current") || tabs[0];
    if (current) filterCourses(current.dataset.category);

    tabs.forEach((tab) => {
      tab.addEventListener("click", () => {
        tabs.forEach((item) => item.classList.remove("is-current"));
        tab.classList.add("is-current");
        filterCourses(tab.dataset.category);
      });
    });
  });

  /* ------------------------------------- Articles page: category filter */
  document.querySelectorAll("[data-filter-menu]").forEach((menu) => {
    const label = menu.querySelector(".select-menu-button span");
    const posts = document.querySelectorAll(".articles-bloc .card-column");

    menu.querySelectorAll(".select-menu-item").forEach((item) => {
      item.addEventListener("click", (event) => {
        event.preventDefault();
        const selected = item.dataset.category;

        posts.forEach((post) => {
          post.style.display = selected === "all" || post.dataset.category === selected ? "block" : "none";
        });

        if (label) label.textContent = item.textContent;
      });
    });
  });

  /* ------------------------------------ Manufacturing page: accordion */
  document.querySelectorAll(".accordion").forEach((button) => {
    button.addEventListener("click", function () {
      this.classList.toggle("active");
      const panel = this.nextElementSibling;
      if (!panel) return;
      panel.style.maxHeight = panel.style.maxHeight ? null : panel.scrollHeight + "px";
    });
  });

  /* ------------------------ Course / training pages: enrolment popup */
  const popup = document.querySelector(".popup");
  const openButton = document.querySelector(".register");
  if (popup && openButton) {
    const root = document.documentElement;
    const closePopup = () => {
      popup.style.display = "none";
      root.classList.remove("no-scroll");
    };

    openButton.addEventListener("click", () => {
      popup.style.display = "flex";
      root.classList.add("no-scroll");
    });

    popup.addEventListener("click", (event) => {
      if (event.target === popup) closePopup();
    });

    popup.querySelector(".close-btn")?.addEventListener("click", closePopup);
  }

  /* ---------------------------------------- Event page: countdown */
  const countdown = document.getElementById("saa");
  if (countdown && countdown.dataset.eventDate) {
    const target = new Date(countdown.dataset.eventDate.replace(" ", "T") + "T00:00:00").getTime();
    const fallbackTarget = new Date(countdown.dataset.eventDate + " 00:00:00").getTime();
    const countDownDate = Number.isNaN(target) ? fallbackTarget : target;

    if (!Number.isNaN(countDownDate)) {
      const render = () => {
        const distance = countDownDate - Date.now();

        if (distance < 0) {
          countdown.innerHTML = "...";
          return false;
        }

        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        countdown.innerHTML =
          "<div>" + days + "<span>DAYS</span></div>" +
          "<div>" + hours + "<span>HOURS</span></div>" +
          "<div>" + minutes + "<span>MINUTES</span></div>" +
          "<div>" + seconds + "<span>SECONDS</span></div>";
        return true;
      };

      const timer = setInterval(() => {
        if (!render()) clearInterval(timer);
      }, 1000);
    }
  }
});
