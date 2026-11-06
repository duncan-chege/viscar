<?php 

    function main_files(){

        wp_enqueue_style('custom-google-font', '//fonts.googleapis.com/css2?family=Mulish:ital,wght@0,500;0,700;0,900;1,400&display=swap', false);

        wp_enqueue_style('bulma', '//cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css');

        wp_enqueue_style('custom-style',  get_template_directory_uri().'/assets/css/custom.css');

        wp_enqueue_style('responsive-style',  get_template_directory_uri().'/assets/css/responsive.css');

        wp_enqueue_style('splide-css', '//cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css');

        wp_enqueue_style('bootstrap-icons', '//cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css');

        wp_enqueue_style('main-css', get_stylesheet_uri());

    

        wp_enqueue_script('jQuery','//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js', array('jquery'));

        wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), null, true );

        wp_enqueue_script('loadmore-js', get_template_directory_uri() . '/assets/js/loadmore.js', array('jquery'), null, true );

        wp_enqueue_script('splide-js', '//cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js');

        wp_enqueue_script('splide-autoscroll', '//cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js');

    }



    add_action('wp_enqueue_scripts', 'main_files');



    require_once('navwalker.php');

    register_nav_menus( array(

        'primary' => __( 'Primary Menu', 'primary' ),

    ) );

    

    add_theme_support('post-thumbnails');



    add_theme_support('title-tag');



    add_post_type_support('page', 'excerpt');



    // Adding wide image support to a Gutenburg block

    add_theme_support( 'align-wide' );



    //Page Slug Body Class

    function add_slug_body_class( $classes ) {

        global $post;

        if ( isset( $post ) ) {

        $classes[] = $post->post_type . '-' . $post->post_name;

        }

        return $classes;

    }

    add_filter( 'body_class', 'add_slug_body_class' );

    function add_active_class_to_menu_item($classes, $item) {
        if (in_array('current-menu-item', $classes) ){
            $classes[] = 'active ';
        }
        return $classes;
    }

    add_filter('nav_menu_css_class' , 'add_active_class_to_menu_item' , 10 , 2);


    function load_more_posts() {
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 9,
            'offset' => $_POST['offset']  // Start at 9 more than the offset
        );

        $query = new WP_Query($args); ?>

    <div class="columns is-multiline is-offset-2 is-multiline">
        <?php if ($query->have_posts()) : ?>
        <?php while ($query->have_posts()) : $query->the_post(); ?>
        <div class="column is-4-desktop is-6-tablet is-12-mobile">
            <?php get_template_part('template-parts/blog-card'); ?>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <?php wp_reset_postdata();
        die();
    }
    
    add_action('wp_ajax_load_more_posts', 'load_more_posts');
    add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');
    
// Create a new custom field type called "repeater"
add_action( 'init', function() {
    register_post_type( 'repeater', [
        'hierarchical' => false,
        'labels' => [
            'name' => __( 'Repeater' ),
            'singular_name' => __( 'Repeater Item' ),
        ],
        'supports' => [ 'title', 'editor', 'thumbnail' ],
    ] );
} );

// Create a new repeater field called "images"
add_action( 'add_meta_boxes', function() {
    add_meta_box(
        'images',
        __( 'Images' ),
        'render_images_meta_box',
        'repeater'
    );
} );

// Render the repeater field
function render_images_meta_box() {
    // Get the current post ID
    $post_id = get_the_ID();

    // Get the repeater field data
    $images = get_post_meta( $post_id, 'images', true );

    // Loop through the images
    foreach ( $images as $image ) {
        // Get the image URL
        $image_url = wp_get_attachment_image_src( $image['image'], 'full' );

        // Display the image
        echo '<img src="' . $image_url[0] . '" />';
    }
}

/**
 * Filter to disable Content AI test.
 */
add_filter('rank_math/researches/tests', function ($tests, $type) {
	unset($tests['hasContentAI']);
	return $tests;
}, 10, 2);
   
/**
 * Filter to disable Table of Content test
 */
add_filter('rank_math/researches/tests', function ($tests, $type) {
	unset($tests['contentHasTOC']);
	return $tests;
}, 10, 2 );


// Disable comments on all post types
function disable_comments_status() {
    return false;
}
add_filter('comments_open', 'disable_comments_status', 20, 2);
add_filter('pings_open', 'disable_comments_status', 20, 2);

// Hide existing comments
function disable_comments_hide_existing_comments($comments) {
    $comments = array();
    return $comments;
}
add_filter('comments_array', 'disable_comments_hide_existing_comments');

// Remove comments page from the WordPress menu
function disable_comments_admin_menu() {
    remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'disable_comments_admin_menu');

// Redirect any user trying to access comments page
function disable_comments_admin_menu_redirect() {
    global $pagenow;
    if ($pagenow === 'edit-comments.php') {
        wp_redirect(admin_url());
        exit;
    }
}
add_action('admin_init', 'disable_comments_admin_menu_redirect');

?>