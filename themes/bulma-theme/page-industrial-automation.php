<?php 

/* Template Name: Industrial Automation Page */

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
        <div class="column is-6-desktop industrial-automation-img">
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
        <a href="<?php echo home_url(); ?>/industrial-controls-and-electronics" class="subsol-bloc">
            <div class="subsolution-links">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/industrial-controls-icon.svg" alt="">
                <div>
                    <p> Industrial Controls and Electronics </p>
                    <p> Learn More </p>
                </div>
            </div>
        </a>
    </div>
    <div class="column is-3-desktop is-6-tablet">
        <a href="<?php echo home_url(); ?>/fluid-power-systems" class="subsol-bloc">
            <div class="subsolution-links">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fluid-power-icon.svg" alt="">
                <div>
                    <p> Fluid Power Systems </p>
                    <p> Learn More </p>
                </div>
            </div>
        </a>
    </div>
</div>



</div>
</div>

<div class="partnerships">
    <h3 class="mb-6">Partnerships and Collaborations</h3>
    <div class="splide">
        <div class="splide__track" id="splide-track">
            <div class="splide__list">
                <div class="splide__slide">
                    <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/schneider-electric-logo.png">
                </div>
                <div class="splide__slide">
                    <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/festo-logo.png">
                </div>
                <div class="splide__slide">
                    <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/mitsubishi-logo.png">
                </div>
                <div class="splide__slide">
                    <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/allen-badley-logo.png">
                </div>
                <div class="splide__slide">
                    <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/abb-logo.png">
                </div>
                <div class="splide__slide">
                    <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/bosch-logo.png">
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        new Splide('.splide', {
            arrows: false,
            pagination: false,
            type: 'loop',
            drag: 'free',
            focus: 'center',
            perPage: 5,
            autoScroll: {
                speed: 0.5,
            },
        }).mount(window.splide.Extensions);
    });
</script>

<!-- <div class="blue-bg solution-courses">
    <div></div>
    <?php 
        $args = array(
            'post_type' => 'industrial-courses', 
        );
        $leap_query= new WP_Query($args); 
    ?>

    <div class="solution-courses-block blue-links">
        <h2>Our Training Programs</h2>
        <div class="training-courses">
            <?php if ($leap_query->have_posts()) : ?>
            <?php while ($leap_query->have_posts()) : $leap_query->the_post(); ?>
            <div>
                <a href="<?php echo get_permalink(); ?>">
                    <div class="course-name is-flex">
                        <i class="bi bi-caret-right-fill" style="padding-right: 0.5em; font-size: 1.2rem;"></i>
                        <h5><?php the_title(); ?></h5>
                    </div>
                </a>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else : ?>
            <h4 class="updating" style="color: #adcaff;"><?php _e( 'We are currently updating our courses' ); ?></h4>
            <div class="loader-line"></div>
            <?php endif; ?>
        </div>
    </div>
</div>

<div class="support-center">
    <h2>Industrial Technical Support Center</h2>
    <div class="columns is-multiline ml-6">
        <div class="column is-6 pr-6">
            <p>The Viscar Industrial Technical Support Centre seeks to support our clients in enhancing their
                equipment availability and reliability resulting in optimal performance and productivity of the plant.
                We know that as a manufacturer you cannot afford downtime caused by equipment failure, the loss of a
                single piece of equipment can halt production and lead to product loss, not to mention a loss of
                revenue.</p>
            <p>We deliver this through value-based equipment maintenance and repairs, plant upgrades through automation,
                new automation projects design, installations and commissioning, supply of equipment and machine parts
                and skills transfer.</p>
            <p>Our areas of expertise include:</p>
            <p>Broader systems like PLCs, SCADA, DCS, Drives, Hydraulic Pneumatics, HVAC and Industrial Mechatronics,
                Electrical and Electronics Controls</p>
        </div>
        <div class="column is-6">
        </div>
    </div>
</div>

<div class="services-offered">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1400 200">
        <path fill="#ffffff" fill-opacity="1" d="M0,96L720,160L1440,96L1440,0L720,0L0,0Z"></path>
    </svg>
    <h3> Services offered are:</h3>
    <div class="columns is-variable is-8 px-6">
        <div class="column is-5">
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

        <div class="column is-6 is-offset-1">
            <div class="design-automation">
                <h4> Design, installation and commissioning and maintenance of automation projects </h4>
                <p> This involves new projects, upgrades from manual to semi-automatic, semi-automatic to fully
                    automatic. These projects cut across all sectors and in all areas of automation (PLCs, hydraulics,
                    Pneumatics, SCADA, HVAC systems among others). The following are some of the projects will include:
                </p>
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

<div class="columns is-multiline">
    <div class="column is-6">
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
    <div class="column is-6 project-automation"></div>
</div>

<div class="columns is-multiline my-6">
    <div class="column is-6 automation-visual"></div>
    <div class="column is-6">
        <div class="automation-projects">
            <h4 class="pb-4">Design, installation and commissioning and maintenance of automation projects</h4>
            <ul>
                <li>Kits building for institutions of higher learning</li>
                <li>Design and development of electronic laboratories in institutions</li>
                <li>PLC Training Kit Modelled for Kitale National Piolytechnic</li>
        </div>
    </div>
</div>

<?php get_footer(); ?>