<?php 

  get_header();

?>



<div class="page-hero-section">

    <h1> Projects </h1>

    <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/header-vector.svg">

</div>



<?php 

$args = array(

    'post_type' => 'projects', 

);



$proj_query= new WP_Query($args); 

?>



<div class="projects-section">

    <?php if ($proj_query->have_posts()) : ?>

    <?php while ($proj_query->have_posts()) : $proj_query->the_post(); ?>

    <div class="project-block">

        <a href="<?php echo get_permalink(); ?>">

            <div><?php the_post_thumbnail(); ?></div>

            <h4><?php the_title(); ?></h4>

        </a>

    </div>

    <?php endwhile; ?>



    <?php wp_reset_postdata(); ?>



    <?php else : ?>

    <p class=""><?php _e( 'We are currently updating our projects' ); ?></p>

    <?php endif; ?>

</div>

<?php get_footer(); ?>