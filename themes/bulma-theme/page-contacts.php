<?php 

/* Template Name: Contacts Page */

?>

<?php get_header(); ?>

<div class="page-hero-section">

    <h1> <?php echo get_the_title(); ?> </h1>

    <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/header-vector.svg">

</div>

<h3 class="contacts-title"> We are located in these 3 countries </h3>

<div class="hq-section">
    <h5 class="has-text-centered">OUR HEADQUARTERS</h5>
    <div class="columns is-align-items-center">
        <div class="column is-4-desktop">
            <h3 class="office-location">Kenya</h3>
            <p>Kasneb Towers, 10th Floor Matumbato Road Off Hospital Road Upper hill</p>
        </div>
        <div class="column is-8-desktop">
            <div class="map-responsive">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.7853716741856!2d36.80931211453847!3d-1.3037964990490596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f109437e94d1f%3A0x3e9e3afd9184daaf!2sViscar%20Industrial%20Capacity%20Limited!5e0!3m2!1sen!2ske!4v1679987828254!5m2!1sen!2ske"
                    style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>

<div class="regional-offices">
    <h5 class="has-text-centered">OUR REGIONAL OFFICES</h5>
    <div class="columns is-justify-content-space-between">
        <div class="column is-5-desktop">
            <div class="regional-bloc">
                <h3 class="office-location">Uganda</h3>

                <p>2nd Floor, Office no. 10B, Plot 90/92 Kanjokya street, Kanjokya House
                    Kampala,Uganda</p>
                <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d498.7184162250054!2d32.59459800183329!3d0.3417920551454021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177dbbb1d3c6f1d9%3A0xf654d04248134a29!2sViscar%20Intergrated%20Consulting!5e0!3m2!1sen!2suk!4v1689068872287!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

        <div class="column is-5-desktop">
            <div class="regional-bloc">
                <h3 class="office-location">Tanzania</h3>

                <p>69 Toure Drive Kirwa House, Oysterbay House, Oysterbay , Kinondoni Dar-es-salaam</p>
                <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990.5434696135964!2d39.284797999999995!3d-6.748636899999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c4d9265e31b85%3A0xa57d23534c482655!2sViscar%20Integrated%20Consulting%20Tz%20Limited!5e0!3m2!1sen!2ske!4v1694613412498!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="reach-out">

    <div class="columns is-multiline">

        <div class="column is-6-desktop is-12-tablet">

            <h3>Get in touch with us via email or phone</h3>

            <p>We will respond as soon as possible</p>


            <div><i class="bi bi-envelope-open-fill"
                    style="font-size: 2rem; color: var(--blue); padding-right: .5em;"></i><a
                    href="mailto:enquiries@viscarcapacity.com">enquiries@viscarcapacity.com</a></div>

            <div class="py-2"><i class="bi bi-telephone-fill"
                    style="font-size: 2rem; color: var(--blue); padding-right: .5em;"></i><a
                    href="tel:+254715389245">+254715389245</a></div>

        </div>

        <div class="column is-6-desktop is-12-tablet">

            <p class="m-0">Fill this form so we get an idea of how we can help you</p>

            <div class="contact-form">
                <?php echo do_shortcode("[forminator_form id='426']"); ?>
            </div>
        </div>

    </div>

</div>


<?php get_footer(); ?>