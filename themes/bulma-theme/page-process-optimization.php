<?php 

/* Template Name: Process Optimization Page */

?>



<?php get_header(); ?>

<div class="page-hero-section">

    <h1> <?php the_title(); ?> </h1>

    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/header-vector.svg">

</div>

<div class="solution-section">
    <div class="flex flex-wrap-reverse -mx-3 -mt-3 mb-3 last:-mb-3">
        <div class="grow shrink basis-0 lg:flex-none lg:w-1/2 max-md:flex-none max-md:w-full p-3">
            <?php the_content(); ?>
        </div>
        <div class="process-optimization-img grow shrink basis-0 lg:flex-none lg:w-1/2 p-3">
        </div>
    </div>
</div>

<div class="md:flex flex-wrap mx-4 -mt-3 mb-3 last:-mb-3">
    <div class="grow shrink basis-0 lg:flex-none lg:w-7/12 lg:ml-[25%] p-3">
        <p class="subsolution-title">The process optimization solutions mainly targets manufacturing,
            oil and gas, electrical power and telecommunication industries. We focus mainly in two areas:
        </p>
    </div>
</div>

<div class="md:flex flex-wrap mx-4 -mt-3 mb-12">
    <div class="grow shrink basis-0 lg:flex-none lg:w-1/4 lg:ml-[25%] p-3">
        <a href="<?php echo esc_url(home_url('/')); ?>manufacturing-process-efficiency" class="subsol-bloc">
            <div class="subsolution-links">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/manufacturing-icon.svg" alt="">
                <div>
                    <p> Manufacturing and Operational Process Efficiency </p>
                    <p> Learn More </p>
                </div>
            </div>
        </a>
    </div>
    <div class="grow shrink basis-0 lg:flex-none lg:w-1/4 p-3">
        <a href="<?php echo esc_url(home_url('/')); ?>energy-efficiency" class="subsol-bloc">
            <div class="subsolution-links">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/energy-icon.svg" alt="">
                <div>
                    <p> Energy Efficiency </p>
                    <p> Learn More </p>
                </div>
            </div>
        </a>
    </div>
</div>


<?php get_footer(); ?>