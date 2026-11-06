<?php 

/* Template Name: Post Archive Page */
    
get_header() ?>

<div class="page-hero-section">
    <h1> Our Articles </h1>
    <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/header-vector.svg">
</div>

<div class="columns">
    <div class="column is-8-desktop is-offset-2-desktop">
        <h4 class="has-text-centered articles-heading">Written by our experts, our blog articles cover the latest trends
            in the engineering technology space. Let our knowledge benefit your business</h4>
    </div>
</div>

<div class="articles-bloc">
    <div class="filter-section">
        <p> Filter By </p>
        <div class="dropdown is-hoverable px-3">
            <div class="dropdown-trigger category-selector">
                <button class="button" aria-haspopup="true" aria-controls="dropdown-menu">
                    <span>Choose A Solution</span>
                    <span class="icon is-small">
                        <i class="bi bi-chevron-down" aria-hidden="true"></i>
                    </span>
                </button>
            </div>
            <div class="dropdown-menu" id="dropdown-menu" role="menu">
                <div class="dropdown-content">
                    <a href="#" class="dropdown-item" data-category="all">All Solutions</a>
                    <a href="#" class="dropdown-item" data-category="digital-transformation">Digital Transformation</a>
                    <a href="#" class="dropdown-item" data-category="process-optimization">Process Optimization</a>
                    <a href="#" class="dropdown-item" data-category="industrial-automation">Industrial Automation</a>
                    <a href="#" class="dropdown-item" data-category="safety-engineering">Safety In Engineering</a>
                    <a href="#" class="dropdown-item" data-category="leadership-engineering">Leadership In
                        Engineering</a>
                </div>
            </div>
        </div>
    </div>

    <div class="columns is-multiline is-offset-2 is-multiline">
        <?php
         $selectedCategory = ''; // Initialize variable to store the selected category

         // Check if a category is selected from the dropdown
         if (isset($_GET['category'])) {
             $selectedCategory = $_GET['category'];
         }
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => -1,
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post(); ?>
        <div class="column is-4-desktop is-6-tablet is-12-mobile card-column"
            data-category="<?php echo get_the_category()[0]->slug; ?>">
            <?php get_template_part('template-parts/blog-card'); ?>
        </div>
        <?php endwhile;
        endif;
        wp_reset_postdata();
        ?>
    </div>
</div>


<div class="subscribe-section">
    <?php get_template_part('template-parts/subscription-section'); ?>
</div>


<script>
    
    const dropdownButton = document.querySelector(".category-selector");
    const dropdownMenu = document.querySelector("#dropdown-menu");
    const dropdownItems = dropdownMenu.querySelectorAll(".dropdown-item");
    const posts = document.querySelectorAll(".card-column");

    dropdownItems.forEach((item) => {
        item.addEventListener("click", (event) => {
            event.preventDefault();

            const selectedCategory = item.getAttribute("data-category");

            // Show all posts if "All Posts" is selected
            if (selectedCategory === "all") {
                posts.forEach((post) => {
                    post.style.display = "block";
                });
            } else {
                // Filter and hide posts based on the selected category
                posts.forEach((post) => {
                    const postCategory = post.getAttribute("data-category");
                    if (postCategory !== selectedCategory) {
                        post.style.display = "none";
                    } else {
                        post.style.display = "block";
                    }
                });
            }

            dropdownButton.querySelector("span:first-child").textContent = item.textContent;
            dropdownButton.removeAttribute("aria-expanded");
        });
    });
</script>


<?php get_footer(); ?>