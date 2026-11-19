<?php get_header() ?>

<div class="page-hero-section">
    <h1> Our Courses </h1>
    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/header-vector.svg">
</div>

<div class="md:flex -mx-3 -mt-3 mb-3 last:-mb-3">
    <div class="grow shrink basis-0 lg:flex-none lg:w-2/3 lg:ml-[16.6667%] p-3">
        <h4 class="articles-heading text-center">Explore our top online engineering and IT courses, designed 
            to equip you with valuable skills for career growth and success.</h4>
    </div>
</div>

<div class="courses-bloc">
    <div class="tab-nav tab-nav-centered" style="margin-bottom: 4em;" data-course-tabs>
        <ul style="display: flex; gap: .75rem;">
            <li class="is-current" data-category="it-courses"><a>IT Courses</a></li>
            <li data-category="engineering-courses"><a>Engineering Courses</a></li>
            <li data-category="digital-transformation"><a>Digital Transformation</a></li>
            <li data-category="uncategorized"><a>Uncategorized</a></li>
        </ul>
    </div>

    <div class="md:flex flex-wrap -mx-3 -mt-3 mb-3 last:-mb-3">
        <?php
        $args = array(
            'post_type'      => 'courses',
            'post_status'    => 'publish',
            'posts_per_page' => -1,
        );
        $courses = new WP_Query($args);
        if ($courses->have_posts()) :
            while ($courses->have_posts()) : $courses->the_post();
                $category_slug = viscar_first_category_slug();
        ?>
        <div class="card-column grow shrink basis-0 lg:flex-none lg:w-1/3 md:flex-none md:w-1/2 max-md:flex-none max-md:w-full p-3"
            data-category="<?php echo esc_attr($category_slug); ?>">
            <?php get_template_part('template-parts/course-card'); ?>
        </div>
        <?php endwhile; ?>
        <?php else : ?>
            <h4 class="soon-trainings"><?php _e('Courses are coming soon'); ?></h4>
            <div class="loader-line trainings"></div>
        <?php endif;
        wp_reset_postdata();
        ?>
    </div>

</div>


<div class="subscribe-section">
    <?php get_template_part('template-parts/subscription-section'); ?>
</div>

<?php
    get_footer();
?>

