<?php 

/* Template Name: Safety in Engineering Page */

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
        <div class="safety-engineering-img grow shrink basis-0 lg:flex-none lg:w-1/2 p-3">
        </div>
    </div>
</div>


<div class="md:flex flex-wrap -mx-3 -mt-3 mb-3 last:-mb-3">
    <div class="grow shrink basis-0 lg:flex-none lg:w-full p-3">
        <p class="subsolution-title"> Our main focus areas are </p>
    </div>
</div>

<div class="md:flex flex-wrap -mx-3 -mt-3 mb-3 last:-mb-3">
    <div class="grow shrink basis-0 lg:flex-none lg:w-1/4 md:flex-none md:w-1/2 lg:ml-[16.6667%] p-3">
        <a href="<?php echo esc_url(home_url('/')); ?>occupational-safety-health-and-environment" class="subsol-bloc">
            <div class="subsolution-links">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/occupational-safety-icon.svg" alt="">
                <div>
                    <p> Occupational Safety Health and Environment </p>
                    <p> Learn More </p>
                </div>
            </div>
        </a>
    </div>
    <div class="grow shrink basis-0 lg:flex-none lg:w-1/4 md:flex-none md:w-1/2 p-3">
        <a href="<?php echo esc_url(home_url('/')); ?>work-at-height" class="subsol-bloc">
            <div class="subsolution-links">
				  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/wah-icon.svg" alt="">
                <div>
                    <p> Work At Height Safety </p>
                    <p> Learn More </p>
                </div>
            </div>
        </a>
    </div>
    <div class="grow shrink basis-0 lg:flex-none lg:w-1/4 md:flex-none md:w-1/2 p-3">
		<a href="<?php echo esc_url(home_url('/')); ?>safety-in-engineering/electrical-safety" class="subsol-bloc">
            <div class="subsolution-links">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/electrical-safety-icon.svg" alt="">
                <div>
                    <p> Electrical Safety </p>
                    <p> Learn More </p>
                </div>
            </div>
        </a>
    </div>
    <div class="grow shrink basis-0 lg:flex-none lg:w-1/4 md:flex-none md:w-1/2 lg:ml-[16.6667%] p-3">
        <a href="<?php echo esc_url(home_url('/')); ?>fire-safety" class="subsol-bloc">
            <div class="subsolution-links">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/fire-safety-icon.svg" alt="">
                <div>
                    <p> Fire Safety </p>
                    <p> Learn More </p>
                </div>
            </div>
        </a>
    </div>
    <div class="grow shrink basis-0 lg:flex-none lg:w-1/4 md:flex-none md:w-1/2 p-3">
        <a href="<?php echo esc_url(home_url('/')); ?>construction-safety" class="subsol-bloc">
            <div class="subsolution-links">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/construction-safety-icon.svg" alt="">
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
    <div class="flex flex-wrap justify-evenly mt-6">
        <a href="https://ifwh.co.za" target="_blank"><img
                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/ifwh-logo.jpg"></a>
        <a href="https://group583.com/" target="_blank"><img
                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/group583-logo.jpg"></a>
        <a href="https://nca.go.ke/" target="_blank"><img
                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/nca-logo.jpg"></a>
        <a href="https://www.nita.go.ke/" target="_blank"><img
                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/nita-logo.png"></a>
    </div>
</div>

<?php get_footer(); ?>