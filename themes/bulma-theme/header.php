<!DOCTYPE html>

<html <?php language_attributes(); ?>>



    <head>
        <!-- Google tag (gtag.js) -->
        <!-- Google Tag Manager was deleted cause code was appearing on main site -->
		
        <meta charset="<?php bloginfo('charset'); ?>">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php wp_title(''); echo ' | ';  bloginfo( 'name' ); ?></title>



        <?php wp_head(); ?>
<meta name="google-adsense-account" content="ca-pub-7922319688551430">
    </head>



    <body <?php body_class(); ?>>

        <header class="">
            <nav id="top-nav" class="navbar is-black has-text-white">
                <div class="container is-flex is-justify-content-space-between is-flex-wrap-wrap">
                    <div class="navbar-start">
                        <div class="drop">
                            <a href="<?php echo home_url(); ?>" target="_blank" class="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/kenyan-flag.png"
                                    alt='site logo' />
                                <span> KE
                                    <i class="bi bi-chevron-down" aria-hidden="true"></i>
                                </span>
                            </a>
                            <div class="drop-content">
                                <a href="https://viscarconsulting.co.ug/" target="_blank" class="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ugandan-flag.png"
                                        alt='site logo' /> <span class="has-text-black"> UG </span>
                                </a>
                                <a href="https://www.viscarconsulting.co.tz/" target="_blank" class="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tanzanian-flag.png"
                                        alt='site logo' /> <span class="has-text-black"> TZ </span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="scrolling-event my-4 is-hidden-touch">
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
                        <div class="text">
                            <span> <a href="<?php echo get_permalink(); ?>">Upcoming Event: <?php the_title(); ?></a></span>
                        </div>
                        <div class="text">
                            <span> <a href="<?php echo get_permalink(); ?>">Upcoming Event: <?php the_title(); ?></a></span>
                        </div>

                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        <?php endif; ?>
                    </div> -->

                    <div class="navbar-end is-justify-content-flex-end">
                        <div class="navbar-item p-0">
                            <a class="trainings-btn my-3" href="<?php echo home_url(); ?>/upcoming-trainings">
                                <?php 
                                $args = array(
                                    'post_type' => 'upcoming-trainings',
                                );
                                $up_trainings = new WP_Query($args);
                                $number_trainings = $up_trainings->found_posts;
                            ?>

                                <span class="text">Upcoming Trainings</span> <span
                                    class="no"><?php echo $number_trainings; ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>

            <nav id="primary-nav" class="navbar px-3 py-1" role='navigation' aria-label="main navigation">
                <div class="container">
                    <div class="navbar-brand">
                        <a href="<?php echo home_url(); ?>"><img
                                src="https://viscarcapacity.com/wp-content/uploads/2026/07/Viscar-New-Logo-No-background-scaled.png"
                                alt='Viscar Industrial Capacity Ltd'></a>
                        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false"
                            data-target="navMenu">
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                        </a>
                    </div>

                    <?php
                wp_nav_menu( array(

                    'theme_location'    => 'primary',

                    'depth'             => 0,

                    'container'         => 'false',

                    'container_id'      => '',

                    'container_class'   => '',

                    // 'items_wrap'     => 'div',

                    'menu_class'        => 'navbar-menu',

                    'menu_id'           => 'navMenu',

                    'after'             => "</div>",

                    'walker'            => new Navwalker(),

                ));

            ?>

                </div>

            </nav>

        </header>