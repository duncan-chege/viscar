<?php 

/* Template Name: Manufacturing Process Efficiency Page */

?>

<?php get_header(); ?>

<?php get_template_part('template-parts/header-meta'); ?>

<div class="subsolution-section">
    <div class="columns is-multiline is-flex is-flex-wrap-wrap-reverse">
        <div class="column is-6-desktop is-12-mobile">
            <?php the_content(); ?>
        </div>
        <div class="column is-6-desktop process-approach-img">
        </div>
    </div>
</div>

<div class="process-audit">
    <div class="columns is-multiline is-flex is-flex-wrap-wrap-reverse">
        <div class="column is-6-desktop is-12-mobile">
            <h3 class="mb-4">Objectives of the Process Improvement Audit</h3>
            <ul class="audit-list">
                <li>To study processes and identify gaps and problems to improve manufacturing excellence</li>
                <li>To audit key process pillars using the World Class Manufacturing (WCM) framework to identify gaps
                    and propose measures to close the gaps</li>
                <li>To identify continuous improvement measures to be adopted to close the gaps identified </li>
                <li>To identify individual and interlinked process limitations and how they affect customer satisfaction
                    and the bottom-line</li>
                <li>To investigate key process problems/losses and identify root causes</li>
                <li>To develop an implementation roadmap for the measures identified to enable the organization attain
                    manufacturing excellence</li>
                <li>To anchor/align the continuous improvement roadmap to operations strategy to the overall business
                    strategy.
                </li>
            </ul>
        </div>

        <div class="column is-6-desktop process-audit-img">

        </div>
    </div>
</div>

<div class="process-overview">
    <div class="columns is-multiline">
        <div class="column is-6-desktop process-overview-img">
        </div>

        <div class="column is-6-desktop overview-details">
            <h3>Overview of the Process Improvement Audit</h3>
            <p>The process improvement audit is geared towards understanding all the processes and will include the
                following.</p>
            <button class="accordion">The Organization</button>
            <div class="panel">
                <p>A look at the company's strategic goals, key performance indicators for individuals and relevant
                    business functions.</p>
            </div>

            <button class="accordion"> Understanding the Process Documentation</button>
            <div class="panel">
                <p>Review and understand all process documentation for effective control and data collection.</p>
            </div>

            <button class="accordion">Identify Process Gaps and Improvement Opportunities</button>
            <div class="panel">
                <p>Assess the process, equipment, identify gaps, propose improvement initiatives, suggest cultural
                    changes, document steps, and provide implementation timelines.</p>
            </div>

            <button class="accordion"> Recommendation and Reports</button>
            <div class="panel">
                <p>The audit findings and recommended solutions are presented in a report together with an
                    implementation roadmap to ensure the audit report is fully implemented.</p>
            </div>
        </div>
    </div>
</div>

<div class="process-audit">
    <div class="columns is-multiline is-flex is-flex-wrap-wrap-reverse">
        <div class="column is-8-desktop">
            <h3 class="mb-4">The Audit</h3>
            <p>The Audit Score Card is checked against the 11 fundamental areas</p>
            <ul class="audit-list">

                <li>6S</li>
                <li>Group Activities</li>
                <li>Visual Management</li>
                <li>Planned Maintenance and Equipment Management</li>
                <li>Focused Improvement</li>

                <li>Office and Administration</li>
                <li>People Development</li>
                <li>Safety, Health and Environment</li>
                <li>Overall Leadership Effectiveness, Overall Equipment Effectiveness and Overall Process
                    Effectiveness
                </li>
                <li>Autonomous Maintenance</li>
                <li>Quality Maintenance and Product Management</li>

            </ul>
        </div>
    </div>
</div>

<div class="blue-bg solution-courses">
    <div></div>
    <?php 
        $args = array(
            'post_type' => 'manufacture-programs',
        );
        $mp_query= new WP_Query($args); 
    ?>

    <div class="solution-courses-block blue-links">
        <h3>Manufacturing and Operational Process Training Programs</h3>

        <div class="columns is-multiline mx-2">
            <?php if ($mp_query->have_posts()) : ?>
            <?php while ($mp_query->have_posts()) : $mp_query->the_post(); ?>
            <div class="column is-6-desktop is-12-tablet my-2">
                <a href="<?php echo get_permalink(); ?>">
                    <div class="course-name is-flex">
                        <i class="bi bi-caret-right-fill"></i>
                        <h5><?php the_title(); ?></h5>
                    </div>
                </a>
            </div>

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else : ?>
            <h4 class="updating" style="color: #ADCAFF;"><?php _e( 'We are currently updating our courses' ); ?></h4>
            <div class="loader-line"></div>
            <?php endif; ?>
        </div>
    </div>
</div>

<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }
</script>

<?php get_footer(); ?>