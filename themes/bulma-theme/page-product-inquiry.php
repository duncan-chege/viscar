<?php 

/* Template Name:  Product Inquiry Page */

?>

<?php get_header(); ?>

<div class="page-hero-section">
    <h1> <?php the_title(); ?> </h1>
    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/header-vector.svg">
</div>

<div class="md:flex -mx-3 -mt-3 mb-3 last:-mb-3">
    <div class="grow shrink basis-0 lg:flex-none lg:w-2/3 lg:ml-[16.6667%] p-3">
        <h4 class="articles-heading text-center">Curious about our solution products? Fill in the form below so we
            know how our solutions can help your business</h4>
    </div>
</div>

<div class="md:flex flex-wrap -mx-3 -mt-3 mb-3 last:-mb-3">
    <div class="grow shrink basis-0 lg:flex-none lg:w-7/12 lg:ml-[16.6667%] p-3">
        <div class="inquiry-form">
            <?php echo do_shortcode("[forminator_form id='529']"); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>