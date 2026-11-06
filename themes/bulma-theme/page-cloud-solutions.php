<?php
/* Template Name: Data Center & Cloud Solutions */

?>

<?php get_header();?>

<?php get_template_part('template-parts/header-meta'); ?>

<div class="subsolution-section">
    <div class="columns is-multiline">
        <div class="column is-6-desktop is-12-mobile">
            <?php the_content(); ?>
        </div>
        <div class="column is-6-desktop cloud-environments-img">
        </div>
    </div>
</div>

<div class="subsolution-tabs is-hidden-touch">
    <button class="tablink active-tab" onclick="openService(event,'Data')">Data Center & Cloud Consultancy</button>
    <button class="tablink" onclick="openService(event,'Document')">Document Management Software</button>
    <button class="tablink" onclick="openService(event,'Managed')">Managed Cloud Services</button>
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
            <a href="#" class="dropdown-item active-tab" onclick="dropService('Data', this); return false;">Data Center &amp;
                Cloud Consultancy</a>
            <a href="#" class="dropdown-item" onclick="dropService('Document', this); return false;">Document Management
                Software</a>
            <a href="#" class="dropdown-item" onclick="dropService('Managed', this); return false;">Managed Cloud Services</a>
        </div>
    </div>
</div>

<div id="Data" class="sub-services">
    <div class="columns is-multiline">
        <div class="column is-5-desktop">
            <h4>1. Design Consultation</h4>
            <p>Our certified engineers take a consultative approach to assess your current digital estate, design a
                comprehensive IT architecture, and identify best fit solutions that is tailored to your enterprise needs
            </p>
        </div>
        <div class="column is-1-desktop is-hidden-touch"></div>
        <div class="column is-5-desktop">
            <h4>2. Cloud Migration & Deployment</h4>
            <p>Our team leverages industry best practices in designing the solution and seamlessly migrating your
                workloads to Konza Cloud, or other public or private cloud with minimal business disruption.
            </p>
        </div>
    </div>
</div>

<div id="Document" class="sub-services" style="display:none">
    <div class="columns is-multiline">
        <div class="column is-6-desktop">
            <h4>Document management designed to fit your business</h4>
            <p>Viscar offers a document management service that can help businesses reduce costs, enhance efficiency,
                and improve collaboration.</p>

            <p>Viscar's service is tailored to fit each business's unique needs and streamlines the document management
                process, allowing businesses to spend less time managing paper and more time focusing on their core
                operations.</p>
        </div>
        <div class="column is-6-desktop doc-management-img">

        </div>
    </div>
</div>

<div id="Managed" class="sub-services" style="display:none">
    <div class="columns is-multiline">
        <div class="column is-6-desktop">
            <h4> Disaster Recovery </h4>
            <p>Disasters can disrupt any business. We help businesses recover quickly with disaster recovery services.
                We work with businesses to develop a customized plan and offer data backup, testing, training, business
                continuity, and managed IT services.</p>
            <p>Our disaster recovery services help businesses resume operations quickly. Our team has experience
                recovering from complex disasters. Viscar is committed to protecting businesses' data and assets with a
                wide range of services.</p>
        </div>
        <div class="column is-6-desktop disaster-recovery-img">
        </div>
    </div>

    <div class="columns is-multiline">
        <div class="column is-6-desktop">
            <h4> Managed Hosting Services </h4>
            <p>Expand Your Business Horizons with <b>Konza Cloud Managed Hosting Service</b></p>
            <p>Our cloud managed hosting service provides a reliable, scalable, and secure infrastructure that can be
                tailored to fit your specific needs.</p>
            <p>At our company, we understand that businesses need to constantly explore new avenues for growth. That's
                why we offer a suite of solutions designed to help you maximize efficiencies, manage risk, and expand
                your business across borders. These services are:</p>
        </div>
        <div class="column is-6-desktop managed-hosting-img">
        </div>
    </div>

    <div class="columns is-multiline">
        <div class="column is-6-desktop">
            <h4> Managed Storage and Backup Services </h4>
            <p>We facilitate the protection of business-critical information through our Managed Storage & Backup
                services. Through a consolidated approach to storage we maintain a highly efficient and well-oiled
                system, based on industry best practices.</p>
            <p>Moreover, daily backup service is also at your disposal along with a self-service portal that eases the
                access of billing information and other detailed reports. Tailor your storage and backup solution to
                meet your requirements, leveraging:</p>
        </div>
        <div class="column is-6-desktop managed-storage-img">
        </div>
    </div>

    <div class="columns is-multiline">
        <div class="column is-6-desktop">
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
        <div class="column is-6-desktop cloud-migration-img">
        </div>
    </div>

    <div class="columns is-multiline">
        <div class="column is-6-desktop">
            <h4> Monitoring and Management </h4>
            <p>Our Managed Services offering enables round-the-clock support & proactive monitoring to ensure optimal
                performance along with ease of management through central monitoring on our end</p>
        </div>
        <div class="column is-6-desktop monitoring-management-img">
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



