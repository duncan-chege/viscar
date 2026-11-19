<?php 

/* Template Name:  Electrical Safety Page */

?>

<?php get_header(); ?>

<?php get_template_part('template-parts/header-meta'); ?>

<div class="subsolution-section">
    <div class="md:flex flex-wrap -mx-3 -mt-3 mb-3 last:-mb-3">
        <div class="grow shrink basis-0 lg:flex-none lg:w-1/2 max-md:flex-none max-md:w-full p-3">
            <?php the_content(); ?>
        </div>
        <div class="energy-safety-img grow shrink basis-0 lg:flex-none lg:w-1/2 p-3">
        </div>
    </div>
</div>

<div class="blue-bg solution-courses">
    <div></div>
    <?php 
        $args = array(
            'post_type' => 'electrical-training',
        );
        $courses_query = new WP_Query($args); 
    ?>

    <div class="solution-courses-block blue-links">
        <h3>Our Training Programs</h3>
        <div class="md:flex flex-wrap mx-2 -mt-3 mb-3 last:-mb-3">
            <?php if ($courses_query->have_posts()) : ?>
            <?php while ($courses_query->have_posts()) : $courses_query->the_post(); ?>
            <div class="grow shrink basis-0 lg:flex-none lg:w-1/2 md:flex-none md:w-full my-2 p-3">
                <a href="<?php the_permalink(); ?>">
                    <div class="course-name flex">
                        <i class="bi bi-caret-right-fill"></i>
                        <h5><?php the_title(); ?></h5>
                    </div>
                </a>
            </div>

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else : ?>
            <h4 class="updating" style="color: #ADCAFF;"><?php _e( 'We are currently updating our courses' ); ?></h4>
            <div class="loader-line"></div>
            <?php endif; ?>
        </div>
    </div>
</div>

<div class="wah-equipment">
    <div class="flex flex-wrap-reverse -mx-3 -mt-3 mb-3 last:-mb-3">
        <div class='grow shrink basis-0 lg:flex-none lg:w-5/12 max-md:flex-none max-md:w-full p-3'>
            <h4 class="mb-4"> Consultancy </h4>
            <ul>
                <li>Electrical Safety Inspection and Audit</li>
            </ul>

            <h4 class="mt-12 mb-4"> Supply of Electrical Safety Equipment </h4>
            <ul>
                <li>Insulated Gloves and Shoes</li>
                <li>Insulated Mats and Platforms</li>
                <li>Rescue Rods</li>
                <li>Life Saving Kits</li>
                <li>Earthing and Short Circuit Kits</li>
                <li>Earthing Clamps and Fittings</li>
                <li>Insulated Ladders</li>
                <li>Voltage Detectors</li>
                <li>Operating Roads</li>
                <li>Pneumatic tester for insulating gloves</li>
                <li>Mechanical Composite Insulating Rubber Gloves</li>
            </ul>
        </div>

        <div class="grow shrink basis-0 lg:flex-none lg:w-1/2 max-md:flex-none max-md:w-full text-center p-3">
            <div class="img-block">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/electrical-equipment.png">
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>