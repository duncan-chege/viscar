<?php 

/* Template Name: Digital Transformation Page */

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

        <div class="column is-6-desktop digital-transformation-img">
        </div>
    </div>

    <div class="columns is-multiline">
        <div class="column is-12-desktop">
            <p class="subsolution-title"> Our portfolio of digital transformation solutions entails </h3>
        </div>
    </div>

    <div class="columns is-multiline">
        <div class="column is-3-desktop is-6-tablet">
            <a href="<?php echo home_url(); ?>/broadband-solutions" class="subsol-bloc">
                <div class="subsolution-links">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/telecommunication-icon.svg" alt="">
                    <div>
                        <p> Broadband Solutions </p>
                        <p> Learn More </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="column is-3-desktop is-6-tablet">
            <a href="<?php echo home_url(); ?>/data-center-and-cloud-solutions" class="subsol-bloc">
                <div class="subsolution-links">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data-cloud-icon.svg" alt="">
                    <div>
                        <p> Data Center & Cloud Solutions </p>
                        <p> Learn More </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="column is-3-desktop is-6-tablet">
            <a href="<?php echo home_url(); ?>/cyber-security-solutions" class="subsol-bloc">
                <div class="subsolution-links">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cyber-security-icon.svg" alt="">
                    <div>
                        <p> Cyber Security Solutions </p>
                        <p> Learn More </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="column is-3-desktop is-6-tablet">
            <a href="<?php echo home_url(); ?>/iot-smart-solutions" class="subsol-bloc">
                <div class="subsolution-links">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/iot-icon.svg" alt="">
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
    <h3 class="pb-6">Partnerships and Collaborations</h3>
    <div class="splide">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <a href="https://www.thefoa.org/" target="_blank"><img class=""
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/foa-logo.jpg"></a>
                </li>
                <li class="splide__slide">
                    <a href="https://www.huawei.com/ke/" target="_blank"><img class=""
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/huawei-logo.jpg"></a>
                </li>
                <li class="splide__slide">
                    <a href="https://konza.go.ke/" target="_blank"><img class=""
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/konza-logo.jpg"></a>
                </li>
                <li class="splide__slide">
                    <a href="https://www.papertrail.co.ke/" target="_blank"><img class=""
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/papertrail-logo.jpg"></a>
                </li>
                <li class="splide__slide">
                    <a href="https://pecb.com/" target="_blank"><img class=""
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/pecb-logo.jpg"></a>
                </li>
                <li class="splide__slide">
                    <a href="https://www.se.com/ke/en/" target="_blank"><img class=""
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/schneider-logo.png"></a>
                </li>
        </div>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function () {

        new Splide('.splide', {

            arrows: false,

            pagination: false,

            type: 'loop',

            drag: 'free',

            perPage: 4,
           
            breakpoints: {
                1200: {
                    arrows: false
                },
                800: {
                    perPage: 2
                },
                640: {},
            },

            focus: 'center',

            autoScroll: {

                speed: 0.5,

            },

        }).mount(window.splide.Extensions);

    });
</script>



<?php get_footer(); ?>