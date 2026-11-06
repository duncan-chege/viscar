<?php
$referer_url = wp_get_referer();
$referer_title = get_the_title(url_to_postid($referer_url));
?>

<a href="<?php echo $referer_url; ?>">
    <div class="back-to-solution">
        <i class="bi bi-caret-left-fill"></i>Back to <?php echo $referer_title; ?> </div>
</a>

<a href="<?php echo home_url(); ?>/contacts">
    <div class="course-contact">
        <i class="bi bi-caret-right-fill"></i>Contact Us for any clarification on this course</div>
</a>

<?php if (function_exists('CFS')) {
            $file_field = CFS()->get('brochure_doc');
            if ($file_field) {
                $file_url = esc_url($file_field);
            ?>
<a href="<?php echo $file_url; ?>">
    <div class="course-contact"><i class="bi bi-caret-right-fill"></i>View this course brochure</div>
</a>
<?php }
        } ?>