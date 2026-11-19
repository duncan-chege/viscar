<?php 

/* Template Name: Upcoming Trainings Page */

?>

<?php get_header(); ?>

<div class="page-hero-section">
    <h1> Upcoming Trainings </h1>
    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/header-vector.svg">
</div>

<?php 
    $args = array(
        'post_type' => 'upcoming-trainings',
    ); 
    $upcoming = new WP_Query($args);
?>

<div class="trainings-block">
    <?php if ($upcoming->have_posts()) : ?>

    <div class="md:flex flex-wrap -mx-3 -mt-3 mb-3 last:-mb-3">
        <?php while ($upcoming->have_posts()) : $upcoming->the_post(); ?>
        <div class="card-column grow shrink basis-0 lg:flex-none lg:w-1/3 md:flex-none md:w-1/2 max-md:flex-none max-md:w-full p-3">
            <a href="<?php the_permalink(); ?>">
                <div>
                    <?php if (has_post_thumbnail()) {
                the_post_thumbnail();
            } else { ?>
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/training-placeholder.png" alt="">
                    <?php } ?>

                    <?php
            $start_date = viscar_format_date(viscar_field('start_date'));
            $end_date = viscar_format_date(viscar_field('end_date'));
            ?>

                    <div class="name-date">
                        <h4 class="capitalize"><?php the_title(); ?></h4>
                        <p>
                            <?php echo esc_html($start_date); ?>
                            <?php if ($end_date) { echo '- ' . esc_html($end_date); } ?>
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