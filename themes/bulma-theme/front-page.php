<?php
/* Template Name: Home Page */
get_header();
?>

<div class="front-page-hero">
    <section class="splide" aria-label="Hero section with splide" data-splide='{"type":"fade","interval":2000,"rewind":true,"autoplay":true,"drag":true,"speed":1000}'>
        <div class="splide__track">
            <ul class="splide__list">
                <?php 
                    $args = array(
                        'post_type' => 'events', 
                        'post_status' => 'publish',
                        'posts_per_page' => -1,
                        'order' => 'DESC',
                    );
                    $event_query= new WP_Query($args); 
                ?>

                <?php if ($event_query->have_posts()) : ?>
                <?php while ($event_query->have_posts()) : $event_query->the_post(); ?>
                <li class="splide__slide md:flex -mx-3 -mt-3 mb-3 last:-mb-3">
                    <div class="center-hero-text grow shrink basis-0 lg:flex-none lg:w-1/2 max-md:flex-none max-md:w-full">
                        <h1><?php the_title(); ?></h1>
                        <h5> <?php echo wp_trim_words(get_the_excerpt(), 30, '...');  ?> </h5>
                        <a href="<?php the_permalink(); ?>"> View Event </a>
                    </div>
                    <div class="event-col-box grow shrink basis-0 lg:flex-none lg:w-1/2 max-md:flex-none max-md:w-full max-md:hidden p-0">
                        <div class="outer-image">
                            <?php if (has_post_thumbnail()) {
                            the_post_thumbnail();
                        } else { ?>
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/blog-placeholder.jpg" alt="">
                            <?php } ?>
                        </div>
                        <div class="inner-image">
                            <?php if (has_post_thumbnail()) {
                            the_post_thumbnail();
                        } else { ?>
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/blog-placeholder.jpg" alt="">
                            <?php } ?>
                        </div>
                    </div>
                </li>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>

                <li class="splide__slide md:flex -mx-3 -mt-3 mb-3 last:-mb-3">
                    <div class="center-hero-text grow shrink basis-0 lg:flex-none lg:w-1/2 max-md:flex-none max-md:w-full">
                        <h1> Discover our top engineering and IT courses.</h1>
                        <a href="<?php echo esc_url(home_url('/')); ?>courses"> View Courses </a>
                    </div>
                    <div class="grow shrink basis-0 lg:flex-none lg:w-1/2 max-md:flex-none max-md:w-full max-md:hidden p-0">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/people-studying.png"
                            alt="">
                    </div>
                </li>

                <li class="splide__slide md:flex -mx-3 -mt-3 mb-3 last:-mb-3">
                    <div class="center-hero-text grow shrink basis-0 lg:flex-none lg:w-1/2 max-md:flex-none max-md:w-full">
                        <h1> Viscar Industrial Capacity Ltd</h1>
                        <h5> We deliver our services through training, consulting, resourcing and managed services in
                            engineering technology </h5>
                        <a href="<?php echo esc_url(home_url('/')); ?>about-us"> About Us </a>
                    </div>
                    <div class="grow shrink basis-0 lg:flex-none lg:w-1/2 max-md:flex-none max-md:w-full max-md:hidden p-0">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/first-slide.png"
                            alt="">
                    </div>
                </li>

                <li class="splide__slide md:flex -mx-3 -mt-3 mb-3 last:-mb-3">
                    <div class="center-hero-text grow shrink basis-0 lg:flex-none lg:w-1/2 max-md:flex-none max-md:w-full">
                        <h1> Our Solutions </h1>
                        <h5> We solve issues affecting technology & engineering industries </h5>
                        <a href="#solutions"> View Solutions </a>
                    </div>
                    <div class="grow shrink basis-0 lg:flex-none lg:w-1/2 max-md:flex-none max-md:w-full max-md:hidden p-0">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/second-slide.png"
                            alt="">
                    </div>
                </li>
            </ul>
        </div>
    </section>
</div>

