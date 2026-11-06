document.addEventListener('DOMContentLoaded', () => {
    const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
    $navbarBurgers.forEach(el => {
        el.addEventListener('click', () => {
            const target = el.dataset.target;
            const $target = document.getElementById(target);
            el.classList.toggle('is-active');
            $target.classList.toggle('is-active');
        });
    });

    const tabs = document.querySelectorAll('.tabs li');
    const tabContentBoxes = document.querySelectorAll('#tab-content > div');

    tabs.forEach((tab) => {
        tab.addEventListener('click', () => {
            tabs.forEach(item => item.classList.remove('is-active'));
            tab.classList.add('is-active');
            const target = tab.dataset.target;
            tabContentBoxes.forEach(box => {
                if (box.getAttribute('id') === target) {
                    box.classList.remove('is-hidden');
                } else {
                    box.classList.add('is-hidden');
                }
            });
        });
    });

    var open_btn = document.querySelector('.register');
    const popup = document.querySelector('.popup');
    const section = document.querySelector('html');
    const close_btn = document.querySelector('.close-btn');

    if (document.querySelector('.single-upcoming-trainings, .single-events, .single-courses')) {
        open_btn.addEventListener('click', (e) => {
            popup.style.display = 'flex';
            section.classList.add('no-scroll');
        });

        popup.addEventListener('click', (e) => {
            if (e.target.matches('.popup')) {
                popup.style.display = 'none';
                section.classList.remove('no-scroll');
            }
        });

        close_btn.addEventListener('click', () => {
            popup.style.display = 'none';
            section.classList.remove('no-scroll');
        });
    }

    var subMenus = document.querySelectorAll('.sub-menu');

    subMenus.forEach(function (subMenu) {
      subMenu.style.display = 'none';
    
      var parentItem = subMenu.closest('.navbar-dropdown').previousElementSibling;
      var isSubMenuHovered = false;
    
      parentItem.addEventListener('mouseenter', function () {
        subMenu.style.display = 'block';
      });
    
      parentItem.addEventListener('mouseleave', function () {
        setTimeout(function () {
          if (!isSubMenuHovered) {
            subMenu.style.display = 'none';
          }
        }, 0); // Adjust the delay as needed
      });
    
      subMenu.addEventListener('mouseenter', function () {
        isSubMenuHovered = true;
      });
    
      subMenu.addEventListener('mouseleave', function () {
        isSubMenuHovered = false;
        subMenu.style.display = 'none';
      });
    });    


    document.addEventListener('DOMContentLoaded', () => {

        // Get all "navbar-burger" elements
        const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

        // Add a click event on each of them
        $navbarBurgers.forEach(el => {
            el.addEventListener('click', () => {

                // Get the target from the "data-target" attribute
                const target = el.dataset.target;
                const $target = document.getElementById(target);

                // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                el.classList.toggle('is-active');
                $target.classList.toggle('is-active');

            });
        });

    });

});