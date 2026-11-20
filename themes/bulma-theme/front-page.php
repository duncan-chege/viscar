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
                $event_query = new WP_Query($args);
                ?>

                <?php if ($event_query->have_posts()) : ?>
                    <?php while ($event_query->have_posts()) : $event_query->the_post(); ?>
                        <li class="splide__slide md:flex -mx-3 -mt-3 mb-3 last:-mb-3">
                            <div class="center-hero-text grow shrink basis-0 lg:flex-none lg:w-1/2 max-md:flex-none max-md:w-full">
                                <h1><?php the_title(); ?></h1>
                                <a href="<?php the_permalink(); ?>" class="btn"> View Event </a>
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
                        <h1> Engineering Africa’s Future.</h1>
                        <h5> Viscar partners with organisations to build engineering, technology and technical capabilities that support sustainable industrial growth. </h5>
                        <div class="flex gap-8 mt-4">
                            <a class="btn" href="<?php echo esc_url(home_url('/')); ?>our-capabilities"> Explore Our Capabilities </a>
                            <a class="btn btn-outline" href="<?php echo esc_url(home_url('/')); ?>contact-us"> Make an Inquiry </a>
                        </div>
                    </div>
                    <div class="grow shrink basis-0 lg:flex-none lg:w-1/2 max-md:flex-none max-md:w-full max-md:hidden p-0">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/africa-future.jpg"
                            alt="">
                    </div>
                </li>

                <li class="splide__slide md:flex -mx-3 -mt-3 mb-3 last:-mb-3">
                    <div class="center-hero-text grow shrink basis-0 lg:flex-none lg:w-1/2 max-md:flex-none max-md:w-full">
                        <h1> Discover our top engineering and IT courses.</h1>
                        <h5> Viscar partners with organisations to build engineering, technology and technical capabilities that support sustainable industrial growth. </h5>
                        <a href="<?php echo esc_url(home_url('/')); ?>courses" class="btn"> View Courses </a>
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
                        <a href="<?php echo esc_url(home_url('/')); ?>about-us" class="btn"> About Us </a>
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
                        <a href="#solutions" class="btn"> View Solutions </a>
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
            <h2> 50+ </h2>
            <h4>Consultancy assignments </h4>
        </div>
        <div class="grow shrink basis-0 lg:flex-none lg:w-1/4 md:flex-none md:w-1/2 max-md:flex-none max-md:w-full p-3">
            <h2> 700+ </h2>
            <h4>Resources </h4>
        </div>
        <div class="grow shrink basis-0 lg:flex-none lg:w-1/4 md:flex-none md:w-1/2 max-md:flex-none max-md:w-full p-3">
            <h2> 30+ </h2>
            <h4>Technical support<br>projects completed </h4>
        </div>
    </div>
</div>

<?php
$theme_img = esc_url(get_template_directory_uri()) . '/assets/img/';
$home      = esc_url(home_url('/'));

$capabilities = array(
    array('title' => 'ICT &amp; Digital<br>Transformation', 'icon' => 'dig-transform-icon.svg', 'link' => 'digital-transformation'),
    array('title' => 'Engineering &amp;<br>Emerging Technologies', 'icon' => 'ind-automation-icon.svg', 'link' => 'industrial-automation'),
    array('title' => 'Safety In<br>Engineering', 'icon' => 'safe-engineering-icon.svg', 'link' => 'safety-in-engineering'),
    array('title' => 'Engineering Talent &amp;<br>Managed Services', 'icon' => 'lead-engineering-icon.svg', 'link' => 'leadership-in-engineering'),
);

// Delivery modes: the first column is rendered in blue, the second in red.
$delivery_columns = array(
    array(
        array('title' => 'Training', 'text' => 'Practical, instructor-led, online and blended learning.', 'icon' => 'training.svg', 'link' => '#', 'featured' => true),
        array('title' => 'Technical Support', 'text' => 'Engineering and technical personnel supporting client operations.', 'icon' => 'technical-support.svg', 'link' => '#'),
        array('title' => 'Talent Development', 'text' => 'Structured programmes that build engineering and leadership capacity.', 'icon' => 'talent-dev.svg', 'link' => '#'),
    ),
    array(
        array('title' => 'Consultancy', 'text' => 'Structured advisory engagements tailored to client needs.', 'icon' => 'consultancy.svg', 'link' => '#'),
        array('title' => 'System Integration Projects', 'text' => 'Design, supply, installation, testing and commissioning.', 'icon' => 'system-integration.svg', 'link' => '#'),
        array('title' => 'Managed Services', 'text' => 'Ongoing outsourced technical, maintenance or ICT support.', 'icon' => 'managed-services.svg', 'link' => '#'),
    ),
);
?>

<section class="hp-capabilities" id="solutions">
    <h2 class="hp-title">Our Capabilities</h2>
    <div class="hp-cap-grid">
        <?php foreach ($capabilities as $cap) : ?>
            <a href="<?php echo $home . $cap['link']; ?>" class="hp-cap">
                <span class="hp-cap-icon">
                    <img src="<?php echo $theme_img . $cap['icon']; ?>" alt="">
                </span>
                <span class="hp-cap-body">
                    <h4><?php echo $cap['title']; ?></h4>
                    <span class="hp-learn-more">Learn More</span>
                </span>
            </a>
        <?php endforeach; ?>
    </div>
</section>

