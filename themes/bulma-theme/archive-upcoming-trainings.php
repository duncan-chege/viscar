<?php 

/* Template Name: Upcoming Trainings Page */

?>

<?php get_header(); ?>

<div class="page-hero-section">
    <h1> Upcoming Trainings </h1>
    <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/header-vector.svg">
</div>

<?php 
    $args = array(
        'post_type' => 'upcoming-trainings',
    ); 
    $upcoming = new WP_Query($args);
?>

<div class="trainings-block">
    <?php if ($upcoming->have_posts()) : ?>

    <div class="columns is-multiline is-multiline">
        <?php while ($upcoming->have_posts()) : $upcoming->the_post(); ?>
        <div class="column is-4-desktop is-6-tablet is-12-mobile card-column">
            <a href="<?php echo get_permalink(); ?>">
                <div>
                    <?php if (has_post_thumbnail()) {
                the_post_thumbnail();
            } else { ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/training-placeholder.png">
                    <?php } ?>

                    <?php
            $start_date = CFS()->get('start_date');
            $end_date = CFS()->get('end_date');
            $fees = CFS()->get('fees');
            ?>

                    <div class="name-date">
                        <h4 class="is-capitalized"><?php the_title(); ?></h4>
                        <p>
                            <?php if ($start_date) {
                    $formatted_date = date('F j', strtotime($start_date));
                    echo esc_html($formatted_date); } ?>
                            <?php if ($end_date) {
                    $formatted_date = date('F j', strtotime($end_date));
                    echo '- ' . esc_html($formatted_date); } ?>
                        </p>
                        <div><i class="bi bi-arrow-right" style="font-size: 1.2rem; color: #fff; font-weight: 900;"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    </div>

    <?php else : ?>

    <h3 class="soon-trainings"><?php _e('New trainings are coming soon'); ?></h3>

    <div class="loader-line trainings"></div>
    <?php 
endif;
wp_reset_postdata();
?>
</div>

<div class="subscribe-section">
    <?php get_template_part('template-parts/subscription-section'); ?>
</div>

<?php get_footer(); ?>