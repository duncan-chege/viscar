<?php 

/* Template Name: Digital Transformation Page */

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

        <div class="digital-transformation-img grow shrink basis-0 lg:flex-none lg:w-1/2 p-3">
        </div>
    </div>

    <div class="md:flex flex-wrap -mx-3 -mt-3 mb-3 last:-mb-3">
        <div class="grow shrink basis-0 lg:flex-none lg:w-full p-3">
            <p class="subsolution-title"> Our portfolio of digital transformation solutions entails </p>
        </div>
    </div>

    <div class="md:flex flex-wrap -mx-3 -mt-3 mb-3 last:-mb-3">
        <div class="grow shrink basis-0 lg:flex-none lg:w-1/4 md:flex-none md:w-1/2 p-3">
            <a href="<?php echo esc_url(home_url('/')); ?>broadband-solutions" class="subsol-bloc">
                <div class="subsolution-links">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/telecommunication-icon.svg" alt="">
                    <div>
                        <p> Broadband Solutions </p>
                        <p> Learn More </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="grow shrink basis-0 lg:flex-none lg:w-1/4 md:flex-none md:w-1/2 p-3">
            <a href="<?php echo esc_url(home_url('/')); ?>data-center-and-cloud-solutions" class="subsol-bloc">
                <div class="subsolution-links">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/data-cloud-icon.svg" alt="">
                    <div>
                        <p> Data Center & Cloud Solutions </p>
                        <p> Learn More </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="grow shrink basis-0 lg:flex-none lg:w-1/4 md:flex-none md:w-1/2 p-3">
            <a href="<?php echo esc_url(home_url('/')); ?>cyber-security-solutions" class="subsol-bloc">
                <div class="subsolution-links">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/cyber-security-icon.svg" alt="">
                    <div>
                        <p> Cyber Security Solutions </p>
                        <p> Learn More </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="grow shrink basis-0 lg:flex-none lg:w-1/4 md:flex-none md:w-1/2 p-3">
            <a href="<?php echo esc_url(home_url('/')); ?>iot-smart-solutions" class="subsol-bloc">
                <div class="subsolution-links">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/iot-icon.svg" alt="">
                    <div>
                        <p> IoT Smart Solutions </p>
                        <p> Learn More </p>
                    </div>
                </div>
            </a>
        </div>
    </div>

</div>

<div class="partnerships">
    <h3 class="pb-12">Partnerships and Collaborations</h3>
    <div class="splide" data-splide='{"type":"loop","arrows":false,"pagination":false,"drag":"free","perPage":4,"focus":"center","breakpoints":{"1200":{"arrows":false},"800":{"perPage":2},"640":{}},"autoScroll":{"speed":0.5}}' data-autoscroll>
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <a href="https://www.thefoa.org/" target="_blank"><img
                            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/foa-logo.jpg"></a>
                </li>
                <li class="splide__slide">
                    <a href="https://www.huawei.com/ke/" target="_blank"><img
                            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/huawei-logo.jpg"></a>
                </li>
                <li class="splide__slide">
                    <a href="https://konza.go.ke/" target="_blank"><img
                            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/konza-logo.jpg"></a>
                </li>
                <li class="splide__slide">
                    <a href="https://www.papertrail.co.ke/" target="_blank"><img
                            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/papertrail-logo.jpg"></a>
                </li>
                <li class="splide__slide">
                    <a href="https://pecb.com/" target="_blank"><img
                            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/pecb-logo.jpg"></a>
                </li>
                <li class="splide__slide">
                    <a href="https://www.se.com/ke/en/" target="_blank"><img
                            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/schneider-logo.png"></a>
                </li>
        </ul>
        </div>
    </div>
</div>

<?php get_footer(); ?>