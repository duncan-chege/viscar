<?php get_header(); ?>

<?php while(have_posts()){ the_post(); ?>

<div class='columns single-block'>

    <div class='column is-three-fifths-desktop is-offset-one-fifth-desktop'>

        <h1 class='has-text-centered font-weight-bold my-5 pb-3 single-title'><?php the_title(); ?></h1>

        <div class="my-5"><?php the_post_thumbnail(); ?></div>

        <?php $saa = CFS()->get('event_date'); 

        if ($saa) {
            echo '<h2 id="saa"></h2>';
        }
        
        ?>

        <?php the_content(); ?>

        <a href="<?php echo home_url(); ?>/events" class="previous-page"> Back to Events </a>

    </div>
</div>

<?php } ?>

<?php wp_reset_postdata(); ?>

<script>
    var countDownDate = new Date("<?php echo $saa; ?> 00:00:00").getTime();
    var x = setInterval(function () {
        var now = new Date().getTime();
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        document.getElementById("saa").innerHTML = "<div>" + days + "<span>DAYS</span>" + "</div><div>" +
            hours + "<span>HOURS</span>" + "</div><div>" + minutes + "<span>MINUTES</span>" + "</div><div>" +
            seconds + "<span>SECONDS</span>" + "</div>";

        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("saa").innerHTML = "...";
        }
    }, 1000);
</script>

<?php get_footer(); ?>