<div class="post-card">
    <div class="post-card-image">
        <figure>
            <?php if (has_post_thumbnail()) {
                the_post_thumbnail();
            } else { ?>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/blog-placeholder.jpg" alt="">
            <?php } ?>
        </figure>
    </div>
    <a href="<?php the_permalink(); ?>">
        <div class="post-card-content">
            <div class="post-card-body">
                <h4><?php the_title(); ?></h4>
                <p> Read More <i class="bi bi-chevron-right"></i> </p>
            </div>
        </div>
    </a>
</div>
