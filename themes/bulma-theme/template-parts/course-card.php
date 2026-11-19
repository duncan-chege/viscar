<div class="post-card course-card">
    <?php
    $course_alert = viscar_field('course_alert');

    if (!empty($course_alert)) {
        echo '<p class="course-alert">' . esc_html($course_alert) . '</p>';
    }
    ?>
    <a href="<?php the_permalink(); ?>">
        <div class="post-card-content">
            <div class="post-card-body">
                <h3><?php the_title(); ?></h3>
                <div class="course-dates">
                    <?php get_template_part('template-parts/course-dates'); ?>
                </div>
                <div class="upon-request">
                    <?php if (viscar_field('upon_request')) : ?>
                    <p>Upon request</p>
                    <?php endif; ?>
                </div>
                <p class="course-more-link"> Read More </p>
            </div>
        </div>
    </a>
</div>
