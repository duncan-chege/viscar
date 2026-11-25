<?php get_header(); ?>



<div class="relative">

    <?php while (have_posts()) {
        the_post(); ?>



        <h1 class='single-training-title text-center capitalize pb-3'><?php the_title(); ?></h1>



        <div class='single-block md:flex mb-3 last:-mb-3'>

            <div class='training-prompts grow shrink basis-0 lg:flex-none lg:w-5/12 p-3'>

                <div class="training-poster"><?php the_post_thumbnail(); ?></div>

                <div class="training-buttons">

                    <a href="<?php echo esc_url(home_url('/')); ?>upcoming-trainings" class="btn btn-sm btn-blue btn-invert"> Back to Trainings </a>

                    <button type="button" class="btn btn-sm btn-invert register" data-toggle="modal" data-target="#"> Register </button>

                </div>

            </div>

            <div class="grow shrink basis-0 lg:flex-none lg:w-1/2 px-6 py-3">

                <?php the_content(); ?>

                <?php
                $start_date = viscar_format_date(viscar_field('start_date'));
                $end_date = viscar_format_date(viscar_field('end_date'));
                $fees = viscar_field('fees');
                ?>

                <div class="training-meta">
                    <p> Begin on: <?php echo esc_html($start_date); ?> - <?php echo esc_html($end_date); ?></p>
                    <p> Fees: Ksh <?php echo $fees ? esc_html($fees) : ''; ?></p>
                </div>

            </div>



        <?php } ?>

        </div>


        /* The Zoho form's "Training" field (LEADCF8) is filled with this training's
        name and hidden */
        <?php ?>
        <div class="popup" data-prefill-field="LEADCF8" data-prefill-value="<?php echo esc_attr(get_post_field('post_title', get_queried_object_id())); ?>">

            <div class="popup-content">

                <span class="close-btn">&times;</span>

                <h4 style="font-weight: 600;border-bottom: 2px solid #727070;padding-bottom: 10px; margin-bottom: 1rem;"> Training Registration

                    Form </h4>

                <script id='formScript6877946000006311667' src='https://crm.zoho.com/crm/WebFormServeServlet?rid=aa75b6169647cc7fcf783117e0c6d43d2f4ac7cc04c5232b1f2dcacc98021a8fcd3df694d33b9fe9cbe834c02e962603gid6f9041ef4c3f312291d0d969a156004e3201d268b04a9133bbbdcfcf326e9e2e&script=$sYG'>
                </script>
            </div>

        </div>

</div>



<?php get_footer(); ?>