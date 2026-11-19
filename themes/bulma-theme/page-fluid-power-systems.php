<?php 

/* Template Name: Fluid Power Page */

?>

<?php get_header(); ?>

<?php get_template_part('template-parts/header-meta'); ?>

<div class="solution-section">
    <div class="flex flex-wrap-reverse -mx-3 -mt-3 mb-3 last:-mb-3">
        <div class="grow shrink basis-0 lg:flex-none lg:w-1/2 max-md:flex-none max-md:w-full p-3">
            <?php the_content(); ?>
        </div>
        <div class="fluid-power-img grow shrink basis-0 lg:flex-none lg:w-1/2 p-3">
        </div>
    </div>
</div>

<div class="blue-bg solution-courses">
    <div></div>
    <?php 
        $args = array(
            'post_type' => 'fluid-trainings',
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

<div class="support-center">
    <h3 class="mb-12">Industrial Technical Support Center</h3>
    <div class="md:flex flex-wrap -mx-3 -mt-3 mb-3 last:-mb-3">
        <div class="grow shrink basis-0 md:flex-none md:w-1/2 py-3 pr-12 pl-3">
            <p>The Viscar Industrial Technical Support Centre seeks to support our clients in enhancing their
                equipment availability and reliability resulting in optimal performance and productivity of the plant.
                We know that as a manufacturer you cannot afford downtime caused by equipment failure, the loss of a
                single piece of equipment can halt production and lead to product loss, not to mention a loss of
                revenue.</p>
            <p>We deliver this through value-based equipment maintenance and repairs, plant upgrades through automation,
                new automation projects design, installations and commissioning, supply of equipment and machine parts
                and skills transfer.</p>
            <p>The services we offer are:</p>
        </div>
        <div class="grow shrink basis-0 md:flex-none md:w-1/2 p-3">
        </div>
    </div>
</div>

<div class="support-center-services">
    <div class="md:flex flex-wrap -mx-3 -mt-3 mb-3 last:-mb-3">
        <div class="grow shrink basis-0 md:flex-none md:w-1/2 px-0 py-3">
            <div class="installation-automation">
                <h4>Repair of Hydraulic and Pneumatic Equipment and Components</h4>
                <p>Diagnosis, troubleshooting and repair of industrial equipment and components faults i.e Hydraulic
                    pumps,
                    valves, motors. Pneumatic valves, compressor</p>
                <h4 class="pt-6">Design, installation and commissioning and maintenance of automation projects</h4>
                <p>New projects, upgrades from manual to semi-automatic systems</p>
            </div>
        </div>
        <div class="project-automation grow shrink basis-0 md:flex-none md:w-1/2 p-3"></div>
    </div>

    <div class="md:flex flex-wrap -mx-3 my-12">
        <div class="automation-visual grow shrink basis-0 md:flex-none md:w-1/2 p-3"></div>
        <div class="grow shrink basis-0 md:flex-none md:w-1/2 p-3">
            <div class="automation-projects">
                <h4>Supply of equipment, machine parts and industrial components</h4>
                <p>This will involve provision of parts for replacement in faulty equipment, sale of consumables and
                    supply
                    of parts for ongoing projects.</p>
                <h4 class="pt-6">Supply of Didactic Equipment for TVETS and Industrial Training</h4>
                <ul class="mt-4">
                    <li>Hydraulic and Electro-hydraulic Training Kits</li>
                    <li>Pneumatic and Pneumatic-hydraulic Training Kits</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>