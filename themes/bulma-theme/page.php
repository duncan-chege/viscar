<?php 
/* Template Name: New Page */
?>

<?php get_header(); ?>

<div class="page-hero-section">
    <h1> <?php echo get_the_title(); ?> </h1>
    <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/header-vector.svg">
    
    
</div>
<div class="column">
        <?php echo the_content(); ?>
    </div>

<?php get_footer(); ?>