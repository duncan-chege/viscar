<?php get_header(); ?>

<div class="page-hero-section">
    <h1> Page Doesn't Exist </h1>
    <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/header-vector.svg">
</div>

<div class="error-section">
    <div class="columns is-multiline is-flex is-flex-wrap-wrap-reverse">
        <div class="column is-6-desktop is-12-mobile is-flex is-flex-direction-column is-justify-content-center	">
            <h5>We’ve searched but the page you requested doesn’t exist. </h5>
            <h5> Though don’t worry, our navigation menu items show all our available pages. </h5>

            <div class="go-back">
                <a href="<?php echo esc_url(home_url('/')); ?>">Back to homepage </a>
            </div>
        </div>

        <div class="column is-6-desktop page-missing-img">
        </div>
    </div>
</div>

<?php get_footer(); ?>