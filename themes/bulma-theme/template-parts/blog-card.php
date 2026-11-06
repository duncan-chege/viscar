<div class="card">
    <div class="card-image">
        <figure class="image">
            <?php if (has_post_thumbnail()) {
                        the_post_thumbnail();
                    } else { ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog-placeholder.jpg">
            <?php } ?>
        </figure>
    </div>
    <a href="<?php the_permalink(); ?>">
        <div class="card-content">
            <div class="content">
                <h4><?php echo the_title(); ?> </h4>
                <p> Read More <i class="bi bi-chevron-right"></i> </p>
            </div>
        </div>
    </a>
</div>