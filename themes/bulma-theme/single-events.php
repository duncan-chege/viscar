<?php get_header(); ?>

<?php while(have_posts()){ the_post(); ?>

<div class='single-block md:flex mb-3 last:-mb-3'>

    <div class='grow shrink basis-0 lg:flex-none lg:w-3/5 lg:ml-[20%] p-3'>

        <h1 class='single-title text-center my-6 pb-3'><?php the_title(); ?></h1>

        <div class="my-6"><?php the_post_thumbnail(); ?></div>

        <?php $event_date = viscar_field('event_date'); ?>
        <?php if ($event_date) : ?>
        <h2 id="saa" data-event-date="<?php echo esc_attr($event_date); ?>"></h2>
        <?php endif; ?>

        <?php the_content(); ?>

        <a href="<?php echo esc_url(home_url('/')); ?>events" class="previous-page"> Back to Events </a>

    </div>
</div>

<?php } ?>

<?php wp_reset_postdata(); ?>

<?php get_footer(); ?>