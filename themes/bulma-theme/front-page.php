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

// Shared section heading style.
$section_title = 'text-center text-[2.25rem] font-extrabold leading-[1.2] text-hp-red max-md:text-[1.75rem]';

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

// Per-column colours for the delivery cards.
$delivery_styles = array(
    array(
        'card'  => 'hover:border-hp-navy hover:shadow-[inset_0_0_0_1px_var(--color-hp-navy)]',
        'icon'  => 'bg-hp-ice',
        'title' => 'text-hp-navy',
        'arrow' => 'bg-hp-navy',
    ),
    array(
        'card'  => 'hover:border-hp-red hover:shadow-[inset_0_0_0_1px_var(--color-hp-red)]',
        'icon'  => 'bg-hp-pink',
        'title' => 'text-hp-red',
        'arrow' => 'bg-hp-red',
    ),
);
// The red column's cards are slightly taller, as in the design.
$red_card_heights = array('min-h-69', 'min-h-74.5', 'min-h-72');
// The featured card shows the active border until any card in the board is hovered.
$featured_card = '[.hp-deliver-board:not(:hover)_&]:border-hp-navy [.hp-deliver-board:not(:hover)_&]:shadow-[inset_0_0_0_1px_var(--color-hp-navy)]';

// Dashed rule above a training item (19px pattern: 55% dash, rest gap).
// Written out in full for both sizes
$training_dash    = 'bg-[linear-gradient(to_right,var(--color-hp-navy)_55%,transparent_0)] bg-size-[19px_2px] bg-position-[top_left] bg-repeat-x pt-6.5';
$training_dash_md = 'max-md:bg-[linear-gradient(to_right,var(--color-hp-navy)_55%,transparent_0)] max-md:bg-size-[19px_2px] max-md:bg-position-[top_left] max-md:bg-repeat-x max-md:pt-6.5';
?>

<section class="px-8 pt-22.5" id="solutions">
    <h2 class="<?php echo $section_title; ?>">Our Capabilities</h2>
    <div class="mx-auto mt-15 grid max-w-232.5 grid-cols-2 gap-x-8 gap-y-20 max-md:mt-10 max-md:max-w-90 max-md:grid-cols-1 max-md:gap-y-12">
        <?php foreach ($capabilities as $cap) : ?>
            <a href="<?php echo $home . $cap['link']; ?>" class="group flex items-center gap-5">
                <span class="relative flex h-29 flex-[0_0_140px] items-center justify-end">
                    <img class="relative max-h-29 w-26.25 object-contain" src="<?php echo $theme_img . $cap['icon']; ?>" alt="">
                </span>
                <span>
                    <h4 class="font-bold leading-[1.1] text-hp-navy transition-colors duration-300 group-hover:text-hp-red"><?php echo $cap['title']; ?></h4>
                    <span class="mt-5.5 inline-block border-b-2 border-current pb-0.5 text-base font-bold text-hp-link transition-colors duration-300 group-hover:text-hp-red">Learn More</span>
                </span>
            </a>
        <?php endforeach; ?>
    </div>
</section>

<section class="px-8 pt-40 max-md:pt-22.5">
    <h2 class="<?php echo $section_title; ?>">A Message From Our CEO</h2>
    <div class="relative mx-auto mt-12.5 max-w-240.25 overflow-hidden rounded-2xl bg-hp-blue text-white shadow-[0_10px_30px_rgba(0,0,0,0.12)]">
        <svg class="absolute inset-0 h-full w-full max-md:hidden" viewBox="0 0 961 511" preserveAspectRatio="none" aria-hidden="true">
            <rect width="961" height="511" fill="#292a6a" />
            <path fill="#2e6ad8" d="M0 0H534L760 220C820 270 830 330 826 380C824 430 816 470 806 511H0Z" />
            <path fill="#0e4cbb" d="M0 0H226Q240 0 246 12C300 140 430 220 470 330C490 390 486 470 480 497Q477 511 463 511H0Z" />
        </svg>
        <div class="relative pt-15 pr-18.5 pb-8.5 pl-9.5 max-md:px-6 max-md:pt-9 max-md:pb-7">
            <h5 class="max-w-185 font-bold leading-[1.2]">Africa's industrial growth depends on Africa's own engineering capacity.</h5>
            <blockquote class="mt-12 text-[1.8rem] font-bold leading-[1.33] max-md:mt-7 max-md:text-[1.35rem]">
                Since 2008, Viscar has grown from a single engineering development programme into a multidisciplinary
                engineering and technology partner. Today, we continue to build the capabilities that help industries
                grow, adapt and thrive.
            </blockquote>
            <p class="mt-16 font-medium leading-[1.35] max-md:mt-10">Eng. David Mulongo<br>Chief Executive Officer</p>
        </div>
    </div>
</section>

<div class="wires mt-37.5 max-md:mt-20"></div>

