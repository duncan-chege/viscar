<?php 
/* Template Name: New Page */
?>

<?php get_header(); ?>

<div class="page-hero-section">
    <h1> <?php the_title(); ?> </h1>
    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/header-vector.svg">
    
    
</div>
<div class="grow shrink basis-0 p-3">
        <?php the_content(); ?>
    </div>

<?php get_footer(); ?>