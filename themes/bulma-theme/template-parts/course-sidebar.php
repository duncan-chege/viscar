<?php
// Without a referer this falls back to the current course (same as before the Tailwind rebuild).
$referer_url = wp_get_referer();
$referer_title = get_the_title($referer_url ? url_to_postid($referer_url) : 0);
?>

<a href="<?php echo esc_url($referer_url ? $referer_url : get_permalink()); ?>">
    <div class="back-to-solution">
        <i class="bi bi-caret-left-fill"></i>Back to <?php echo esc_html($referer_title); ?> </div>
</a>

<a href="<?php echo esc_url(home_url('/contacts')); ?>">
    <div class="course-contact">
        <i class="bi bi-caret-right-fill"></i>Contact Us for any clarification on this course</div>
</a>

<?php
$brochure = viscar_field('brochure_doc');
if ($brochure) : ?>
<a href="<?php echo esc_url($brochure); ?>">
    <div class="course-contact"><i class="bi bi-caret-right-fill"></i>View this course brochure</div>
</a>
<?php endif; ?>
