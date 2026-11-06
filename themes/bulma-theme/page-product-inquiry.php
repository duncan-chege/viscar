<?php 

/* Template Name:  Product Inquiry Page */

?>

<?php get_header(); ?>

<div class="page-hero-section">
    <h1> <?php echo get_the_title(); ?> </h1>
    <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/header-vector.svg">
</div>

<div class="columns">
    <div class="column is-8-desktop is-offset-2-desktop">
        <h4 class="has-text-centered articles-heading">Curious about our solution products? Fill in the form below so we
            know how our solutions can help your business</h4>
    </div>
</div>

<div class="columns is-multiline">
    <div class="column is-7-desktop is-offset-2-desktop">
        <div class="inquiry-form">
            <?php echo do_shortcode("[forminator_form id='529']"); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>