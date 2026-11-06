<div class="card course-card">
    <?php
    $course_alert = CFS()->get('course_alert');

    if (!empty($course_alert)) {
        echo '<p class="course-alert">' . esc_html($course_alert) . '</p>';
    }
    ?>
    <a href="<?php the_permalink(); ?>">
        <div class="card-content">
            <div class="content">
                <h3><?php echo the_title(); ?> </h3>
                <div class="course-dates"> 
                <?php
                    $registration_dates = CFS()->get('registration_dates'); // Get the loop field data

                    if (!empty($registration_dates)) {
                        foreach ($registration_dates as $dates) {
                            $start_date = $dates['start_date'];
                            $end_date = $dates['end_date'];

                            if ($start_date && $end_date) {
                                echo '<p>' . date('F j', strtotime($start_date)) . ' - ' . date('F j', strtotime($end_date)) . '</p>';
                            } elseif ($start_date) {
                                echo '<p>' . date('F j', strtotime($start_date)) . '</p>';
                            }
                        }
                    }
                ?>
                </div>
                <div class="upon-request">
                <?php
                    $upon_request = CFS()->get('upon_request');

                    if ($upon_request) {
                        echo '<p>Upon request</p>';
                    }
                ?>
                </div>
                <p class="course-more-link"> Read More </p>
            </div>
        </div>
    </a>
</div>