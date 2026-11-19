<?php get_header(); ?>

<?php while(have_posts()){ the_post(); ?>


<div class='single-block md:flex mb-3 last:-mb-3'>

    <div class='grow shrink basis-0 lg:flex-none lg:w-3/4 p-3'>

        <h2 class='single-title text-center my-6 pb-3'><?php the_title(); ?></h2>

        <div class="my-6"><?php the_post_thumbnail(); ?></div>

        <?php the_content(); ?>

        <a href="<?php echo esc_url(home_url('/')); ?>projects" class="previous-page"> Back to Projects </a>

    </div>

    <div class="grow shrink basis-0 lg:flex-none lg:w-1/4 max-lg:hidden p-3">
        <div class="vertical-subscribe">
            <h3 class="mb-1">Join Our Newsletter </h3>
            <p>Stay ahead of the curve with our engineering and tech news delivered straight to your inbox</p>
            <?php echo do_shortcode('[mc4wp_form id=257]'); ?>
        </div>
    </div>
</div>

<div class="subscribe-section lg:hidden">
    <?php get_template_part('template-parts/subscription-section'); ?>
</div>
<?php } ?>

<?php wp_reset_postdata(); ?>

<?php get_footer(); ?>