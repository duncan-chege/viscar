<?php
/* Template Name: Data Center & Cloud Solutions */

?>

<?php get_header();?>

<?php get_template_part('template-parts/header-meta'); ?>

<div class="subsolution-section">
    <div class="md:flex flex-wrap -mx-3 -mt-3 mb-3 last:-mb-3">
        <div class="grow shrink basis-0 lg:flex-none lg:w-1/2 max-md:flex-none max-md:w-full p-3">
            <?php the_content(); ?>
        </div>
        <div class="cloud-environments-img grow shrink basis-0 lg:flex-none lg:w-1/2 p-3">
        </div>
    </div>
</div>

<div class="subsolution-tabs max-lg:hidden">
    <button class="tablink active-tab" onclick="openService(event,'Data')">Data Center & Cloud Consultancy</button>
    <button class="tablink" onclick="openService(event,'Document')">Document Management Software</button>
    <button class="tablink" onclick="openService(event,'Managed')">Managed Cloud Services</button>
</div>

<div class="select-menu lg:hidden" data-service-menu>
    <div>
        <button type="button" class="select-menu-button" aria-haspopup="true" aria-controls="service-menu">
            <span>Select our services</span>
            <span class="icon">
                <i class="bi bi-chevron-down" aria-hidden="true"></i>
            </span>
        </button>
    </div>
    <div class="select-menu-list" id="service-menu" role="menu">
        <div class="select-menu-content">
            <a href="#" class="select-menu-item active-tab" onclick="dropService('Data', this); return false;">Data Center &amp;
                Cloud Consultancy</a>
            <a href="#" class="select-menu-item" onclick="dropService('Document', this); return false;">Document Management
                Software</a>
            <a href="#" class="select-menu-item" onclick="dropService('Managed', this); return false;">Managed Cloud Services</a>
        </div>
    </div>
</div>

<div id="Data" class="sub-services">
    <div class="md:flex flex-wrap">
        <div class="grow shrink basis-0 lg:flex-none lg:w-5/12 p-3">
            <h4>1. Design Consultation</h4>
            <p>Our certified engineers take a consultative approach to assess your current digital estate, design a
                comprehensive IT architecture, and identify best fit solutions that is tailored to your enterprise needs
            </p>
        </div>
        <div class="grow shrink basis-0 lg:flex-none lg:w-1/12 max-lg:hidden p-3"></div>
        <div class="grow shrink basis-0 lg:flex-none lg:w-5/12 p-3">
            <h4>2. Cloud Migration & Deployment</h4>
            <p>Our team leverages industry best practices in designing the solution and seamlessly migrating your
                workloads to Konza Cloud, or other public or private cloud with minimal business disruption.
            </p>
        </div>
    </div>
</div>

<div id="Document" class="sub-services" style="display:none">
    <div class="md:flex flex-wrap">
        <div class="grow shrink basis-0 lg:flex-none lg:w-1/2 p-3">
            <h4>Document management designed to fit your business</h4>
            <p>Viscar offers a document management service that can help businesses reduce costs, enhance efficiency,
                and improve collaboration.</p>

            <p>Viscar's service is tailored to fit each business's unique needs and streamlines the document management
                process, allowing businesses to spend less time managing paper and more time focusing on their core
                operations.</p>
        </div>
        <div class="doc-management-img grow shrink basis-0 lg:flex-none lg:w-1/2 p-3">

        </div>
    </div>
</div>

