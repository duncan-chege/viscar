<?php
/* Template Name: Telecommunication Solutions */

?>

<?php get_header();?>

<?php get_template_part('template-parts/header-meta'); ?>

<div class="subsolution-section">
    <div class="columns is-multiline">
        <div class="column is-6-desktop is-12-mobile">
            <?php the_content(); ?>
        </div>
        <div class="column is-6-desktop is-12-mobile broadband-img">
        </div>
    </div>
</div>

<div class="subsolution-tabs is-hidden-touch">
    <button class="tablink active-tab" onclick="openService(event,'Consulting')">Telecoms Consulting Services</button>
    <button class="tablink" onclick="openService(event,'Managed')">Telecoms Managed Services</button>
    <button class="tablink" onclick="openService(event,'Training')">Telecoms Training Programs</button>
</div>

<div class="dropdown is-hoverable is-hidden-desktop">
    <div class="dropdown-trigger">
        <button class="button" aria-haspopup="true" aria-controls="dropdown-menu">
            <span>Select our services</span>
            <span class="icon is-small">
                <i class="bi bi-chevron-down" aria-hidden="true"></i>
            </span>
        </button>
    </div>
    <div class="dropdown-menu" id="dropdown-menu" role="menu">
        <div class="dropdown-content">
            <a href="#" class="dropdown-item active-tab"
                onclick="dropService('Consulting', this); return false;">Consulting Center
                &amp;
                Cloud Consultancy</a>
            <a href="#" class="dropdown-item" onclick="dropService('Managed', this); return false;">Managed Management
                Software</a>
            <a href="#" class="dropdown-item" onclick="dropService('Training', this); return false;">Managed Cloud
                Services</a>
        </div>
    </div>
</div>

<div id="Consulting" class="sub-services">
    <div class="columns is-multiline mb-6">
        <div class="column is-7-desktop is-offset-3-desktop">
            <h4 class="has-text-centered">Elevate your  Business Growth and Success Through our Telecommunications
                Consulting Service</h4>
        </div>
    </div>

    <div class="columns is-multiline">
        <div class="column is-6-desktop">
            <p>We help telecom companies including Mobile Network Operators, ISPs, Utility Telcos and Regulators
                navigate the diverse array of technology and industry trends.</p>
            <p>These trends are: Broadband Networks, Mobile Networks and 5G, Wireless Radio Networks and IoT Networks.
            </p>
            <p>Our range of services include-:</p>
            <ul>
                <li>Utility Fiber Commercialization Consulting Services</li>
                <li>Telecoms and ISP Business Consulting Services</li>
                <li>Research and Consulting Services on Regulations and Access & Impact Studies</li>
                <li>Project Management</li>
            </ul>
            <a href="#">Download Product Brochure <span><i class="bi bi-download pl-1"></i></span></a>
        </div>
        <div class="column is-6-desktop fiber-cable-img">
        </div>
    </div>
</div>

<div id="Managed" class="sub-services" style="display:none">
    <div class="columns is-multiline mb-6">
        <div class="column is-7-desktop is-offset-3-desktop">
            <h4 class="has-text-centered">Our Telecom managed services and Outsourcing Help Operators to control
                operational costs and complexity in their IT and network environments</h4>
        </div>
    </div>

    <div class="columns is-multiline">
        <div class="column is-6-desktop">
            <p>At Viscar, we design, build, deploy, optimize, manage and support networked communications and IT systems
                and infrastructure for our customers, allowing them to focus on driving business value while we take
                care of the day-to-day operations and management of their systems.</p>
            <p>In today’s rapidly changing telecommunications marketplace, service providers face a number of unique
                challenges:</p>
            <p>Our range of services include-:</p>
            <ul>
                <li>Competition at a Global Stage</li>
                <li>Relentless market pressure for business revenue growth</li>
                <li>Technology Complexity due to convergence</li>
                <li>New and Emerging Technology is developing at a fast pace</li>
            </ul>
            <a href="#">Download Product Brochure <span><i class="bi bi-download pl-1"></i></span></a>
        </div>
        <div class="column is-6-desktop telecoms-managed-img">
        </div>
        <div class="column is-6-desktop is-12-tablet is-12-mobile">
            <p>Our Telecom Managed Services can be offered in two approaches, which are carefully discussed and selected
                based on each customers unique needs</p>
            <ul>
                <li>
                    <b>Managed Service</b> - A comprehensive relationship that includes business and network consulting,
                    network planning and design, implementation and integration, and on-going network
                    maintenance and management delivered as a service
                </li>
                <li><b>Staff Augmentation</b> - We provide specific skilled resources to supplement the customer's work
                    force on a project basis or when needed. The service enables the customer to achieve maximum
                    efficiency, typically at a lower cost whilst allowing you to focus on strategic business operations.
                </li>
            </ul>
        </div>
    </div>
