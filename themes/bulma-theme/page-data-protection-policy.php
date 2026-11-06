<?php
/* Template Name: Data Protection Policy Page */
?>

<?php get_header(); ?>

<div class="page-hero-section">
    <h1> <?php echo get_the_title(); ?> </h1>
    <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/header-vector.svg">
</div>

<div class="columns single-block is-centered">
    <div class='column is-three-quarters-desktop'>
        <h1 class='has-text-centered font-weight-bold my-5 pb-3 single-title'><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </div>
</div>

<?php get_footer(); ?>