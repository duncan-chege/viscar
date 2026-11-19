<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Google Tag Manager was deleted cause code was appearing on main site -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <meta name="google-adsense-account" content="ca-pub-7922319688551430">
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <?php
    $theme_uri = get_template_directory_uri();
    $upcoming_trainings = wp_count_posts('upcoming-trainings');
    $number_trainings = isset($upcoming_trainings->publish) ? (int) $upcoming_trainings->publish : 0;
    ?>

    <header>
        <nav id="top-nav" class="relative z-30 min-h-[3.25rem] bg-[#0a0a0a] text-white lg:flex lg:items-stretch">
            <div class="site-container flex min-h-[3.25rem] w-full flex-wrap items-stretch justify-between">
                <div class="lg:mr-auto lg:flex lg:items-stretch lg:justify-start">
                    <div class="drop">
                        <a href="<?php echo esc_url(home_url()); ?>" target="_blank">
                            <img src="<?php echo esc_url($theme_uri); ?>/assets/img/kenyan-flag.png" alt="Kenya" />
                            <span> KE <i class="bi bi-chevron-down" aria-hidden="true"></i></span>
                        </a>
                        <div class="drop-content">
                            <a href="https://viscarconsulting.co.ug/" target="_blank">
                                <img src="<?php echo esc_url($theme_uri); ?>/assets/img/ugandan-flag.png" alt="Uganda" />
                                <span class="text-[#0a0a0a]"> UG </span>
                            </a>
                            <a href="https://www.viscarconsulting.co.tz/" target="_blank">
                                <img src="<?php echo esc_url($theme_uri); ?>/assets/img/tanzanian-flag.png" alt="Tanzania" />
                                <span class="text-[#0a0a0a]"> TZ </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="justify-end lg:ml-auto lg:flex lg:items-stretch">
                    <div class="relative block shrink-0 grow-0 p-0 leading-normal text-[#4a4a4a] lg:flex lg:items-center">
                        <a class="trainings-btn my-3" href="<?php echo esc_url(home_url('/upcoming-trainings')); ?>">
                            <span class="text">Upcoming Trainings</span>
                            <span class="no"><?php echo esc_html($number_trainings); ?></span>
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <nav id="primary-nav" class="relative z-10 min-h-[3.25rem] bg-white px-3 py-1 lg:flex lg:items-stretch" aria-label="Main navigation">
            <div class="site-container flex min-h-[3.25rem] w-full items-stretch">
                <div class="brand-logo flex min-h-[3.25rem] shrink-0 items-stretch lg:-ml-3">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php echo esc_url($theme_uri); ?>/assets/img/viscar-logo.png" alt="<?php echo esc_attr__('Viscar Industrial Capacity Ltd', 'viscar'); ?>">
                    </a>
                </div>

                <!-- Mobile menu button -->
                <button type="button" id="mobile-menu-toggle"
                    class="relative ml-auto block h-[3.25rem] w-[3.25rem] cursor-pointer border-0 bg-transparent p-0 text-[#4a4a4a] hover:bg-black/5 lg:hidden"
                    aria-label="<?php esc_attr_e('Open menu', 'viscar'); ?>" aria-controls="mobile-menu" aria-expanded="false">
                    <span aria-hidden="true" class="absolute top-[calc(50%-6px)] left-[calc(50%-8px)] block h-px w-4 bg-current"></span>
                    <span aria-hidden="true" class="absolute top-[calc(50%-1px)] left-[calc(50%-8px)] block h-px w-4 bg-current"></span>
                    <span aria-hidden="true" class="absolute top-[calc(50%+4px)] left-[calc(50%-8px)] block h-px w-4 bg-current"></span>
                </button>

                <!-- Desktop navigation -->
                <div class="hidden lg:-mr-3 lg:flex lg:shrink-0 lg:grow lg:items-stretch lg:justify-center">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'navMenu',
                        'menu_class'     => 'primary-menu',
                        'container'      => false,
                        'fallback_cb'    => false,
                    ));
                    ?>
                </div>
            </div>
        </nav>

        <!-- Mobile navigation backdrop -->
        <div id="mobile-menu-overlay"
            class="pointer-events-none invisible fixed inset-0 z-40 bg-black/50 opacity-0 transition duration-300 lg:hidden"></div>

        <!-- Mobile navigation drawer -->
        <div id="mobile-menu"
            class="fixed top-0 right-0 z-50 h-full w-4/5 max-w-xs translate-x-full overflow-y-auto bg-white shadow-xl transition-transform duration-300 lg:hidden"
            aria-label="<?php esc_attr_e('Mobile navigation', 'viscar'); ?>">
            <div class="flex items-center justify-end border-b border-gray-100 px-4 pt-4 pb-2">
                <button type="button" id="mobile-menu-close" class="cursor-pointer border-0 bg-transparent p-2 text-viscar-blue" aria-label="<?php esc_attr_e('Close menu', 'viscar'); ?>">
                    <i class="bi bi-x-lg text-xl" aria-hidden="true"></i>
                </button>
            </div>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class'     => 'drawer-menu',
                'container'      => false,
                'fallback_cb'    => false,
            ));
            ?>
        </div>
    </header>
