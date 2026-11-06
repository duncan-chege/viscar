<?php get_header() ?>

<div class="page-hero-section">
    <h1> Our Courses </h1>
    <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/header-vector.svg">
</div>

<div class="columns">
    <div class="column is-8-desktop is-offset-2-desktop">
        <h4 class="has-text-centered articles-heading">Explore our top online engineering and IT courses, designed 
            to equip you with valuable skills for career growth and success.</h4>
    </div>
</div>

<div class="courses-bloc">
	  <div class="tabs is-centered" style="margin-bottom: 4em;">
		<ul style="display: flex; gap: .75rem;">
			<li class="is-active" data-category="it-courses"><a>IT Courses</a></li>
			<li data-category="engineering-courses"><a>Engineering Courses</a></li>
			<li data-category="digital-transformation"><a>Digital Transformation</a></li>
			<li data-category="uncategorized"><a>Uncategorized</a></li>
		</ul>
	</div>

    <div class="columns is-multiline is-offset-2 is-multiline">
        <?php
        $args = array(
            'post_type'      => 'courses',
            'post_status'    => 'publish',
            'posts_per_page' => -1,
        );
        $courses = new WP_Query($args);
        if ($courses->have_posts()) :
            while ($courses->have_posts()) : $courses->the_post();
                $categories = get_the_category(); 
                if (!empty($categories)) {
                    $category_slug = $categories[0]->slug;
                } else {
                    $category_slug = '';
                }
        ?>
        <div class="column is-4-desktop is-6-tablet is-12-mobile card-column"
            data-category="<?php echo esc_attr($category_slug); ?>">
            <?php get_template_part('template-parts/course-card'); ?>
        </div>
        <?php endwhile; ?>
        <?php else : ?>
            <h4 class="soon-trainings"><?php _e('Courses are coming soon'); ?></h4>
            <div class="loader-line trainings"></div>
        <?php endif;
        wp_reset_postdata();
        ?>
    </div>

</div>


<div class="subscribe-section">
    <?php get_template_part('template-parts/subscription-section'); ?>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    let tabs = document.querySelectorAll(".tabs ul li");
    let cards = document.querySelectorAll(".card-column");

    function filterCourses(category) {
        cards.forEach(card => {
            if (card.getAttribute("data-category") === category) {
                card.style.display = "block";
            } else {
                card.style.display = "none";
            }
        });
    }

    // Set default to "it-courses"
    filterCourses("it-courses");

    tabs.forEach(tab => {
        tab.addEventListener("click", function () {
            let selectedCategory = this.getAttribute("data-category");

            tabs.forEach(t => t.classList.remove("is-active"));
            this.classList.add("is-active");

            filterCourses(selectedCategory);
        });
    });
});
</script>

<?php
    get_footer();
?>

