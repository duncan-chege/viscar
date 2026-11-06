<?php get_header(); ?>

<?php while(have_posts()){ the_post(); ?>


<div class='columns single-block'>

    <div class='column is-three-quarters-desktop'>

        <h2 class='has-text-centered font-weight-bold my-5 pb-3 single-title'><?php the_title(); ?></h2>

        <div class="my-5"><?php the_post_thumbnail(); ?></div>

        <?php the_content(); ?>

        <a href="<?php echo home_url(); ?>/projects" class="previous-page"> Back to Projects </a>

    </div>

    <div class="column is-one-quarter-desktop is-hidden-touch">
        <div class="vertical-subscribe">
            <h3 class="mb-1">Join Our Newsletter </h3>
            <p>Stay ahead of the curve with our engineering and tech news delivered straight to your inbox</p>
            <?php echo do_shortcode('[mc4wp_form id=257]'); ?>
        </div>
    </div>
</div>

<div class="subscribe-section is-hidden-desktop">
    <?php get_template_part('template-parts/subscription-section'); ?>
</div>
<?php } ?>

<?php wp_reset_postdata(); ?>

<?php get_footer(); ?>