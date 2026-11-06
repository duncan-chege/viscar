<?php 

/* Template Name: Home Page */

    get_header();
?>

<div class="front-page-hero">
    <section class="splide" aria-label="Hero section with splide">
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
                <li class="splide__slide columns">
                    <div class="column is-half-desktop is-12-mobile center-hero-text">
                        <h1><?php the_title(); ?></h1>
                        <h5> <?php echo wp_trim_words(get_the_excerpt(), 30, '...');  ?> </h5>
                        <a href="<?php echo get_permalink(); ?>"> View Event </a>
                    </div>
                    <div class="column is-half-desktop is-12-mobile p-0 event-col-box is-hidden-mobile">
                        <div class="outer-image">
                            <?php if (has_post_thumbnail()) {
                            the_post_thumbnail();
                        } else { ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog-placeholder.jpg">
                            <?php } ?>
                        </div>
                        <div class="inner-image">
                            <?php if (has_post_thumbnail()) {
                            the_post_thumbnail();
                        } else { ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog-placeholder.jpg">
                            <?php } ?>
                        </div>
                    </div>
                </li>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>

                <li class="splide__slide columns">
                    <div class="column is-half-desktop is-12-mobile center-hero-text">
                        <h1> Discover our top engineering and IT courses.</h1>
                        <a href="<?php echo home_url(); ?>/courses"> View Courses </a>
                    </div>
                    <div class="column is-half-desktop is-12-mobile p-0 is-hidden-mobile">
                        <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/people-studying.png"
                            alt="">
                    </div>
                </li>

                <li class="splide__slide columns">
                    <div class="column is-half-desktop is-12-mobile center-hero-text">
                        <h1> Viscar Industrial Capacity Ltd</h1>
                        <h5> We deliver our services through training, consulting, resourcing and managed services in
                            engineering technology </h5>
                        <a href="<?php echo home_url(); ?>/about-us"> About Us </a>
                    </div>
                    <div class="column is-half-desktop is-12-mobile p-0 is-hidden-mobile">
                        <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/first-slide.png"
                            alt="">
                    </div>
                </li>

                <li class="splide__slide columns">
                    <div class="column is-half-desktop is-12-mobile center-hero-text">
                        <h1> Our Solutions </h1>
                        <h5> We solve issues affecting technology & engineering industries </h5>
                        <a href="#solutions"> View Solutions </a>
                    </div>
                    <div class="column is-half-desktop is-12-mobile p-0 is-hidden-mobile">
                        <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/second-slide.png"
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
        <div class="my-5"> <?php echo the_content(); ?> </div>
    </div>
    <div class="brief-img"></div>

    <div class="vector">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1" d="M0,224L720,256L1440,160L1440,320L720,320L0,320Z"></path>
        </svg>
    </div>
</div>


<div class="stats">
    <div class="columns has-text-centered is-multiline">
        <div class="column is-3-desktop is-6-tablet is-12-mobile">
            <h2> 20,000+</h2>
            <h4>Staff trained</h4>
        </div>
        <div class="column is-3-desktop is-6-tablet is-12-mobile">
            <h2> 40+ </h2>
            <h4>Consultancy assignments </h4>
        </div>
        <div class="column is-3-desktop is-6-tablet is-12-mobile">
            <h2> 700+ </h2>
            <h4>Outsourced Personnel </h4>
        </div>
        <div class="column is-3-desktop is-6-tablet is-12-mobile">
            <h2> 15+ </h2>
            <h4>Technical support<br>projects completed </h4>
        </div>
    </div>
</div>

