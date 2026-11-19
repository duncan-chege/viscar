<?php
/**
 * Shared layout for the single templates of the training / course post types
 * (single-iot-courses.php, single-fire-trainings.php, ...).
 *
 * $args:
 *   'block'  — wrapper class: 'single-course-block' (default) or 'single-block'.
 *   'layout' — 'offset': content 8/12 offset by 1/12 with a 3/12 sidebar (default),
 *              'split':  content 9/12 next to a 3/12 sidebar from tablet width up.
 */
$block = (isset($args['block']) && $args['block'] === 'single-block') ? 'single-block' : 'single-course-block';
$layout = (isset($args['layout']) && $args['layout'] === 'split') ? 'split' : 'offset';

if ($layout === 'split') {
    $row_class = 'md:flex flex-wrap mb-3 last:-mb-3';
    $content_class = 'grow shrink basis-0 md:flex-none md:w-3/4 py-3 pr-12 pl-3';
    $sidebar_class = 'sidebar grow shrink basis-0 md:flex-none md:w-1/4 p-3';
} else {
    $row_class = 'md:flex mb-3 last:-mb-3';
    $content_class = 'grow shrink basis-0 lg:flex-none lg:w-2/3 md:flex-none md:w-7/12 lg:ml-[8.3333%] py-3 pr-12 pl-3';
    $sidebar_class = 'sidebar grow shrink basis-0 lg:flex-none lg:w-1/4 md:flex-none md:w-5/12 p-3';
}

while (have_posts()) : the_post(); ?>

<div class="<?php echo esc_attr($block . ' ' . $row_class); ?>">
    <div class="<?php echo esc_attr($content_class); ?>">
        <h2 class="single-title text-center pb-3"><?php the_title(); ?></h2>
        <?php the_content(); ?>
    </div>

    <div class="<?php echo esc_attr($sidebar_class); ?>">
        <?php get_template_part('template-parts/course-sidebar'); ?>
    </div>
</div>

<?php endwhile;
