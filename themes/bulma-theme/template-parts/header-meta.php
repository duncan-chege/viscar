<div class="breadcrumb-section">
<?php echo do_shortcode('[rank_math_breadcrumb]'); ?>
</div>

<div class="page-hero-section">
    <h1> <?php the_title(); ?> </h1>
    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/header-vector.svg">
</div>

<a href="<?php echo esc_url(home_url('/')); ?>product-enquiry" class="floating-contact">
    <div>
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/floating-icon.svg">
        <p class="m-0"> PRODUCT <br> ENQUIRY </p>
    </div>
</a>