</div>

<div id="Training" class="sub-services" style="display:none">
    <div class="columns is-multiline mb-6">
        <div class="column is-7-desktop is-offset-3-desktop">
            <h4 class="has-text-centered">We provide flexible training solutions for individuals, teams, and enterprises
                in the Telecoms industry</h4>
        </div>
    </div>

    <div class="columns is-multiline">
        <div class="column is-6-desktop">
            <p>We have trained more than 10,000+ professionals and 50+ businesses. Our technology training is born of
                our founding mission to Empower organizations and individuals for optimal performance and productivity
                through value based training.</p>
            <p>Our Telecoms training portfolio continues to evolve to help address new and emerging skills gaps telecoms
                & tech businesses are facing. Viscar Industrial Capacity Limited offers a range of educational training
                programs delivered in the format that is most convenient to you, including on-demand, live virtual
                classrooms or in-company bespoke training solutions.</p>
            <p>Our range of services include-:</p>
            <ul>
                <li>5G Training Course</li>
                <li>Fiber Training Programs</li>
                <li>Work at Height Training Courses</li>
                <li>Telecoms EGDP (Graduate Training Program)</li>
            </ul>
            <a href="#">Download Product Brochure <span><i class="bi bi-download pl-1"></i></span></a>
        </div>
        <div class="column is-6-desktop telecoms-training-img">
        </div>
    </div>
</div>

<?php 
    $args = array(
        'post_type' => 'telecom-courses',
    );
    $iot_query= new WP_Query($args); 
?>

<div class="red-bg solution-courses mb-0">
    <div></div>

    <div class="solution-courses-block red-links">
        <h2>Courses Under This Solution</h2>
        <div class="consultancy-bloc">
            <?php if ($iot_query->have_posts()) : ?>
            <?php while ($iot_query->have_posts()) : $iot_query->the_post(); ?>
            <div>
                <a href="<?php echo get_permalink(); ?>">
                    <div class="course-name is-flex">
                        <i class="bi bi-caret-right-fill" style="padding-right: 0.5em; font-size: 1.2rem;"></i>
                        <h5><?php the_title(); ?></h5>
                    </div>
                </a>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else : ?>
            <h4 class="updating" style="color: #FDF4D9;"><?php _e( 'We are currently updating our courses' ); ?></h4>
            <div class="loader-line"></div>
            <?php endif; ?>
        </div>
    </div>
</div>

<script>
    function openService(evt, servName) {
        var i, x, tablinks;
        x = document.getElementsByClassName("sub-services");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < x.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active-tab", "");
        }
        document.getElementById(servName).style.display = "block";
        evt.currentTarget.className += " active-tab";
    }

    function dropService(servName, menuItem) {
        var dropdownItems = document.getElementsByClassName("dropdown-item");
        for (var i = 0; i < dropdownItems.length; i++) {
            var item = dropdownItems[i];
            if (item.getAttribute("onclick") === `dropService('${servName}', this); return false;`) {
                item.classList.add("is-active");
                var button = menuItem.closest(".dropdown").querySelector(".button span");
                button.textContent = item.textContent;
            } else {
                item.classList.remove("is-active");
            }
        }
        var subServices = document.getElementsByClassName("sub-services");
        for (var j = 0; j < subServices.length; j++) {
            var service = subServices[j];
            if (service.id === servName) {
                service.style.display = "block";
            } else {
                service.style.display = "none";
            }
        }
    }
</script>


<?php get_footer();?>