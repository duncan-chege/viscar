<?php 

/* Template Name: Construction Safety Page */

?>

<?php get_header(); ?>

<?php get_template_part('template-parts/header-meta'); ?>

<div class="solution-section">
    <div class="columns is-multiline is-flex is-flex-wrap-wrap-reverse">
        <div class="column is-6-desktop is-12-mobile">
            <?php the_content(); ?>
        </div>
        <div class="column is-6-desktop construction-img">
        </div>
    </div>
</div>

<div class="blue-bg solution-courses">
    <div></div>
    <?php 
        $args = array(
            'post_type' => 'construct-trainings',
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

<div class="consultancy-supply">
    <div class="columns is-multiline">
        <div class="column is-5-desktop">
            <div class="consult">
                <h4 class="pb-4"> Construction Safety Consultancy Services </h4>
                <ul>
                    <li>Construction Safety Audit</li>
                    <li>Construction Sites and Projects Risks Assessments</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>