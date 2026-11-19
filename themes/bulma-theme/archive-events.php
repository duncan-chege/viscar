<?php 
  get_header();
?>

<div class="page-hero-section">
    <h1> Upcoming Events </h1>
    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/header-vector.svg">
</div>

<?php 
$args = array(
    'post_type' => 'events', 
    'post_status' => 'publish',
);
$proj_query= new WP_Query($args); 
?>

<div class="articles-bloc">
    <div class="md:flex flex-wrap -mx-3 -mt-3 mb-3 last:-mb-3">
        <?php if ($proj_query->have_posts()) : ?>
        <?php while ($proj_query->have_posts()) : $proj_query->the_post(); ?>
        <div class="card-column grow shrink basis-0 lg:flex-none lg:w-1/3 md:flex-none md:w-1/2 max-md:flex-none max-md:w-full p-3">
            <?php get_template_part('template-parts/blog-card'); ?>
        </div>

        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>

        <?php else : ?>
        <h4 class="soon-trainings"><?php _e('Events are coming soon'); ?></h4>
        <div class="loader-line trainings"></div>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>