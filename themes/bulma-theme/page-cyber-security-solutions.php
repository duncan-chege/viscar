<?php
/* Template Name: Cyber Security Solutions */

?>

<?php get_header();?>

<?php get_template_part('template-parts/header-meta'); ?>

<div class="subsolution-section">
    <div class="columns is-multiline">
        <div class="column is-6-desktop is-12-mobile">
            <?php the_content(); ?>
        </div>
        <div class="column is-6-desktop cyber-security-img">
        </div>
    </div>
</div>

<div class="cyber-services">
    <div class="columns">
        <div class="column is-8-desktop is-offset-2-desktop">
            <h3>We offer a range of services to help you secure your data and systems from cyber attacks, such as:</h3>
        </div>
    </div>

    <div class="columns is-multiline">
        <div class="column is-4-desktop is-6-tablet">
            <h4> Data Protection & Privacy </h4>
            <p>We help you comply with data protection laws and regulations, and ensure that your data is handled
                with respect and care.</p>
        </div>
        <div class="column is-4-desktop is-6-tablet">
            <h4> Information Security Management </h4>
            <p>We help you establish and maintain a robust information security framework, and provide ongoing
                support and guidance to manage your security risks.</p>
        </div>
        <div class="column is-4-desktop is-6-tablet">
            <h4> IT System Audit and Assessments </h4>
            <p>We help you evaluate your IT systems and processes, and identify any vulnerabilities or gaps that
                could compromise your security.</p>
        </div>
    </div>
</div>

<?php 
    $args = array(
        'post_type' => 'cyber-sec-courses',
    );
    $cyber_query= new WP_Query($args); 
?>

<div class="red-bg solution-courses my-0">
    <div></div>

    <div class="solution-courses-block red-links">
        <h2>Courses Under This Solution</h2>
        <div class="consultancy-bloc">
            <?php if ($cyber_query->have_posts()) : ?>
            <?php while ($cyber_query->have_posts()) : $cyber_query->the_post(); ?>
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
            <h4 class="updating" style="color: #FDF4D9;"><?php _e( 'We are currently updating our courses' ); ?></h4>
            <div class="loader-line"></div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer();?>