<div id="Managed" class="sub-services" style="display:none">
    <div class="md:flex flex-wrap">
        <div class="grow shrink basis-0 lg:flex-none lg:w-1/2 p-3">
            <h4> Disaster Recovery </h4>
            <p>Disasters can disrupt any business. We help businesses recover quickly with disaster recovery services.
                We work with businesses to develop a customized plan and offer data backup, testing, training, business
                continuity, and managed IT services.</p>
            <p>Our disaster recovery services help businesses resume operations quickly. Our team has experience
                recovering from complex disasters. Viscar is committed to protecting businesses' data and assets with a
                wide range of services.</p>
        </div>
        <div class="disaster-recovery-img grow shrink basis-0 lg:flex-none lg:w-1/2 p-3">
        </div>
    </div>

    <div class="md:flex flex-wrap">
        <div class="grow shrink basis-0 lg:flex-none lg:w-1/2 p-3">
            <h4> Managed Hosting Services </h4>
            <p>Expand Your Business Horizons with <b>Konza Cloud Managed Hosting Service</b></p>
            <p>Our cloud managed hosting service provides a reliable, scalable, and secure infrastructure that can be
                tailored to fit your specific needs.</p>
            <p>At our company, we understand that businesses need to constantly explore new avenues for growth. That's
                why we offer a suite of solutions designed to help you maximize efficiencies, manage risk, and expand
                your business across borders. These services are:</p>
        </div>
        <div class="managed-hosting-img grow shrink basis-0 lg:flex-none lg:w-1/2 p-3">
        </div>
    </div>

    <div class="md:flex flex-wrap">
        <div class="grow shrink basis-0 lg:flex-none lg:w-1/2 p-3">
            <h4> Managed Storage and Backup Services </h4>
            <p>We facilitate the protection of business-critical information through our Managed Storage & Backup
                services. Through a consolidated approach to storage we maintain a highly efficient and well-oiled
                system, based on industry best practices.</p>
            <p>Moreover, daily backup service is also at your disposal along with a self-service portal that eases the
                access of billing information and other detailed reports. Tailor your storage and backup solution to
                meet your requirements, leveraging:</p>
        </div>
        <div class="managed-storage-img grow shrink basis-0 lg:flex-none lg:w-1/2 p-3">
        </div>
    </div>

    <div class="md:flex flex-wrap">
        <div class="grow shrink basis-0 lg:flex-none lg:w-1/2 p-3">
            <h4> Konza Cloud Storage </h4>
            <p>Through Konza Cloud storage, we offer:</p>
            <ul>
                <li>Cloud Migration services</li>
                <li>Backup services</li>
            </ul>
            <p>Migrating to the cloud can be a complex. That's why our cloud migration services simplify your adoption
                journey. Our expert team will work with you to develop a migration strategy that's tailored to your
                business needs, ensuring that the execution is seamless and successful</p>
        </div>
        <div class="cloud-migration-img grow shrink basis-0 lg:flex-none lg:w-1/2 p-3">
        </div>
    </div>

    <div class="md:flex flex-wrap">
        <div class="grow shrink basis-0 lg:flex-none lg:w-1/2 p-3">
            <h4> Monitoring and Management </h4>
            <p>Our Managed Services offering enables round-the-clock support & proactive monitoring to ensure optimal
                performance along with ease of management through central monitoring on our end</p>
        </div>
        <div class="monitoring-management-img grow shrink basis-0 lg:flex-none lg:w-1/2 p-3">
        </div>
    </div>
</div>


<!-- <div class="cloud-services">
    <div class="md:flex flex-wrap -mx-3 -mt-3 mb-3 last:-mb-3">
        <div class="grow shrink basis-0 lg:flex-none lg:w-1/2 md:flex-none md:w-1/2 p-3">
            <h4> Document Management </h4>
            <p>Streamline Document Management to Focus on Your Business</p>
            <p>At Viscar, we understand that document management can be a time-consuming and resource-intensive task for
                any
                business. That's why we offer a tailored solution designed to fit your unique needs.</p>

            <p>Our document management service streamlines the process, allowing you to spend less time managing paper
                and
                more time focusing on your business. With our expertise, you can reduce costs, enhance efficiency, and
                improve collaboration.</p>
        </div>
        <div class="doc-management-img grow shrink basis-0 lg:flex-none lg:w-1/2 p-3"></div>
    </div>
</div>

<div class="cloud-services">
    <div class="md:flex flex-wrap -mx-3 -mt-3 mb-3 last:-mb-3">
        <div class="grow shrink basis-0 lg:flex-none lg:w-1/2 md:flex-none md:w-1/2 p-3">
            <h4> Managed Cloud Services </h4>
            <p>A Tier 3 Certified Data Centre, Konza Data Centre provides a secure and compliant government and
                enterprise cloud services.</p>

            <p>A purpose built Digital Citizen Services Model and Going Paperless government transformation agenda,
                Konza Cloud connects government bodies and offers enterprise-grade cloud.</p>
        </div>
        <div class="managed-cloud-img grow shrink basis-0 lg:flex-none lg:w-1/2 p-3"></div>
    </div>
</div>

