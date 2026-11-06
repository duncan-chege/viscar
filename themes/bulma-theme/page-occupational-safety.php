<?php 

/* Template Name: Occupational Safety Page */

?>

<?php get_header(); ?>

<?php get_template_part('template-parts/header-meta'); ?>

<div class="subsolution-section">
    <div class="columns is-multiline">
        <div class="column is-6-desktop is-12-mobile">
            <?php the_content(); ?>
        </div>
        <div class="column is-6-desktop occ-safety-img">
        </div>
    </div>
</div>

<div class="blue-bg solution-courses">
    <div></div>
    <?php 
        $args = array(
            'post_type' => 'occupational-courses',
        );
        $oc_query= new WP_Query($args); 
    ?>

    <div class="solution-courses-block blue-links">
        <h3>Our Training Programs</h3>
        <p>We offer Certification from the Institute for Work at Height in collaboration with Group 583 Consulting.
        </p>
        <div class="columns is-multiline mx-2">
            <?php if ($oc_query->have_posts()) : ?>
            <?php while ($oc_query->have_posts()) : $oc_query->the_post(); ?>
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

<div class="consultancy-supply">
    <div class="columns is-multiline">
        <div class="column is-5-desktop">
            <div class="consult">
                <h4 class="pb-4">Consultancy Solutions</h4>
                <ul>
                    <li>Occupational Safety and Health Audits</li>
                    <li>Technical Assistance on Health and Safety Framework</li>
                    <li>Safety Mapping, Auditing and Supervision of Contractors</li>
                    <li>Provision of Safety and Health Resources in Projects</li>
                    <li>ISO 45001:2018 Implementation</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>