<section class="mx-auto grid max-w-360 grid-cols-[minmax(0,1fr)_588px] gap-x-8 pt-35 pr-29.5 pl-11.5 max-[1100px]:grid-cols-1 max-[1100px]:gap-y-12 max-[1100px]:px-8 max-[1100px]:pt-22.5">
    <div class="sticky top-[max(2rem,calc(50vh-7rem))] mt-58 max-w-140 self-start max-[1100px]:static max-[1100px]:mt-0 max-[1100px]:max-w-none">
        <h2 class="text-[2.25rem] font-extrabold leading-[1.2] text-hp-red max-md:text-[1.75rem]">How We Deliver</h2>
        <p class="mt-11 text-[1.1rem] font-medium leading-[1.1] text-[#373773] max-[1100px]:mt-6 max-[1100px]:leading-[1.35]">Whichever business unit a client engages, Viscar delivers through six complementary modes. Clients may begin with one service and engage others as their needs evolve.</p>
    </div>

    <div class="hp-deliver-board relative flex w-147 gap-17 max-[1100px]:mx-auto max-sm:w-full max-sm:max-w-[320px] max-sm:flex-col max-sm:gap-6">
        <span class="absolute top-46.25 left-30.75 h-154 w-81.75 bg-hp-ice max-sm:hidden" aria-hidden="true"></span>
        <svg class="absolute top-0 left-0 h-260 w-147 fill-none stroke-hp-navy [stroke-linecap:round] stroke-22 max-sm:hidden" viewBox="0 0 588 1040" aria-hidden="true">
            <path d="M200 250C280 290 340 330 352 400" />
            <path d="M250 420C285 470 290 520 292 560C296 610 310 630 340 645" />
            <path d="M190 580C205 660 240 730 340 790" />
        </svg>

        <?php foreach ($delivery_columns as $col_index => $modes) :
            $style = $delivery_styles[$col_index]; ?>
            <div class="relative flex w-65 flex-col gap-10.75 max-sm:w-full max-sm:gap-6<?php echo $col_index ? ' pt-21 max-sm:pt-0' : ''; ?>">
                <?php foreach ($modes as $mode_index => $mode) :
                    $height = $col_index ? $red_card_heights[$mode_index] : 'min-h-69';
                    $featured = !empty($mode['featured']) ? ' ' . $featured_card : ''; ?>
                    <a href="<?php echo $home . $mode['link']; ?>" class="flex flex-col items-center rounded-[14px] border border-[#ababad] bg-white px-5.5 pt-8 pb-4.5 text-center transition-[border-color,box-shadow] duration-300 <?php echo $height . ' ' . $style['card'] . $featured; ?>">
                        <span class="flex h-20.75 w-20.75 items-center justify-center rounded-full <?php echo $style['icon']; ?>">
                            <img class="h-17.5 w-17.5 object-contain" src="<?php echo $theme_img . $mode['icon']; ?>" alt="">
                        </span>
                        <h3 class="mt-4.5 text-[1.125rem] font-bold leading-[1.1] <?php echo $style['title']; ?>"><?php echo esc_html($mode['title']); ?></h3>
                        <p class="mt-3.5 mb-5 px-3 text-[0.95rem] font-medium leading-[1.1] text-[#222]"><?php echo esc_html($mode['text']); ?></p>
                        <span class="mt-auto flex h-6 w-6 items-center justify-center rounded-full text-[0.7rem] text-white [-webkit-text-stroke:1px_#fff] <?php echo $style['arrow']; ?>"><i class="bi bi-chevron-right"></i></span>
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
$project_img = 'h-full w-full object-cover transition-transform duration-400 ease-in-out group-hover:scale-[1.08]';
?>

<section class="mx-auto max-w-360.5 px-11.5 pt-22.5 max-md:px-8 max-md:pt-17.5">
    <h2 class="<?php echo $section_title; ?>">Latest Projects</h2>
    <?php if ($projects->have_posts()) : ?>
        <div class="my-12 grid grid-cols-4 gap-7.5 max-[1100px]:grid-cols-2 max-[1100px]:gap-8 max-sm:mt-9 max-sm:grid-cols-1">
            <?php while ($projects->have_posts()) : $projects->the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="group flex flex-col bg-white shadow-[0_3px_6px_rgba(0,0,0,0.16)] transition-transform duration-300 hover:-translate-y-1.5">
                    <div class="h-60 overflow-hidden">
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('medium_large', array('class' => $project_img));
                        } else { ?>
                            <img class="<?php echo $project_img; ?>" src="<?php echo $theme_img; ?>blog-placeholder.jpg" alt="">
                        <?php } ?>
                    </div>
                    <div class="flex min-h-49.5 flex-1 flex-col px-3.75 pt-4 pb-5.5">
                        <h3 class="text-[1.25rem] font-bold leading-[1.05] text-hp-navy transition-colors group-hover:text-hp-red"><?php the_title(); ?></h3>
                        <span class="mt-auto flex items-center gap-2.5 pt-6 text-[0.95rem] font-medium text-hp-navy transition-colors group-hover:text-hp-red">Read More <i class="bi bi-chevron-right text-[0.75rem] [-webkit-text-stroke:0.5px_currentColor]"></i></span>
                    </div>
                </a>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <p class="my-10 text-center text-hp-navy"><?php _e('We are currently updating our projects'); ?></p>
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