<div class="cloud-services">
    <div class="md:flex flex-wrap -mx-3 -mt-3 mb-3 last:-mb-3">
        <div class="grow shrink basis-0 lg:flex-none lg:w-1/2 md:flex-none md:w-1/2 p-3">
            <h4> Disaster Recovery </h4>
            <p>Ensure Business Continuity with Our Disaster Recovery Services for Complex Infrastructures. Disruptions
                can strike any business, whether through human error or natural disasters. That's why disaster recovery
                is no longer a choice, but a critical aspect of ensuring business continuity.</p>

            <p>At Viscar, we provide robust disaster recovery services that are tailored to the most complex
                infrastructures. Our team of experts uses proactive planning and proven processes to deliver efficient
                solutions that meet stringent regulatory requirements. </p>

            <p>Trust us to help you safeguard your enterprise and maintain seamless operations, even in the face of
                unexpected events.</p>
        </div>
        <div class="disaster-recovery-img grow shrink basis-0 lg:flex-none lg:w-1/2 p-3"></div>
    </div>
</div>

<div class="cloud-services">
    <div class="md:flex flex-wrap -mx-3 -mt-3 mb-3 last:-mb-3">
        <div class="grow shrink basis-0 lg:flex-none lg:w-1/2 md:flex-none md:w-1/2 p-3">
            <h4> Managed Hosting Services </h4>
            <p>Expand Your Business Horizons with <b>Konza Cloud Managed Hosting Service</b></p>

            <p>Our cloud managed hosting service provides a reliable, scalable, and secure infrastructure that can be
                tailored to fit your specific needs. </p>

            <p>At our company, we understand that businesses need to constantly explore new avenues for growth. That's
                why we offer a suite of solutions designed to help you maximize efficiencies, manage risk, and expand
                your business across borders. These services are:</p>
        </div>
        <div class="managed-hosting-img grow shrink basis-0 lg:flex-none lg:w-1/2 p-3"></div>
    </div>
</div>

<div class="cloud-services">
    <div class="md:flex flex-wrap -mx-3 -mt-3 mb-3 last:-mb-3">
        <div class="grow shrink basis-0 lg:flex-none lg:w-1/2 md:flex-none md:w-1/2 p-3">
            <h4> Managed Storage and Backup Services </h4>
            <p>Be rest assured about security with our managed storage and backup services!</p>

            <p>We develop the infrastructure and expertise to deal with resource-hungry applications and sensitive
                business-related data, thereby keeping you secure in the information age. </p>

            <p>We facilitate the protection of business-critical information through our Managed Storage & Backup
                services. Through a consolidated approach to storage we maintain a highly efficient and well-oiled
                system, based on industry best practices. </p>

            <p>Moreover, daily backup service is also at your disposal along with a self-service portal that eases the
                access of billing information and other detailed reports. Tailor your storage and backup solution to
                meet your requirements, leveraging:</p>

            <ul>
                <li>Konza Cloud Storage</li>
                <li>Backup Service</li>
            </ul>
        </div>
        <div class="managed-storage-img grow shrink basis-0 lg:flex-none lg:w-1/2 p-3"></div>
    </div>
</div>

<div class="cloud-services">
    <div class="md:flex flex-wrap -mx-3 -mt-3 mb-3 last:-mb-3">
        <div class="grow shrink basis-0 lg:flex-none lg:w-1/2 md:flex-none md:w-1/2 p-3">
            <h4> Cloud Migration Services </h4>
            <p>Streamline Your Cloud Migration with Our Services</p>

            <p>Migrating to the cloud can be a complex and daunting process for any enterprise. That's why we offer
                cloud migration services designed to simplify your adoption journey. Our expert team will work with you
                to develop a migration strategy that's tailored to your business needs, ensuring that the execution is
                seamless and successful. </p>

            <p>With our help, you can accelerate your cloud journey and achieve your business objectives with
                confidence.</p>
        </div>
        <div class="cloud-migration-img grow shrink basis-0 lg:flex-none lg:w-1/2 p-3"></div>
    </div>
</div>

<div class="cloud-services">
    <div class="md:flex flex-wrap items-center -mx-3 -mt-3 mb-3 last:-mb-3">
        <div class="grow shrink basis-0 lg:flex-none lg:w-1/2 md:flex-none md:w-1/2 p-3">
            <h4> Monitoring and Management </h4>
            <p>Our Managed Services offering enables round-the-clock support & proactive monitoring to ensure optimal
                performance along with ease of management through central monitoring on our end</p>
        </div>
        <div class="monitoring-management-img grow shrink basis-0 lg:flex-none lg:w-1/2 p-3"></div>
    </div>
</div> -->


<?php get_footer();?>