<?php 

/* Template Name: Work At Height Page */

?>

<?php get_header(); ?>

<?php get_template_part('template-parts/header-meta'); ?>

<div class="solution-section">
    <div class="columns is-multiline is-flex is-flex-wrap-wrap-reverse">
        <div class="column is-6-desktop is-12-mobile">
            <?php the_content(); ?>
        </div>
        <div class="column is-6-desktop wah-img">
        </div>
    </div>
</div>

<div class="blue-bg solution-courses">
    <div></div>
    <?php 
        $args = array(
            'post_type' => 'wah-trainings',
        );
        $wp_query= new WP_Query($args); 
    ?>

    <div class="solution-courses-block blue-links">
        <h3>Our Training Programs</h3>
        <p>We offer Certification from the Institute for Work at Height in collaboration with Group 583 Consulting.
        </p>
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
    <div class="columns is-multiline">
        <div class='column is-5-desktop'>
            <h4 class="mb-4"> Equipment Supply and Installation </h4>
            <ul>
                <li>Complete Fall Arrest Kit – Full Body Harness (Safety Helmet, Body Harness PLUS Padding c/w
                    Trauma Step, Double Adjustable Shock Absorbing Lanyard, Work Positioning Belt, Soft and Round
                    Slings, Gloves, Industrial Safety Bag)</li>
                <li>Rescue Kits (Rope 100M/50M, Lory, Tape Ladder, Padded Sling, Carabiners, Industrial Safety Bag)
                </li>
                <li>Lifelines</li>
                <li>Rigging Ropes and Pulleys</li>
                <li>Box Spanner Kit (Stainless Steel)</li>
                <li>Toolbox complete set (Telecommunications Maintenance Tool Kit /Repair Toolbox)</li>
                <li>Ladders</li>
                <li>Scaffolding Equipment</li>
            </ul>

            <h4 class="mt-6 mb-4"> Consultancy Services </h4>
            <ul>
                <li>Development of Fall Protection Plan</li>
                <li>Height Safety Risk Assessments and Audits</li>
            </ul>

        </div>

        <div class="column is-6-desktop has-text-centered">
            <div class="img-block">
                <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/wah-items.png">
            </div>
        </div>
    </div>
</div>

<div class="partnerships">
    <h3 class="pb-4">Partnerships and Collaborations</h3>
    <div class="is-flex is-flex-wrap-wrap is-justify-content-space-evenly mt-5">
        <a href="https://ifwh.co.za" target="_blank"><img class=""
                src="<?php echo get_template_directory_uri(); ?>/assets/img/ifwh-logo.jpg"></a>
        <a href="https://group583.com/" target="_blank"><img class=""
                src="<?php echo get_template_directory_uri(); ?>/assets/img/group583-logo.jpg"></a>
        <a href="https://evolutionsafety.co.za/" target="_blank"><img class=""
                src="<?php echo get_template_directory_uri(); ?>/assets/img/ehs-logo.png"></a>
    </div>
</div>

<?php get_footer(); ?>