<section class="hp-ceo">
    <h2 class="hp-title">A Message From Our CEO</h2>
    <div class="hp-ceo-card">
        <svg class="hp-ceo-bg" viewBox="0 0 961 511" preserveAspectRatio="none" aria-hidden="true">
            <rect width="961" height="511" fill="#292a6a" />
            <path fill="#2e6ad8" d="M0 0H534L760 220C820 270 830 330 826 380C824 430 816 470 806 511H0Z" />
            <path fill="#0e4cbb" d="M0 0H226Q240 0 246 12C300 140 430 220 470 330C490 390 486 470 480 497Q477 511 463 511H0Z" />
        </svg>
        <div class="hp-ceo-content">
            <h5 class="hp-ceo-intro">Africa's industrial growth depends on Africa's own engineering capacity.</h5>
            <blockquote>
                Since 2008, Viscar has grown from a single engineering development programme into a multidisciplinary
                engineering and technology partner. Today, we continue to build the capabilities that help industries
                grow, adapt and thrive.
            </blockquote>
            <p class="hp-ceo-name">Eng. David Mulongo<br>Chief Executive Officer</p>
        </div>
    </div>
</section>

<div class="wires"></div>

<section class="hp-deliver">
    <div class="hp-deliver-intro">
        <h2>How We Deliver</h2>
        <p>Whichever business unit a client engages, Viscar delivers through six complementary modes. Clients may begin with one service and engage others as their needs evolve.</p>
    </div>

    <div class="hp-deliver-board">
        <span class="hp-deliver-panel" aria-hidden="true"></span>
        <svg class="hp-deliver-curve" viewBox="0 0 588 1040" aria-hidden="true">
            <path d="M200 250C280 290 340 330 352 400" />
            <path d="M250 420C285 470 290 520 292 560C296 610 310 630 340 645" />
            <path d="M190 580C205 660 240 730 340 790" />
        </svg>

        <?php foreach ($delivery_columns as $col_index => $modes) : ?>
            <div class="hp-deliver-col <?php echo $col_index ? 'is-red' : 'is-blue'; ?>">
                <?php foreach ($modes as $mode) : ?>
                    <a href="<?php echo $home . $mode['link']; ?>" class="hp-mode<?php echo !empty($mode['featured']) ? ' is-featured' : ''; ?>">
                        <span class="hp-mode-icon">
                            <img src="<?php echo $theme_img . $mode['icon']; ?>" alt="">
                        </span>
                        <h3><?php echo esc_html($mode['title']); ?></h3>
                        <p><?php echo esc_html($mode['text']); ?></p>
                        <span class="hp-mode-arrow"><i class="bi bi-chevron-right"></i></span>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<?php
$projects = new WP_Query(array(
    'post_type'      => 'projects',
    'posts_per_page' => 4,
));
?>

<section class="hp-projects">
    <h2 class="hp-title">Latest Projects</h2>
    <?php if ($projects->have_posts()) : ?>
        <div class="hp-project-grid">
            <?php while ($projects->have_posts()) : $projects->the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="hp-project">
                    <div class="hp-project-img">
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('medium_large');
                        } else { ?>
                            <img src="<?php echo $theme_img; ?>blog-placeholder.jpg" alt="">
                        <?php } ?>
                    </div>
                    <div class="hp-project-body">
                        <h3><?php the_title(); ?></h3>
                        <span class="hp-read-more">Read More <i class="bi bi-chevron-right"></i></span>
                    </div>
                </a>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <p class="hp-empty"><?php _e('We are currently updating our projects'); ?></p>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
    <a href="<?php echo $home; ?>projects" class="btn btn-center">More Projects</a>
</section>

<?php
$up_trainings = new WP_Query(array(
    'post_type'      => 'upcoming-trainings',
    'posts_per_page' => 4,
));
?>

<section class="hp-trainings">
    <div class="hp-trainings-img" aria-hidden="true"></div>
    <div class="hp-trainings-content">
        <h3>Our Upcoming Trainings</h3>
        <?php if ($up_trainings->have_posts()) : ?>
            <div class="hp-training-grid">
                <?php while ($up_trainings->have_posts()) : $up_trainings->the_post(); ?>
                    <?php
                    $start_date = viscar_format_date(viscar_field('start_date'));
                    $end_date   = viscar_format_date(viscar_field('end_date'));
                    ?>
                    <a href="<?php the_permalink(); ?>" class="hp-training">
                        <h5><?php the_title(); ?></h5>
                        <p>
                            <?php echo esc_html($start_date); ?>
                            <?php if ($end_date) {
                                echo '- ' . esc_html($end_date);
                            } ?>
                        </p>
                    </a>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <h4 class="soon-trainings"><?php _e('New trainings are coming soon'); ?></h4>
            <div class="loader-line trainings"></div>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
        <a href="<?php echo $home; ?>upcoming-trainings" class="btn btn-center">More Trainings</a>
    </div>
</section>

<section class="partners-section hp-partners">
    <h2 class="hp-title">Our Clients &amp; Partners</h2>
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
                            <?php endif;
                            endfor; ?>
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
                            <?php endif;
                            endfor; ?>
                        </div>
                    </div>
                </div>
    <?php
            endif;
        endwhile;
    endif;
    ?>
</section>

<section class="hp-cta">
    <div class="hp-cta-card">
        <svg class="hp-cta-bg" viewBox="0 0 1063 330" preserveAspectRatio="none" aria-hidden="true">
            <rect width="1063" height="330" fill="#292a6a" />
            <polygon fill="#2e6ad8" points="0,0 494,0 669,330 0,330" />
            <polygon fill="#0e4cbb" points="0,0 248,0 423,330 0,330" />
        </svg>
        <div class="hp-cta-text">
            <h2>Let’s Build What Comes Next</h2>
            <p>Have an engineering, technology, safety, training or technical resourcing need? Get in touch with Viscar to discuss how we can work together.</p>
        </div>
        <a href="<?php echo $home; ?>contact-us" class="btn hover:bg-white hover:text-viscar-blue">Make an Enquiry</a>
    </div>
</section>

<?php
get_footer();
?>