<section class="mt-29.25 grid grid-cols-[35.7%_1fr] bg-hp-ice max-md:mt-17.5 max-md:grid-cols-1">
    <div class="relative min-h-75">
        <img class="absolute inset-0 h-full w-full object-cover" src="<?php echo $theme_img; ?>trainings-img.png" alt="">
    </div>
    <div class="px-8 pt-11 pb-6 max-md:py-10">
        <h3 class="text-center font-extrabold leading-[1.2] text-hp-navy max-md:text-[1.75rem]">Our Upcoming Trainings</h3>
        <?php if ($up_trainings->have_posts()) : ?>
            <div class="mt-12 ml-12 grid grid-cols-[repeat(2,minmax(0,340px))] gap-x-23.75 max-[1100px]:ml-0 max-[1100px]:gap-x-10 max-md:mt-9 max-md:grid-cols-1">
                <?php while ($up_trainings->have_posts()) : $up_trainings->the_post();
                    $index = $up_trainings->current_post;
                    // A dashed rule sits above the second row (two columns),
                    // or above every item after the first (one column on mobile).
                    if ($index >= 2) {
                        $dash = $training_dash;
                    } elseif ($index === 1) {
                        $dash = $training_dash_md;
                    } else {
                        $dash = '';
                    }
                    $start_date = viscar_format_date(viscar_field('start_date'));
                    $end_date   = viscar_format_date(viscar_field('end_date'));
                    ?>
                    <a href="<?php the_permalink(); ?>" class="group pb-6 <?php echo $dash; ?>">
                        <h5 class="font-bold capitalize leading-[1.1] text-hp-navy transition-colors duration-300 group-hover:text-hp-red"><?php the_title(); ?></h5>
                        <p class="mt-2.5 text-base font-medium text-[#5e5e5e]">
                            <?php echo esc_html($start_date); ?>
                            <?php if ($end_date) {
                                echo '- ' . esc_html($end_date);
                            } ?>
                        </p>
                    </a>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <h4 class="soon-trainings mt-15 text-center text-hp-navy"><?php _e('New trainings are coming soon'); ?></h4>
            <div class="loader-line trainings"></div>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
        <a href="<?php echo $home; ?>upcoming-trainings" class="btn btn-center">More Trainings</a>
    </div>
</section>

<section class="px-8 pt-27.5 max-md:p-8">
    <h2 class="pb-12.5 <?php echo $section_title; ?>">Our Clients &amp; Partners</h2>
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
                                            <img class="max-h-25 object-contain" src="<?php echo esc_url($images[$imageIndex]['logo_image']); ?>" alt="">
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
                                            <img class="max-h-25 object-contain" src="<?php echo esc_url($images[$imageIndex]['logo_image']); ?>" alt="">
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

<?php /* The CTA overlaps the top of the footer; `.home .site-footer` in input.css adds the matching footer padding. */ ?>
<section class="relative z-2 -mb-27.5 px-8 pt-30 max-md:-mb-15 max-md:pt-17.5">
    <div class="relative mx-auto flex min-h-82.5 max-w-265.75 items-start justify-between gap-8 overflow-hidden rounded-[18px] bg-hp-navy py-16 pr-32 pl-16 text-white max-[1100px]:pr-14.25 max-md:min-h-0 max-md:flex-col max-md:bg-hp-blue max-md:px-6 max-md:py-10">
        <svg class="absolute inset-0 h-full w-full max-md:hidden" viewBox="0 0 1063 330" preserveAspectRatio="none" aria-hidden="true">
            <rect width="1063" height="330" fill="#292a6a" />
            <polygon fill="#2e6ad8" points="0,0 494,0 669,330 0,330" />
            <polygon fill="#0e4cbb" points="0,0 248,0 423,330 0,330" />
        </svg>
        <div class="relative max-w-130">
            <h2 class="text-[2.3rem] font-extrabold leading-[1.2] max-md:text-[1.6rem]">Let’s Build What Comes Next</h2>
            <p class="mt-12.5 max-w-125 pl-1 text-[1.125rem] font-medium leading-[1.33] max-md:mt-5 max-md:pl-0">Have an engineering, technology, safety, training or technical resourcing need? Get in touch with Viscar to discuss how we can work together.</p>
        </div>
        <a href="<?php echo $home; ?>contact-us" class="btn relative mt-18.25 shrink-0 [--btn-padding:0.5625rem_0.75rem] hover:bg-white hover:text-viscar-blue max-md:mt-2">Make an Enquiry</a>
    </div>
</section>

<?php
get_footer();
?>
