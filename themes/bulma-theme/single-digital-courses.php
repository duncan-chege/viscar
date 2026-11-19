<?php
/* Single template for the "digital-courses" post type — see template-parts/single-course-layout.php. */
get_header();
get_template_part('template-parts/single-course-layout', null, array('block' => 'single-block', 'layout' => 'offset'));
get_footer();
