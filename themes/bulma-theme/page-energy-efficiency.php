<?php 

/* Template Name: Energy Efficiency Page */

?>

<?php get_header(); ?>

<?php get_template_part('template-parts/header-meta'); ?>

<div class="subsolution-section">
    <div class="md:flex flex-wrap -mx-3 -mt-3 mb-3 last:-mb-3">
        <div class="grow shrink basis-0 lg:flex-none lg:w-1/2 max-md:flex-none max-md:w-full p-3">
            <?php the_content(); ?>
        </div>
        <div class="energy-opp-img grow shrink basis-0 lg:flex-none lg:w-1/2 p-3">
        </div>
    </div>
</div>

<div class="process-overview">
    <div class="flex flex-wrap-reverse -mx-3 -mt-3 mb-3 last:-mb-3">
        <div class="energy-savings-img grow shrink basis-0 lg:flex-none lg:w-1/2 max-md:flex-none max-md:w-full max-md:hidden p-3">
        </div>

        <div class="overview-details grow shrink basis-0 lg:flex-none lg:w-1/2 max-md:flex-none max-md:w-full py-3 pr-3">
            <p>Constantly seeking opportunities for energy savings is essential for industries to sustainably reduce
                their energy costs and improve their overall operations</p>
            <p>We partner with industry to offering the below  solutions</p>
            <ul>
                <li>Training</li>
                <li>Energy Auditing</li>
                <li>Implementation of Energy Efficiency Solutions</li>
                <li>Supply of Energy Efficiency Equipment and Supply of Measurement Tools</li>
            </ul>
        </div>
    </div>
</div>

<div class="red-bg solution-courses">
    <div></div>
    <?php 
        $args = array(
            'post_type' => 'energy-trainings',
        );
        $en_query= new WP_Query($args); 
    ?>

    <div class="solution-courses-block red-links">
        <h3>Training</h3>
        <p>Our training programs support industry to develop skills required to ensure adoption of energy efficiency
            solutions that actually translate to energy savings</p>
        <div class="md:flex flex-wrap mx-2 -mt-3 mb-3 last:-mb-3">
            <?php if ($en_query->have_posts()) : ?>
            <?php while ($en_query->have_posts()) : $en_query->the_post(); ?>
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

<div class="energy-efficiency">
    <div class="md:flex flex-wrap -mx-3 -mt-3 mb-3 last:-mb-3">
        <div class="grow shrink basis-0 lg:flex-none lg:w-7/12 lg:ml-[25%] text-center p-3">
            <h3 class="mb-4">Energy Efficiency Performance Measurement And Verification Certification Programs</h3>
        </div>
    </div>

    <div class="md:flex flex-wrap -mx-3 -mt-3 mb-3 last:-mb-3">
        <div class="grow shrink basis-0 lg:flex-none lg:w-1/2 p-3">
            <p>Viscar has partnered with the Efficiency Valuation Organization(EVO) to offer Energy Efficiency
                Measurement
                and Verification (M&V) Training and Professional.</p>
            <p>EVO is an international NGO that owns the globally recognized International Performance Measurement and
                Verification Protocol (IPMVP®) whose products and services help people engineer and invest in energy
                efficiency projects.</p>
        </div>
        <div class="grow shrink basis-0 lg:flex-none lg:w-1/2 p-3">
            <div class="flex flex-wrap justify-around">
                <img class="mb-4" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/pmva-logo.png">
                <img class="mb-4" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/pmve-logo.png">
                <img class="mb-4" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/evo.png">
            </div>
        </div>
    </div>
</div>

