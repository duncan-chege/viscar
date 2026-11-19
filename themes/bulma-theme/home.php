<?php 

/* Template Name: Post Archive Page */
    
get_header() ?>

<div class="page-hero-section">
    <h1> Our Articles </h1>
    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/header-vector.svg">
</div>

<div class="md:flex -mx-3 -mt-3 mb-3 last:-mb-3">
    <div class="grow shrink basis-0 lg:flex-none lg:w-2/3 lg:ml-[16.6667%] p-3">
        <h4 class="articles-heading text-center">Written by our experts, our blog articles cover the latest trends
            in the engineering technology space. Let our knowledge benefit your business</h4>
    </div>
</div>

<div class="articles-bloc">
    <div class="filter-section">
        <p> Filter By </p>
        <div class="select-menu px-3" data-filter-menu>
            <div class="category-selector">
                <button type="button" class="select-menu-button" aria-haspopup="true" aria-controls="category-menu">
                    <span>Choose A Solution</span>
                    <span class="icon">
                        <i class="bi bi-chevron-down" aria-hidden="true"></i>
                    </span>
                </button>
            </div>
            <div class="select-menu-list" id="category-menu" role="menu">
                <div class="select-menu-content">
                    <a href="#" class="select-menu-item" data-category="all">All Solutions</a>
                    <a href="#" class="select-menu-item" data-category="digital-transformation">Digital Transformation</a>
                    <a href="#" class="select-menu-item" data-category="process-optimization">Process Optimization</a>
                    <a href="#" class="select-menu-item" data-category="industrial-automation">Industrial Automation</a>
                    <a href="#" class="select-menu-item" data-category="safety-engineering">Safety In Engineering</a>
                    <a href="#" class="select-menu-item" data-category="leadership-engineering">Leadership In
                        Engineering</a>
                </div>
            </div>
        </div>
    </div>

    <div class="md:flex flex-wrap -mx-3 -mt-3 mb-3 last:-mb-3">
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
        <div class="card-column grow shrink basis-0 lg:flex-none lg:w-1/3 md:flex-none md:w-1/2 max-md:flex-none max-md:w-full p-3"
            data-category="<?php echo esc_attr(viscar_first_category_slug()); ?>">
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




<?php get_footer(); ?>