<!-- <div class="cloud-services">
    <div class="columns is-multiline">
        <div class="column is-6-desktop is-6-tablet">
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
        <div class="column is-6-desktop doc-management-img"></div>
    </div>
</div>

<div class="cloud-services">
    <div class="columns is-multiline">
        <div class="column is-6-desktop is-6-tablet">
            <h4> Managed Cloud Services </h4>
            <p>A Tier 3 Certified Data Centre, Konza Data Centre provides a secure and compliant government and
                enterprise cloud services.</p>

            <p>A purpose built Digital Citizen Services Model and Going Paperless government transformation agenda,
                Konza Cloud connects government bodies and offers enterprise-grade cloud.</p>
        </div>
        <div class="column is-6-desktop managed-cloud-img"></div>
    </div>
</div>

<div class="cloud-services">
    <div class="columns is-multiline">
        <div class="column is-6-desktop is-6-tablet">
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
        <div class="column is-6-desktop disaster-recovery-img"></div>
    </div>
</div>

<div class="cloud-services">
    <div class="columns is-multiline">
        <div class="column is-6-desktop is-6-tablet">
            <h4> Managed Hosting Services </h4>
            <p>Expand Your Business Horizons with <b>Konza Cloud Managed Hosting Service</b></p>

            <p>Our cloud managed hosting service provides a reliable, scalable, and secure infrastructure that can be
                tailored to fit your specific needs. </p>

            <p>At our company, we understand that businesses need to constantly explore new avenues for growth. That's
                why we offer a suite of solutions designed to help you maximize efficiencies, manage risk, and expand
                your business across borders. These services are:</p>
        </div>
        <div class="column is-6-desktop managed-hosting-img"></div>
    </div>
</div>

<div class="cloud-services">
    <div class="columns is-multiline">
        <div class="column is-6-desktop is-6-tablet">
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
        <div class="column is-6-desktop managed-storage-img"></div>
    </div>
</div>

<div class="cloud-services">
    <div class="columns is-multiline">
        <div class="column is-6-desktop is-6-tablet">
            <h4> Cloud Migration Services </h4>
            <p>Streamline Your Cloud Migration with Our Services</p>

            <p>Migrating to the cloud can be a complex and daunting process for any enterprise. That's why we offer
                cloud migration services designed to simplify your adoption journey. Our expert team will work with you
                to develop a migration strategy that's tailored to your business needs, ensuring that the execution is
                seamless and successful. </p>

            <p>With our help, you can accelerate your cloud journey and achieve your business objectives with
                confidence.</p>
        </div>
        <div class="column is-6-desktop cloud-migration-img"></div>
    </div>
</div>

<div class="cloud-services">
    <div class="columns is-multiline is-vcentered">
        <div class="column is-6-desktop is-6-tablet">
            <h4> Monitoring and Management </h4>
            <p>Our Managed Services offering enables round-the-clock support & proactive monitoring to ensure optimal
                performance along with ease of management through central monitoring on our end</p>
        </div>
        <div class="column is-6-desktop monitoring-management-img"></div>
    </div>
</div> -->


<?php get_footer();?>