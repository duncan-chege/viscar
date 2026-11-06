<?php 

/* Template Name:  Electrical Safety Page */

?>

<?php get_header(); ?>

<?php get_template_part('template-parts/header-meta'); ?>

<div class="subsolution-section">
    <div class="columns is-multiline">
        <div class="column is-6-desktop is-12-mobile">
            <?php the_content(); ?>
        </div>
        <div class="column is-6-desktop energy-safety-img">
        </div>
    </div>
</div>

<div class="blue-bg solution-courses">
    <div></div>
    <?php 
        $args = array(
            'post_type' => 'electrical-training',
        );
        $wp_query= new WP_Query($args); 
    ?>

    <div class="solution-courses-block blue-links">
        <h3>Our Training Programs</h3>
        <div class="columns is-multiline mx-2">
            <?php if ($wp_query->have_posts()) : ?>
            <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
            <div class="column is-6-desktop is-12-tablet my-2">
                <a href="<?php echo get_permalink(); ?>">
                    <div class="course-name is-flex">
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
    <div class="columns is-multiline is-flex is-flex-wrap-wrap-reverse">
        <div class='column is-5-desktop is-12-mobile'>
            <h4 class="mb-4"> Consultancy </h4>
            <ul>
                <li>Electrical Safety Inspection and Audit</li>
            </ul>

            <h4 class="mt-6 mb-4"> Supply of Electrical Safety Equipment </h4>
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

        <div class="column is-6-desktop is-12-mobile has-text-centered">
            <div class="img-block">
                <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/electrical-equipment.png">
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>