<div class="in-brief">
    <div class="brief-text">
        <h2> In Brief </h2>
        <div class="my-6"> <?php the_content(); ?> </div>
    </div>
    <div class="brief-img"></div>

    <div class="vector">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1" d="M0,224L720,256L1440,160L1440,320L720,320L0,320Z"></path>
        </svg>
    </div>
</div>


<div class="stats">
    <div class="md:flex text-center flex-wrap -mx-3 -mt-3 mb-3 last:-mb-3">
        <div class="grow shrink basis-0 lg:flex-none lg:w-1/4 md:flex-none md:w-1/2 max-md:flex-none max-md:w-full p-3">
            <h2> 20,000+</h2>
            <h4>Staff trained</h4>
        </div>
        <div class="grow shrink basis-0 lg:flex-none lg:w-1/4 md:flex-none md:w-1/2 max-md:flex-none max-md:w-full p-3">
            <h2> 40+ </h2>
            <h4>Consultancy assignments </h4>
        </div>
        <div class="grow shrink basis-0 lg:flex-none lg:w-1/4 md:flex-none md:w-1/2 max-md:flex-none max-md:w-full p-3">
            <h2> 700+ </h2>
            <h4>Outsourced Personnel </h4>
        </div>
        <div class="grow shrink basis-0 lg:flex-none lg:w-1/4 md:flex-none md:w-1/2 max-md:flex-none max-md:w-full p-3">
            <h2> 15+ </h2>
            <h4>Technical support<br>projects completed </h4>
        </div>
    </div>
</div>

<div class="solutions" id="solutions">
    <h2> Our Solutions </h2>
    <div class="md:flex flex-wrap -mx-3 -mt-3 mb-3 last:-mb-3">
        <div class="grow shrink basis-0 lg:flex-none lg:w-1/5 md:flex-none md:w-1/3 p-3">
            <a href="<?php echo esc_url(home_url('/')); ?>digital-transformation" class="sol-block">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/dig-transform-icon.svg"
                    alt="">
                <div>
                    <h5> Digital Transformation </h5>
                    <p>Learn More </p>
                </div>
            </a>
        </div>
        <div class="grow shrink basis-0 lg:flex-none lg:w-1/5 md:flex-none md:w-1/3 p-3">
            <a href="<?php echo esc_url(home_url('/')); ?>industrial-automation" class="sol-block">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/ind-automation-icon.svg"
                    alt="">
                <div>
                    <h5> Industrial Automation </h5>
                    <p>Learn More</p>
                </div>
            </a>
        </div>
        <div class="grow shrink basis-0 lg:flex-none lg:w-1/5 md:flex-none md:w-1/3 p-3">
            <a href="<?php echo esc_url(home_url('/')); ?>process-optimization" class="sol-block">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/pro-optimization-icon.svg"
                    alt="">
                <div>
                    <h5> Process Optimization </h5>
                    <p>Learn More </p>
                </div>
            </a>
        </div>
        <div class="grow shrink basis-0 lg:flex-none lg:w-1/5 md:flex-none md:w-1/3 p-3">
            <a href="<?php echo esc_url(home_url('/')); ?>safety-in-engineering" class="sol-block">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/safe-engineering-icon.svg"
                    alt="">
                <div>
                    <h5> Safety in Engineering </h5>
                    <p>Learn More </p>
                </div>
            </a>
        </div>
        <div class="grow shrink basis-0 lg:flex-none lg:w-1/5 md:flex-none md:w-1/3 p-3">
            <a href="<?php echo esc_url(home_url('/')); ?>leadership-in-engineering" class="sol-block">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/lead-engineering-icon.svg"
                    alt="">
                <div>
                    <h5> Leadership in Engineering </h5>
                    <p>Learn More </p>
                </div>
            </a>
        </div>
    </div>
</div>

<div class="wires">
</div>

<?php 
    $args = array(
        'post_type' => 'upcoming-trainings',
        'posts_per_page' => 4,
    );
    $up_trainings = new WP_Query($args);
?>

