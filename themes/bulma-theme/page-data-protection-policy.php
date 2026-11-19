<?php
/* Template Name: Data Protection Policy Page */
?>

<?php get_header(); ?>

<div class="page-hero-section">
    <h1> <?php the_title(); ?> </h1>
    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/header-vector.svg">
</div>

<div class="single-block md:flex justify-center mb-3 last:-mb-3">
    <div class='grow shrink basis-0 lg:flex-none lg:w-3/4 p-3'>
        <h1 class='single-title text-center my-6 pb-3'><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </div>
</div>

<?php get_footer(); ?>