<?php 

/* Template Name: Industrial Controls Electronics Page */

?>

<?php get_header(); ?>

<?php get_template_part('template-parts/header-meta'); ?>

<div class="solution-section">
    <div class="flex flex-wrap-reverse -mx-3 -mt-3 mb-3 last:-mb-3">
        <div class="grow shrink basis-0 lg:flex-none lg:w-1/2 max-md:flex-none max-md:w-full p-3">
            <?php the_content(); ?>
        </div>
        <div class="industrial-conrols-img grow shrink basis-0 lg:flex-none lg:w-1/2 p-3">
        </div>
    </div>
</div>


<div class="blue-bg solution-courses">
    <div></div>
    <?php 
        $args = array(
            'post_type' => 'controls-trainings',
        );
        $ct_query= new WP_Query($args); 
    ?>

    <div class="solution-courses-block blue-links">
        <h3>Training</h3>
        <p>We upskill, develop graduates, and equip trainers with industrial automation skills for effective curriculum
            integration and industry readiness.</p>
        <div class="md:flex flex-wrap mx-2 -mt-3 mb-3 last:-mb-3">
            <?php if ($ct_query->have_posts()) : ?>
            <?php while ($ct_query->have_posts()) : $ct_query->the_post(); ?>
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

<div class="support-center technical-center">
    <h3 class="mb-12">Industrial Technical Support Center</h3>
    <div class="md:flex flex-wrap -mx-3 -mt-3 mb-3 last:-mb-3">
        <div class="grow shrink basis-0 lg:flex-none lg:w-1/2 py-3 pr-12 pl-3">
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
        <div class="grow shrink basis-0 lg:flex-none lg:w-1/2 p-3">
        </div>
    </div>
</div>

<div class="services-offered">
<img class="triangle-vector" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/triangle-vector.svg">
    <h3> Services offered are:</h3>
    <div class="md:flex -mx-8 -mt-3 px-12 mb-3 last:-mb-3">
        <div class="grow shrink basis-0 lg:flex-none lg:w-5/12 px-8 py-3">
            <div class="equipment-repair">
                <h4> Repair of Industrial Equipment and Components </h4>
                <p> This involves diagnosis, troubleshooting and repair of industrial equipment and components faults
                </p>
                <ul>
                    <li>Electrical and electronics such as PLCs, VFDs, controllers, output cards, generator cards, power
                        supplies, servo drives and solenoid valves among other more</li>
                    <li>Pneumatic systems’ components such as valves, cylinders, compressors, dryers, pneumatic control
                        valves and actuators</li>
                    <li>Hydraulic systems’ components such as valves, cylinders, pumps, hydraulic motors, hose crimping
                        and fitting services</li>
                </ul>
            </div>
        </div>

        <div class="grow shrink basis-0 lg:flex-none lg:w-1/2 lg:ml-[8.3333%] px-8 py-3">
            <div class="design-automation">
                <h4> Design, installation and commissioning and maintenance of automation projects </h4>
                <p>These projects cut across all sectors and in all areas of automation (PLCs, hydraulics, Pneumatics,
                    SCADA, HVAC systems among others). The following are some of the projects will include:</p>
                <ul>
                    <li>Service contracts for planned maintenance of systems in companies</li>
                    <li>Installations of new systems in new and existing establishments</li>
                    <li>Systems upgrades </li>
                    <li>Compressed air installations</li>
                    <li>Instrumentation and calibration services</li>
                    <li>Circuit designs</li>
                    <li>SCADA/PLC Control Panels Renovation</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="support-center-services">
    <div class="flex flex-wrap-reverse -mx-3 -mt-3 mb-3 last:-mb-3">
        <div class="grow shrink basis-0 lg:flex-none lg:w-1/2 max-md:flex-none max-md:w-full p-3">
            <div class="installation-automation">
                <h4 class="pb-4">Design, installation and commissioning and maintenance of automation projects</h4>
                <ul>
                    <li>Electrical push buttons</li>
                    <li>Control switches</li>
                    <li>Limit switches</li>
                    <li>Proximity switches</li>
                    <li>Fuses</li>
                    <li>Transistors</li>
                    <li>Capacitors</li>
                    <li>Electric motors</li>
                    <li>Transformers</li>
                    <li>Diodes</li>
                    <li>PLCs</li>
                    <li>Electrical cables</li>
                    <li>Programming cables</li>
                    <li>Drives</li>
                    <li>Electric coils</li>
                    <li>Supply and delivery of hydraulic fluids to companies, related hydraulic transmission oils</li>
                </ul>
            </div>
        </div>
        <div class="machine-parts-img grow shrink basis-0 lg:flex-none lg:w-1/2 max-md:flex-none max-md:w-full p-3"></div>
    </div>

    <div class="md:flex flex-wrap -mx-3 my-12">
        <div class="pneumatic-kit-img grow shrink basis-0 lg:flex-none lg:w-1/2 p-3"></div>
        <div class="grow shrink basis-0 lg:flex-none lg:w-1/2 p-3">
            <div class="automation-projects">
                <h4 class="pb-4">Design, installation and commissioning and maintenance of automation projects</h4>
                <ul>
                    <li>Kits building for institutions of higher learning</li>
                    <li>Design and development of electronic laboratories in institutions</li>
                    <li>PLC Training Kit Modelled for Kitale National Piolytechnic</li>
            </ul>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>