<div class="trainings">
    <div></div>
    <div class="trainings-section">
        <h2>Our Upcoming Trainings</h2>
        <div class="md:flex flex-wrap mx-4 -mt-3 mb-3 last:-mb-3">
            <?php if ($up_trainings->have_posts()) : ?>
            <?php while ($up_trainings->have_posts()) : $up_trainings->the_post(); ?>
            <div class="grow shrink basis-0 md:flex-none md:w-1/2 flex p-3">
                <i class="bi bi-arrow-up-right-circle-fill"
                    style="padding-top: 0.3em; padding-right: 0.5em; color: #7291e6; font-size: 1.3em;"></i>
                <a href="<?php the_permalink(); ?>" class="training-link">
                    <div>
                        <h5><?php the_title(); ?></h5>
                        <?php
                            $start_date = viscar_format_date(viscar_field('start_date'));
                            $end_date = viscar_format_date(viscar_field('end_date'));
                        ?>

                        <p class="my-2">
                            <?php echo esc_html($start_date); ?>
                            <?php if ($end_date) { echo '- ' . esc_html($end_date); } ?>
                        </p>
                    </div>
                </a>
            </div>
            <?php endwhile; ?>

            <?php else : ?>
            <h4 class="soon-trainings"><?php _e('New trainings are coming soon'); ?></h4>
            <div class="loader-line trainings"></div>
            <?php endif; ?>

            <?php $no_trainings = (int) wp_count_posts('upcoming-trainings')->publish;
                if ($no_trainings > 4) { ?>
            <a href='<?php echo esc_url(home_url('/')); ?>upcoming-trainings' class='more-trainings'> More Trainings </a>
            <?php } ?>

        </div>

        <?php wp_reset_postdata(); ?>
    </div>
</div>

<?php 
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 4,
    );
    
    $article_args = new WP_Query($args);
?>

<div class="articles">
    <h2> Latest Viscar Articles </h2>

    <div class="md:flex flex-wrap -mx-3 -mt-3 mb-3 last:-mb-3">
        <?php if ($article_args->have_posts()) : ?>
        <?php while ($article_args->have_posts()): $article_args->the_post(); ?>
        <div class="grow shrink basis-0 lg:flex-none lg:w-1/4 md:flex-none md:w-1/3 max-md:flex-none max-md:w-full p-3">
            <?php get_template_part('template-parts/blog-card'); ?>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>
    <a href="<?php echo esc_url(home_url('/')); ?>articles" class="more-articles"> All Articles </a>
</div>

<div class="partners-section">
    <h2> Our Partners & Clients </h2>
    <?php
if (have_posts()) :
    while (have_posts()) : the_post();
        $images = viscar_field('images');
        if (!empty($images) && is_array($images)):
?>
    <div class="grid-container">
        <div class="grid-wrapper">
            <div class="grid-row" id="first-row">
                <?php
                $totalImages = count($images);
                $maxIndex = ($totalImages * 2) - 1;
                for ($i = 0; $i < $maxIndex; $i++):
                    $imageIndex = $i % $totalImages;
                    if ($i % 2 === 0):
            ?>
                <div class="grid-column">
                    <div class="image-container">
                        <img src="<?php echo esc_url($images[$imageIndex]['logo_image']); ?>" alt="">
                    </div>
                </div>
                <?php endif; endfor; ?>
            </div>
            <div class="grid-row" id="second-row">
                <?php
                for ($i = 0; $i < $maxIndex; $i++):
                    $imageIndex = $i % $totalImages;
                    if ($i % 2 !== 0):
            ?>
                <div class="grid-column">
                    <div class="image-container">
                        <img src="<?php echo esc_url($images[$imageIndex]['logo_image']); ?>" alt="">
                    </div>
                </div>
                <?php endif; endfor; ?>
            </div>
        </div>
    </div>

    <?php
        endif;
    endwhile;
endif;
?>
</div>


<div class="subscribe-section">
    <?php get_template_part('template-parts/subscription-section'); ?>
</div>

<?php
    get_footer();
?>