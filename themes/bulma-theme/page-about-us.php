<?php

/* Template Name: About Page

*/

?>



<?php get_header(); ?>



<div class="page-hero-section">

    <h1> <?php the_title(); ?> </h1>

    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/header-vector.svg">

</div>



<div class="who-section">

    <div class="flex flex-wrap-reverse -mx-3 -mt-3 mb-3 last:-mb-3">

        <div class="grow shrink basis-0 lg:flex-none lg:w-1/2 max-md:flex-none max-md:w-full p-3">
            <h2> Our Origins </h2>
            <?php the_content(); ?>
        </div>

        <div class="origin-img grow shrink basis-0 lg:flex-none lg:w-1/2 p-3">

        </div>

    </div>

</div>



<div class="vision-mission">

    <img class="triangle-vector" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/triangle-vector.svg">

    <div class="md:flex flex-wrap justify-center -mx-3 -mt-3 mb-3 last:-mb-3">

        <div class="grow shrink basis-0 lg:flex-none lg:w-1/4 p-3">

            <div class="mission">

                <h2 class="text-center">Mission</h2>

                <p>Co-creating engineering and emerging technology capabilities for sustainable industrial growth.</p>

            </div>

        </div>

        <div class="grow shrink basis-0 lg:flex-none lg:w-1/4 p-3">

            <div class="vision">

                <h2 class="text-center">Vision</h2>

                <p>To be Africa's premier catalyst for excellence in engineering and emerging technology.</p>

            </div>

        </div>

        <div class="grow shrink basis-0 lg:flex-none lg:w-1/4 p-3">

            <div class="brand-promise">

                <h2 class="text-center">Goal</h2>

                <p>A mature organization powered by autonomous business units.</p>

            </div>

        </div>

    </div>

</div>



<div class="image-breaks">

    <div class="md:flex flex-wrap justify-center -mx-3 -mt-3 mb-3 last:-mb-3">

        <div class="grow shrink basis-0 lg:flex-none lg:w-1/4 p-3">

            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/image-break.jpg">

        </div>

        <div class="grow shrink basis-0 lg:flex-none lg:w-1/4 max-md:hidden p-3">

            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/image-break-2.jpg">

        </div>

        <div class="grow shrink basis-0 lg:flex-none lg:w-1/4 max-md:hidden p-3">

            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/image-break-3.png">

        </div>

        <div class="grow shrink basis-0 lg:flex-none lg:w-1/4 max-md:hidden p-3">

            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/image-break-4.png">

        </div>

    </div>

</div>



<div class="milestones">

    <h2> Our Milestones </h2>

    <div class="md:flex justify-center -mx-3 -mt-3 mb-3 last:-mb-3">

        <div class="grow shrink basis-0 lg:flex-none lg:w-7/12 p-3">

            <div class="tab-nav tab-nav-boxed my-0" data-tabs>

                <ul class="justify-between">

                    <li class="is-current" data-target="first-year"><a>2008</a>



                    </li>

                    <li data-target="second-year"><a>2010</a></li>

                    <li data-target="third-year"><a>2012</a></li>

                    <li data-target="forth-year"><a>2016</a></li>

                    <li data-target="fifth-year"><a>2018</a></li>

                </ul>

            </div>

            <div id="tab-content">

                <div id="first-year">

                    <p>Viscar Industrial Capacity Ltd started as a training firm with offices shared on Imani House

                        along

                        Parliament Road, Nairobi. It aimed to transform fresh graduate Engineers with its brainchild

                        solution- the Engineering Graduate Development Programme (EGDP).</p>



                    <p>This solution helped bridge the gap between Engineering and ICT academic qualifications and

                        industry

                        skills demand through hands-on knowledge and skills transfer.</p>

                </div>



                <div id="second-year" class="hidden">

                    <p> We solved a gap in Engineering technology by introducing corporate training. We also resourced

                        for companies requiring technical resources and products. Through this, we successfully deployed

                        our engineers through Ericsson Kenya Ltd to roll out the Safaricom Digital city project </p>



                    <p> Resourcing as a product broadly grew. We were then able to provide Safaricom with engineers

                        working at its Network Operation Centre (NOC) </p>

                </div>

                <div id="third-year" class="hidden">

                    <p>Viscar moved from the city centre to Ngong’ road to sustain its rapid growth and to fulfil the

                        ever-changing clients’ training needs. Through this, we set up a state of art training room with

                        training facilities and equipment.</p>

                </div>

                <div id="forth-year" class="hidden">

                    <p>Viscar launched a 4-year strategic plan with a renewed vision of becoming the leading African

                        firm providing a needed capacity enhancement in engineering technology globally. We added a

                        company

                        tagline of “Enhancing Performance and Productivity” as a brand promise to our esteemed clients

                        and the

                        market as a whole.</p>

                </div>

                <div id="fifth-year" class="hidden">

                    <p>Viscar was recognized and awarded the TOP 100 Mid-sized company prize. We partnered with the

                        Engineers Board of Kenya (EBK) towards offering continuous professional Development (CPD)

                        training for Engineers.

                        We also partnered with the National Construction Authority towards offering CPD training for

                        technical

                        resources in the Building and Construction industry.</p>



                    <p>In addition to that, our number of clients officially hit 100 </p>

                </div>

            </div>

        </div>

    </div>

