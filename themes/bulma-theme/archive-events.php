<?php 
  get_header();
?>

<div class="page-hero-section">
    <h1> Upcoming Events </h1>
    <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/header-vector.svg">
</div>

<?php 
$args = array(
    'post_type' => 'events', 
    'post_status' => 'publish',
);
$proj_query= new WP_Query($args); 
?>

<div class="articles-bloc">
    <div class="columns is-multline is-offset-2 is-multiline">
        <?php if ($proj_query->have_posts()) : ?>
        <?php while ($proj_query->have_posts()) : $proj_query->the_post(); ?>
        <div class="column is-4-desktop is-6-tablet is-12-mobile card-column">
            <?php get_template_part('template-parts/blog-card'); ?>
        </div>

        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>

        <?php else : ?>
        <h4 class="soon-trainings"><?php _e('Events are coming soon'); ?></h4>
        <div class="loader-line trainings"></div></p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>