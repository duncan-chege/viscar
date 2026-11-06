<?php 

/* Template Name: Safety in Engineering Page */

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
        <div class="column is-6-desktop safety-engineering-img">
        </div>
    </div>
</div>


<div class="columns is-multiline">
    <div class="column is-12-desktop">
        <p class="subsolution-title"> Our main focus areas are </h3>
    </div>
</div>

<div class="columns is-multiline">
    <div class="column is-3-desktop is-6-tablet is-offset-2-desktop">
        <a href="<?php echo home_url(); ?>/occupational-safety-health-and-environment" class="subsol-bloc">
            <div class="subsolution-links">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/occupational-safety-icon.svg" alt="">
                <div>
                    <p> Occupational Safety Health and Environment </p>
                    <p> Learn More </p>
                </div>
            </div>
        </a>
    </div>
    <div class="column is-3-desktop is-6-tablet">
        <a href="<?php echo home_url(); ?>/work-at-height" class="subsol-bloc">
            <div class="subsolution-links">
				  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/wah-icon.svg" alt="">
                <div>
                    <p> Work At Height Safety </p>
                    <p> Learn More </p>
                </div>
            </div>
        </a>
    </div>
    <div class="column is-3-desktop is-6-tablet">
		<a href="<?php echo home_url(); ?>/safety-in-engineering/electrical-safety" class="subsol-bloc">
            <div class="subsolution-links">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/electrical-safety-icon.svg" alt="">
                <div>
                    <p> Electrical Safety </p>
                    <p> Learn More </p>
                </div>
            </div>
        </a>
    </div>
    <div class="column is-3-desktop is-6-tablet is-offset-2-desktop">
        <a href="<?php echo home_url(); ?>/fire-safety" class="subsol-bloc">
            <div class="subsolution-links">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fire-safety-icon.svg" alt="">
                <div>
                    <p> Fire Safety </p>
                    <p> Learn More </p>
                </div>
            </div>
        </a>
    </div>
    <div class="column is-3-desktop is-6-tablet">
        <a href="<?php echo home_url(); ?>/construction-safety" class="subsol-bloc">
            <div class="subsolution-links">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/construction-safety-icon.svg" alt="">
                <div>
                    <p> Construction Safety </p>
                    <p> Learn More </p>
                </div>
            </div>
        </a>
    </div>
</div>

<div class="partnerships">
    <h3 class="pb-4">Partnerships and Collaborations</h3>
    <div class="is-flex is-flex-wrap-wrap is-justify-content-space-evenly mt-5">
        <a href="https://ifwh.co.za" target="_blank"><img class=""
                src="<?php echo get_template_directory_uri(); ?>/assets/img/ifwh-logo.jpg"></a>
        <a href="https://group583.com/" target="_blank"><img class=""
                src="<?php echo get_template_directory_uri(); ?>/assets/img/group583-logo.jpg"></a>
        <a href="https://nca.go.ke/" target="_blank"><img class=""
                src="<?php echo get_template_directory_uri(); ?>/assets/img/nca-logo.jpg"></a>
        <a href="https://www.nita.go.ke/" target="_blank"><img class=""
                src="<?php echo get_template_directory_uri(); ?>/assets/img/nita-logo.png"></a>
    </div>
</div>

<?php get_footer(); ?>