<div class="blue-bg">
    <div class="performance-evaluations">
        <div class="md:flex flex-wrap -mx-3 -mt-3 mb-3 last:-mb-3">
            <div class="grow shrink basis-0 lg:flex-none lg:w-1/2 p-3">
                <h4>1. Performance Measurement and Verification Analyst (PMVA)</h4>
                <p>This program is based on all the material described above. A new certification exam was developed to
                    align fully with the content of the training material and the IPMVP protocol. </p>

                <p><b>Performance Measurement and Verification Analyst Training (PMVA)</b> professional certification
                    establishes
                    the primary standard for individuals applying performance, measurement, and verification concepts to
                    energy efficiency projects. PMVAs could be building technologists, HVAC specialists, engineers,
                    architects, economists, financial analysts, etc.</p>

                <h4 class="my-6">Professional Evaluation and Certification Board (PECB) Certification Training</h4>
                <ul>
                    <li>ISO 50001: Requirements, Implementer and Lead Auditor</li>
                    <li>ISO 50006 Training</li>
                </ul>
            </div>
            <div class="grow shrink basis-0 lg:flex-none lg:w-5/12 lg:ml-[8.3333%] p-3">
                <h4>2. Performance Measurement and Verification Expert (PMVE)</h4>
                <p>This is an advanced certification building on the PMVA, based on the resources mentioned above, with
                    training delivered by <b>EVO</b> accredited instructors.</p>
                <p><b>Performance Measurement and Verification Experts (PMVE)</b> courses will enable organizations and
                    individuals to: Increase energy savings, document financial transactions and improve facility i.
                    Energy Efficiency Performance Measurement and Verification Analyst (PMVA)</p>
            </div>
        </div>
    </div>
</div>

<div class="energy-audits">
    <div class="md:flex flex-wrap -mx-3 -mt-3 mb-3 last:-mb-3">
        <div class="grow shrink basis-0 lg:flex-none lg:w-2/3 lg:ml-[16.6667%] text-center p-3">
            <h3 class="mb-4">Energy Audits</h3>
            <p>We assess how a facility utilizes its different forms of energy and identifies areas of improvement. This
                encompasses investment grade and general energy audits that enable organizations to meet compliance
                requirements from regulators, but most importantly, identify opportunities for deploying optimal energy
                efficiency solutions.</p>
        </div>
    </div>

    <div class="md:flex flex-wrap -mx-3 -mt-3 mb-3 last:-mb-3">
        <div class="grow shrink basis-0 lg:flex-none lg:w-1/2 p-3">
            <h4 class="mb-3">Energy Audits Entail:</h4>
            <ul style="list-style:auto">
                <li>Measurements for power distribution system</li>
                <li>Measurements for power factor correction</li>
                <li>Identify the power consumption regime of  the entire facility and suggest optimal ways of
                    utilization.</li>
                <li>Measures to Identify voltage anomalies and harmonics distortion issues</li>
                <li>Identify areas where energy is wasted and recommend viable mechanisms/alternatives to save power
                </li>
                <li>Checking electrical connectivity and find out whether power demand and supply are optimal, any
                    electrical degradation for cables, outlets and power boards - this is to prevent electrical
                    incidences, power losses, fire incidences etc</li>
            </ul>
        </div>
        <div class="grow shrink basis-0 lg:flex-none lg:w-5/12 lg:ml-[8.3333%] p-3">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/energy-items.png">
        </div>
    </div>

    <div class="md:flex flex-wrap -mx-3 -mt-3 mb-3 last:-mb-3">
        <div class="grow shrink basis-0 lg:flex-none lg:w-1/2 p-3">
            <h4 class="mb-3">Objectives of Energy Audits</h4>
            <ul>
                <li>Study and measurements to identify gaps and energy saving opportunities, recommend energy efficiency
                    solutions</li>
                <li>Collect data to inform the design of energy efficiency solutions</li>
                <li>Quantify energy efficiency savings from the proposed solutions and payback period for the capital
                    investment on the energy efficiency solutions</li>
            </ul>
        </div>
        <div class="grow shrink basis-0 lg:flex-none lg:w-5/12 lg:ml-[8.3333%] p-3">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/light-bulb.png">
        </div>
    </div>
</div>

<?php get_footer(); ?>