</div>



<div class="choose-us">

    <img class="triangle-vector" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/triangle-vector.svg">

    <h2 class="text-center"> Why Choose Viscar </h2>

    <div class="md:flex flex-wrap -mx-3 -mt-3 mb-3 last:-mb-3">

        <div class="grow shrink basis-0 lg:flex-none lg:w-1/4 p-3">

            <div class="pill blue">

                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/blue-cog.svg">

                <h5 class="text-center">Deep Technical Specialization</h5>

            </div>

        </div>

        <div class="grow shrink basis-0 lg:flex-none lg:w-1/4 p-3">

            <div class="pill red">

                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/red-cog.svg">

                <h5 class="text-center">Integrated, End-to-End Solutions</h5>

            </div>

        </div>

        <div class="grow shrink basis-0 lg:flex-none lg:w-1/4 p-3">

            <div class="pill blue">

                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/blue-cog.svg">

                <h5 class="text-center">Customized, Needs-Driven Approach</h5>

            </div>

        </div>

        <div class="grow shrink basis-0 lg:flex-none lg:w-1/4 p-3">

            <div class="pill red">

                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/red-cog.svg">

                <h5 class="text-center">One Partner, Interrelated Services</h5>

            </div>

        </div>



        <div class="my-6"></div>



        <div class="grow shrink basis-0 lg:flex-none lg:w-1/4 p-3">

            <div class="pill blue">

                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/blue-cog.svg">

                <h5 class="text-center">Competent Consultants & Partners</h5>

            </div>

        </div>

        <div class="grow shrink basis-0 lg:flex-none lg:w-1/4 p-3">

            <div class="pill red">

                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/red-cog.svg">

                <h5 class="text-center">Accreditation & Compliance Credibility</h5>

            </div>

        </div>

        <div class="grow shrink basis-0 lg:flex-none lg:w-1/4 md:flex-none md:w-1/3 p-3">

            <div class="pill blue">

                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/blue-cog.svg">

                <h5 class="text-center">Proven Track Record & Regional Reach</h5>

            </div>

        </div>

        <div class="grow shrink basis-0 lg:flex-none lg:w-1/4 md:flex-none md:w-1/3 p-3">

            <div class="pill red">

                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/red-cog.svg">

                <h5 class="text-center">Quality in Service Delivery</h5>

            </div>

        </div>

    </div>

</div>



<div class="testimonials">

    <h2> Happy Customers </h2>

    <div class="feedback splide" data-splide='{"type":"loop","arrows":false,"pagination":false,"drag":"free","focus":"center","perPage":3,"autoScroll":{"speed":0.5}}' data-autoscroll>

        <div class="splide__track" id="splide-track">

            <div class="splide__list">

                <div class="splide__slide">

                    <p>Viscar EGDP training was an eye opener and it

                        helped me bridge the gap between the engineering

                        in class setup and the real life skills employers require </p>

                    <p class="font-bold my-0"> Maureen Mureithi </p>

                    <p class="role">RAN Optimization Engineer, Safaricom</p>

                </div>

                <div class="splide__slide">

                    <p>Viscar Training programs are great in content and skills development, I personally gained an

                        enormous amount of industry-related skills and new technologies </p>

                    <p class="font-bold my-0"> Vincent Kipngetich </p>

                    <p class="role">Engineer, Ericson</p>

                </div>

                <div class="splide__slide">

                    <p>I am very pleased with Viscar's work for the great job they did. They demonstrated a high level

                        of professionalism throughout the project period. They surpassed my expectations by not only

                        resolving the issue with our Matrix packaging machine, but also doubling the capacity of the

                        machine</p>

                    <p class="font-bold my-0"> Mrs Lily </p>

                    <p class="role">Production Manager, Tropikal Brands</p>

                </div>

                <div class="splide__slide">

                    <p>Viscar EGDP training shaped my telecommunications and ICT skills. It has bridged the gap of the

                        knowledge acquired in the university to skills required by the industry. This led to my

                        understanding of contractors, Internet service providers to regulators within the telecom

                        industry</p>

                    <p class="font-bold my-0"> Bernard Cheruiyot </p>

                    <p class="role">IT Support Engineer, Communications Authority of Kenya (CAK)</p>

                </div>

            </div>

        </div>

    </div>

</div>

<?php get_footer(); ?>