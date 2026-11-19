<?php get_header(); ?>

<div class="page-hero-section">
    <h1> Page Doesn't Exist </h1>
    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/header-vector.svg">
</div>

<div class="error-section">
    <div class="flex flex-wrap-reverse -mx-3 -mt-3 mb-3 last:-mb-3">
        <div class="grow shrink basis-0 lg:flex-none lg:w-1/2 max-md:flex-none max-md:w-full flex flex-col justify-center p-3">
            <h5>We’ve searched but the page you requested doesn’t exist. </h5>
            <h5> Though don’t worry, our navigation menu items show all our available pages. </h5>

            <div class="go-back">
                <a href="<?php echo esc_url(home_url('/')); ?>">Back to homepage </a>
            </div>
        </div>

        <div class="page-missing-img grow shrink basis-0 lg:flex-none lg:w-1/2 p-3">
        </div>
    </div>
</div>

<?php get_footer(); ?>