<div class="solutions" id="solutions">
    <h2> Our Solutions </h2>
    <div class="columns is-multiline">
        <div class="column is-one-fifth-desktop is-4-tablet">
            <a href="<?php echo home_url(); ?>/digital-transformation" class="sol-block">
                <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/dig-transform-icon.svg"
                    alt="">
                <div>
                    <h5> Digital Transformation </h5>
                    <p>Learn More </p>
                </div>
            </a>
        </div>
        <div class="column is-one-fifth-desktop is-4-tablet">
            <a href="<?php echo home_url(); ?>/industrial-automation" class="sol-block">
                <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/ind-automation-icon.svg"
                    alt="">
                <div>
                    <h5> Industrial Automation </h5>
                    <p>Learn More</p>
                </div>
            </a>
        </div>
        <div class="column is-one-fifth-desktop is-4-tablet">
            <a href="<?php echo home_url(); ?>/process-optimization" class="sol-block">
                <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/pro-optimization-icon.svg"
                    alt="">
                <div>
                    <h5> Process Optimization </h5>
                    <p>Learn More </p>
                </div>
            </a>
        </div>
        <div class="column is-one-fifth-desktop is-4-tablet">
            <a href="<?php echo home_url(); ?>/safety-in-engineering" class="sol-block">
                <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/safe-engineering-icon.svg"
                    alt="">
                <div>
                    <h5> Safety in Engineering </h5>
                    <p>Learn More </p>
                </div>
            </a>
        </div>
        <div class="column is-one-fifth-desktop is-4-tablet">
            <a href="<?php echo home_url(); ?>/leadership-in-engineering" class="sol-block">
                <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/lead-engineering-icon.svg"
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
        <div class="columns is-multiline mx-4">
            <?php if ($up_trainings->have_posts()) : ?>
            <?php while ($up_trainings->have_posts()) : $up_trainings->the_post(); ?>
            <div class="column is-half is-flex">
                <i class="bi bi-arrow-up-right-circle-fill"
                    style="padding-top: 0.3em; padding-right: 0.5em; color: #7291e6; font-size: 1.3em;"></i>
                <a href="<?php the_permalink(); ?>" class="training-link">
                    <div>
                        <h5><?php the_title(); ?></h5>
                        <?php
                            $start_date = CFS()->get('start_date');
                            $end_date = CFS()->get('end_date');
                        ?>

                        <p class="my-2">
                            <?php if ($start_date) {
                            $formatted_date = date('F j', strtotime($start_date));
                            echo esc_html($formatted_date); } ?>
                            <?php if ($end_date) {
                            $formatted_date = date('F j', strtotime($end_date));
                            echo '- ' . esc_html($formatted_date); } ?>
                        </p>
                    </div>
                </a>
            </div>
            <?php endwhile; ?>

            <?php else : ?>
            <h4 class="soon-trainings"><?php _e('New trainings are coming soon'); ?></h4>
            <div class="loader-line trainings"></div>
            <?php endif; ?>

            <?php $no_trainings = wp_count_posts("upcoming-trainings")->publish;
                if ($no_trainings>4){ ?>
            <a href='<?php echo home_url(); ?>/upcoming-trainings' class='more-trainings'> More Trainings </a>
            <?php } ?>

        </div>

        <?php wp_reset_postdata(); ?>
    </div>
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

    <div class="columns is-multiline">
        <?php if ($article_args->have_posts()) : ?>
        <?php while ($article_args->have_posts()): $article_args->the_post(); ?>
        <div class="column is-3-desktop is-4-tablet is-12-mobile">
            <?php get_template_part('template-parts/blog-card'); ?>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>
    <a href="<?php echo home_url(); ?>/articles" class="more-articles"> All Articles </a>
</div>

<div class="partners-section">
    <h2> Our Partners & Clients </h2>
    <?php
if (have_posts()) :
    while (have_posts()) : the_post();
        $images = CFS()->get('images');
        if ($images):
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
                        <img src="<?php echo $images[$imageIndex]['logo_image']; ?>" alt="">
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
                        <img src="<?php echo $images[$imageIndex]['logo_image']; ?>" alt="">
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

<script>
    var splide = new Splide('.splide', {
        type: 'fade',
        interval: 2000,
        rewind: 'true',
        autoplay: true,
        drag: true,
        speed: 1000
    });
    splide.mount();

    var firstRow = document.getElementById('first-row');
    var secondRow = document.getElementById('second-row');
    var columns = firstRow.getElementsByClassName('grid-column');
    var currentIndex = 0;

    function slideImages() {
        var firstColumn = columns[currentIndex];
        var firstColumnClone = firstColumn.cloneNode(true);
        secondRow.appendChild(firstColumnClone);
        firstRow.removeChild(firstColumn);
        currentIndex++;
        if (currentIndex >= columns.length) {
            currentIndex = 0;
        }
    }

    setInterval(slideImages, 300000);
</script>

<?php
    get_footer();
?>