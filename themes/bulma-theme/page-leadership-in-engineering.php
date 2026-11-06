<?php 

/* Template Name: Leadership in Engineering Page */

?>

<?php get_header(); ?>

<div class="page-hero-section">
    <h1> <?php echo get_the_title(); ?> </h1>
    <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/header-vector.svg">
</div>

<a href="<?php echo home_url(); ?>/product-enquiry" class="floating-contact">
    <div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/floating-icon.svg">
        <p class="m-0"> PRODUCT <br> ENQUIRY </p>
    </div>
</a>

<div class="solution-section">

    <div class="columns is-multiline is-flex is-flex-wrap-wrap-reverse">

        <div class="column is-6-desktop is-12-mobile">

            <?php the_content(); ?>

        </div>

        <div class="column is-6-desktop leadership-img">

        </div>

    </div>

</div>


<div class="blue-bg solution-courses">
    <div></div>
    <?php 
        $args = array(
            'post_type' => 'leap-courses',
            'category__not_in' => 3, 
        );
        $leap_query= new WP_Query($args); 
    ?>

    <div class="solution-courses-block blue-links">
        <h2>Courses Under This Program</h2>
        <p>Each supplemented with mentorship</p>

        <div class="columns is-multiline mx-2">
            <?php if ($leap_query->have_posts()) : ?>
            <?php while ($leap_query->have_posts()) : $leap_query->the_post(); ?>
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

<?php 
    $args = array(
        'post_type' => 'leap-courses', 
        'category_name' => 'related-courses' 
    );
    $related_courses= new WP_Query($args); 
?>

<div class="extra-courses">
    <div class="columns is-multiline">
        <div class="column is-6-desktop is-6-tablet">
            <h4>Other courses incorporated in the LEAP that are related to engineering are: </h4>
        </div>
        <?php if ($related_courses->have_posts()) : ?>
        <div class="column is-4-desktop is-6-tablet">
            <?php while ($related_courses->have_posts()) : $related_courses->the_post(); ?>
            <a href="<?php echo get_permalink(); ?>">
                <div class="course-name"><i class="bi bi-caret-right-fill"></i> <?php the_title(); ?>
                </div>
            </a>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>