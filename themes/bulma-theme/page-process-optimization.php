<?php 

/* Template Name: Process Optimization Page */

?>



<?php get_header(); ?>

<div class="page-hero-section">

    <h1> <?php echo get_the_title(); ?> </h1>

    <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/header-vector.svg">

</div>

<div class="solution-section">
    <div class="columns is-multiline is-flex is-flex-wrap-wrap-reverse">
        <div class="column is-6-desktop is-12-mobile">
            <?php the_content(); ?>
        </div>
        <div class="column is-6-desktop process-optimization-img">
        </div>
    </div>
</div>

<div class="columns is-multiline mx-4">
    <div class="column is-7-desktop is-offset-3-desktop">
        <p class="subsolution-title">The process optimization solutions mainly targets manufacturing,
            oil and gas, electrical power and telecommunication industries. We focus mainly in two areas:
        </h3>
    </div>
</div>

<div class="columns is-multiline mb-6 mx-4">
    <div class="column is-3-desktop is-offset-3-desktop">
        <a href="<?php echo home_url(); ?>/manufacturing-process-efficiency" class="subsol-bloc">
            <div class="subsolution-links">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/manufacturing-icon.svg" alt="">
                <div>
                    <p> Manufacturing and Operational Process Efficiency </p>
                    <p> Learn More </p>
                </div>
            </div>
        </a>
    </div>
    <div class="column is-3-desktop">
        <a href="<?php echo home_url(); ?>/energy-efficiency" class="subsol-bloc">
            <div class="subsolution-links">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/energy-icon.svg" alt="">
                <div>
                    <p> Energy Efficiency </p>
                    <p> Learn More </p>
                </div>
            </div>
        </a>
    </div>
</div>


<?php get_footer(); ?>