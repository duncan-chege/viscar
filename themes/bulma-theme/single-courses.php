<?php get_header(); ?>

<div class="relative">
    <?php while(have_posts()){ the_post(); ?>
        <h1 class='single-training-title text-center capitalize pb-3'><?php the_title(); ?></h1>
        <div class='single-block md:flex mb-6'>
            <div class='training-prompts grow shrink basis-0 lg:flex-none lg:w-2/3 p-3'>
                <?php the_content(); ?>
            </div>

            <div class="grow shrink basis-0 lg:flex-none lg:w-1/3 px-6 py-3">
                <div class="single-course-dates">
                    <h5 style="font-weight: bold"> Course Dates: </h5>
                    <?php get_template_part('template-parts/course-dates', null, array('style' => 'margin: .2em 0;')); ?>

                    <?php if (viscar_field('upon_request')) : ?>
                    <p>Upon request</p>
                    <?php endif; ?>
                </div>
            
                <div class="training-buttons" style="justify-content: space-between;">
                    <button type="button" class="register" data-toggle="modal" data-target="#"> Enrol </button>
                    <a href="<?php echo esc_url(home_url('/')); ?>courses" class="back-trainings"> Back to Courses </a>
                </div>
            </div>
        </div>
    <?php } ?>
</div>

    <div class="popup">

        <div class="popup-content">

            <span class="close-btn">&times;</span>

            <h4 style="font-weight: 600;border-bottom: 2px solid #727070;padding-bottom: 10px; margin-bottom: 1rem;"> Course Enrolment Form </h4>

       <script id = 'formScript6877946000006311656' src = 'https://crm.zoho.com/crm/WebFormServeServlet?rid=8b9a9e5ec563a118b426edac99ec0e842c4fbbc69c27f61fee95f86fa470b357b4297a572ed8d045b2f0f9c2a19d3882gidf8524b2dab684443f6a52d4404a5c17400c1980d511b8a4e90c4f06bbebba5f9&script=$sYG'>
</script>
        </div>

    </div>



<?php get_footer(); ?>