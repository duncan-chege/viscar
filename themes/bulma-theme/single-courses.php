<?php get_header(); ?>

<div class="is-relative">
    <?php while(have_posts()){ the_post(); ?>
        <h1 class='has-text-centered font-weight-bold is-capitalized pb-3 single-training-title'><?php the_title(); ?></h1>
        <div class='columns single-block mb-5'>
            <div class='column is-8-desktop training-prompts'>
                <?php the_content(); ?>
            </div>

            <div class="column is-4-desktop px-5">
                <div class="single-course-dates">
                    <h5 style="font-weight: bold"> Course Dates: </h5>
                    <?php
                        $registration_dates = CFS()->get('registration_dates'); // Get the loop field data

                        if (!empty($registration_dates)) {
                            foreach ($registration_dates as $dates) {
                                $start_date = $dates['start_date'];
                                $end_date = $dates['end_date'];

                                if ($start_date && $end_date) {
                                    echo '<p style="margin: .2em 0;">' . date('F j', strtotime($start_date)) . ' - ' . date('F j', strtotime($end_date)) . '</p>';
                                } elseif ($start_date) {
                                    echo '<p style="margin: .2em 0;>' . date('F j', strtotime($start_date)) . '</p>';
                                }
                            }
                        }
                    ?>

                    <?php
                        $upon_request = CFS()->get('upon_request');

                        if ($upon_request) {
                            echo '<p>Upon request</p>';
                        }
                    ?>
                </div>
            
                <div class="training-buttons" style="justify-content: space-between;">
                    <button type="button" class="register" data-toggle="modal" data-target="#"> Enrol </button>
                    <a href="<?php echo home_url(); ?>/courses" class="back-trainings"> Back to Courses </a>
                </div>
            </div>
        </div>
    <?php } ?>
        <?php wp_reset_postdata(); ?>
</div>

    <style>
        /* Zoho CRM web form – restyled to match Bulma. !important is needed to beat Zoho's injected/inline styles. */
        .popup #crmWebToEntityForm {
            --zf-accent: var(--bulma-link, #000382);
            --zf-border: var(--bulma-border, #dbdbdb);
            --zf-text: var(--bulma-text-strong, #363636);
            max-width: 100% !important;
            width: 100% !important;
            padding: 0 !important;
            margin: 0 !important;
            background: transparent !important;
            color: var(--zf-text) !important;
            font-family: inherit !important;
        }

        .popup #crmWebToEntityForm * {
            font-family: inherit !important;
            box-sizing: border-box;
        }

        /* The popup already has a heading */
        .popup #crmWebToEntityForm .zcwf_title {
            display: none !important;
        }

        .popup #crmWebToEntityForm .zcwf_col_lab,
        .popup #crmWebToEntityForm .zcwf_col_fld {
            display: block !important;
            float: none !important;
            width: 100% !important;
            padding: 0 !important;
        }

        .popup #crmWebToEntityForm .zcwf_col_lab,
        .popup #crmWebToEntityForm .zcwf_col_lab label {
            font-size: 1rem !important;
            font-weight: 600 !important;
            color: var(--zf-text) !important;
            margin-bottom: .4rem !important;
        }

        .popup #crmWebToEntityForm .zcwf_col_lab span {
            color: #f14668 !important;
            margin-left: 2px;
        }

        /* Inputs – same look as Bulma .input */
        .popup #crmWebToEntityForm input[type="text"],
        .popup #crmWebToEntityForm input[type="email"],
        .popup #crmWebToEntityForm input[type="tel"],
        .popup #crmWebToEntityForm input[type="number"],
        .popup #crmWebToEntityForm select,
        .popup #crmWebToEntityForm textarea {
            width: 100% !important;
            height: 2.5em !important;
            padding: calc(.5em - 1px) calc(.75em - 1px) !important;
            font-size: 1rem !important;
            color: var(--zf-text) !important;
            background: #fff !important;
            border: 1px solid var(--zf-border) !important;
            border-radius: 4px !important;
            box-shadow: inset 0 .0625em .125em rgba(10, 10, 10, .05) !important;
            transition: border-color .15s, box-shadow .15s;
        }

        .popup #crmWebToEntityForm textarea {
            height: auto !important;
            min-height: 6em;
        }

        .popup #crmWebToEntityForm input:hover,
        .popup #crmWebToEntityForm select:hover,
        .popup #crmWebToEntityForm textarea:hover {
            border-color: #b5b5b5 !important;
        }

        .popup #crmWebToEntityForm input:focus,
        .popup #crmWebToEntityForm select:focus,
        .popup #crmWebToEntityForm textarea:focus {
            outline: none !important;
            border-color: var(--zf-accent) !important;
            box-shadow: 0 0 0 .125em rgba(0, 3, 130, .25) !important;
        }

        /* Captcha image + Reload link */
        .popup #crmWebToEntityForm img[id^="imgid"] {
            display: inline-block;
            vertical-align: middle;
            width: auto !important;      /* undo .single-block img { width/height: 100%; object-fit: cover } */
            height: auto !important;
            max-width: 100%;
            object-fit: contain !important;
            margin-right: .75rem;
            border: 1px solid var(--zf-border);
            border-radius: 4px;
            background: #fff;
        }

        .popup #crmWebToEntityForm .zcwf_col_fld a {
            display: inline-block;
            vertical-align: middle;
            font-size: .9rem !important;
            color: var(--zf-accent) !important;
            text-decoration: underline;
            cursor: pointer;
        }

        /* Buttons – Bulma .button / .button.is-link */
        .popup #crmWebToEntityForm .zcwf_button {
            display: inline-flex !important;
            align-items: center;
            justify-content: center;
            height: 2.5em !important;
            min-width: 7rem;
            padding: calc(.5em - 1px) 1.25em !important;
            margin: .5rem .5rem 0 0 !important;
            font-size: 1rem !important;
            font-weight: 600 !important;
            line-height: 1.5 !important;
            border-radius: 4px !important;
            border: 1px solid var(--zf-border) !important;
            background: #fff !important;
            color: var(--zf-text) !important;
            cursor: pointer;
            transition: background-color .15s, border-color .15s;
        }

        .popup #crmWebToEntityForm .zcwf_button:hover {
            border-color: #b5b5b5 !important;
        }

        .popup #crmWebToEntityForm .formsubmit.zcwf_button {
            background: var(--zf-accent) !important;
            border-color: transparent !important;
            color: #fff !important;
        }

        .popup #crmWebToEntityForm .formsubmit.zcwf_button:hover {
            filter: brightness(.93);
        }

        /* Empty label column Zoho uses to indent the captcha/buttons rows */
        .popup #crmWebToEntityForm .zcwf_col_lab:empty {
            display: none !important;
        }
    </style>

    <div class="popup">

        <div class="popup-content">

            <span class="close-btn">&times;</span>

            <h4 style="font-weight: 600;border-bottom: 2px solid #727070;padding-bottom: 10px; margin-bottom: 1rem;"> Course Enrolment Form </h4>

       <script id = 'formScript6877946000006311656' src = 'https://crm.zoho.com/crm/WebFormServeServlet?rid=8b9a9e5ec563a118b426edac99ec0e842c4fbbc69c27f61fee95f86fa470b357b4297a572ed8d045b2f0f9c2a19d3882gidf8524b2dab684443f6a52d4404a5c17400c1980d511b8a4e90c4f06bbebba5f9&script=$sYG'>
</script>
        </div>

    </div>



<?php get_footer(); ?>