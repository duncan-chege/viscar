<?php get_header(); ?>



<?php while(have_posts()){ the_post(); ?>



<div class='columns is-multiline single-block'>

    <div class='column is-9 pr-6'>

        <h2 class='has-text-centered font-weight-bold pb-3 single-title'><?php the_title(); ?></h2>

        <?php the_content(); ?>

    </div>

    <div class="column is-3 sidebar">
    <?php get_template_part('template-parts/course-sidebar'); ?>
    </div>

</div>

</div>



<?php } ?>



<?php wp_reset_postdata(); ?>



<?php get_footer(); ?>