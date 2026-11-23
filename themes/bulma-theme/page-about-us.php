<?php
/* Template Name: About Page */

get_header();

$theme_img = esc_url(get_template_directory_uri()) . '/assets/img/';

// Shared styles.
$section_title = 'text-[2.25rem] font-extrabold leading-[1.2] text-hp-red max-md:text-[1.75rem]';
// Body copy. Applied to a wrapper so it also styles paragraphs coming from the
// WordPress editor (the_content), which can't carry classes of their own.
// Paragraph spacing is added per use (the CEO message is slightly tighter).
$copy = '[&_p]:m-0 [&_p]:text-base [&_p]:font-medium [&_p]:leading-[1.17] [&_p]:text-[#282a67] [&_strong]:font-bold';

$statements = array(
    array('title' => 'Mission', 'text' => 'Co-creating engineering and emerging technology capabilities for sustainable industrial growth.'),
    array('title' => 'Vision', 'text' => 'To be Africa’s premier catalyst for excellence in engineering and emerging technology.'),
    array('title' => 'Goal', 'text' => 'To be a mature organisation powered by autonomous business units.'),
);

$gallery = array('about-gallery-1.jpg', 'about-gallery-2.jpg', 'about-gallery-3.jpg', 'about-gallery-4.jpg');

// Journey timeline: one entry per year, each a list of paragraphs
// (HTML such as <strong> is allowed). The first year is shown on load.
$journey = array(
    '2008' => array(
        'Viscar Industrial Capacity Ltd. began as a training firm operating from shared office space at Imani House along Parliament Road, Nairobi. Its mission was to equip fresh engineering graduates with the practical skills needed to transition from academia into industry through its flagship initiative, the <strong>Engineering Graduate Development Programme (EGDP)</strong>.',
        'The programme was designed to bridge the gap between academic qualifications in engineering and ICT and the practical skills demanded by industry through hands-on training, practical experience and knowledge transfer.',
    ),
    '2010' => array(
        'Viscar expanded its role in the engineering and technology sector by introducing corporate training to address industry skills gaps. We also began providing technical personnel and products to organisations seeking specialised engineering resources.',
        'Through this growing capability, Viscar deployed engineers through Ericsson Kenya Ltd. to support the rollout of the Safaricom Digital City project. As demand for technical talent grew, technical resourcing became an increasingly important part of our business, leading to the deployment of engineers to support Safaricom’s Network Operations Centre (NOC).',
    ),
    '2012' => array(
        'To support its rapid growth and respond to the evolving training needs of its clients, Viscar relocated from Nairobi’s city centre to Ngong’ Road. The move enabled the company to establish a state-of-the-art training room equipped with dedicated facilities and equipment, creating a more practical, hands-on learning environment for engineering and technology professionals.',
    ),
    '2016' => array(
        'Viscar introduced a four-year strategic plan, setting a renewed vision to become a leading African firm in engineering and technology capacity development, with a global reach. As part of this strategic direction, we introduced the tagline “Enhancing Performance and Productivity” to communicate our brand promise: helping clients strengthen their capabilities, improve performance and achieve greater productivity.',
    ),
    '2018' => array(
        'Viscar was recognised as one of the Top 100 Mid-Sized Companies, marking a significant milestone in its growth. We also strengthened our commitment to professional development through partnerships with the Engineers Board of Kenya (EBK), delivering Continuing Professional Development (CPD) training for engineers, and the National Construction Authority (NCA), supporting CPD training for technical professionals in the building and construction industry.',
        'During this period, Viscar’s client base reached a significant milestone, officially growing to 100 clients and reflecting the expanding trust in our engineering and technology capabilities.',
    ),
    '2023' => array(
        'Viscar launched a two-year strategic plan covering 2023–2025, marking a new phase in the company’s growth and organizational development. The strategy focused on strengthening our engineering and technology capabilities, enhancing service delivery, deepening client relationships and expanding our market presence. It also provided a framework for improving operational efficiency, building internal capacity and positioning Viscar to respond to the evolving needs of the industries we serve.',
        'Through this strategic period, Viscar continued laying the foundation for sustainable growth, reinforcing its commitment to developing engineering talent and delivering value to clients across the region.',
    ),
    '2026' => array(
        'In 2026, Viscar launched its 2026–2030 Strategic Plan, establishing a roadmap towards becoming a mature organisation powered by autonomous business units. The strategy marked a new chapter in Viscar’s growth, focusing on strengthening organisational capacity, enhancing operational efficiency, expanding market presence and empowering each business unit to deliver value with greater accountability and independence.',
        'As part of this renewed strategic direction, Viscar refreshed its corporate identity by updating its Vision, Mission and Slogan to reflect its long-term ambitions and commitment to Africa’s engineering and technology development.',
    ),
);

// Why Viscar: left-column items are blue, right-column items red.
$reasons = array(
    array('title' => 'Deep Technical Specialization', 'text' => 'Our solutions are built for technology-leaning organizations and technical people. We champion the uptake of emerging engineering and digital technologies to help clients build more innovative, resilient and sustainable operations.'),
    array('title' => 'Integrated, End-to-End Solutions', 'text' => 'Our expertise across engineering and digitisation lets us take a client from field-level controls through to enterprise digital integration — supporting full digital transformation, not just isolated upgrades.'),
    array('title' => 'Customized, Needs-Driven Approach', 'text' => 'Every engagement starts with a comprehensive analysis of the client’s industry, business needs and challenges. Our BTP methodology (Business – Technology – People) and 3-phase consultancy approach (Strategic Blueprint &amp; Literature Review → Discovery &amp; Design → Implementation, Reporting &amp; Recommendation) guarantee execution that fits the client, not a generic template.'),
    array('title' => 'One Partner, Interrelated Services', 'text' => 'Training, Consultancy, Technical Support, System Integration, Talent Development and Managed Services are designed to reinforce each other — so a client can start with training and grow into a long-term managed services relationship without switching providers.'),
    array('title' => 'Proven Track Record &amp; Regional Reach', 'text' => 'Over 100 companies served, 10,000+ people trained, 50+ consultancy assignments delivered, and a footprint spanning nine African countries — a depth of experience few regional competitors can match.'),
    array('title' => 'Accreditation &amp; Compliance Credibility', 'text' => 'We hold local and international accreditations — including ISO 9001:2015, NITA, DOSHS, PECB, and recognition from regulators such as EPRA, EBK, NCA and CA — giving clients confidence in the quality and compliance of every engagement.'),
);
?>

<div class="page-hero-section">
    <h1> <?php the_title(); ?> </h1>
    <img src="<?php echo $theme_img; ?>header-vector.svg" alt="">
</div>

<section class="mx-auto grid max-w-360 grid-cols-[minmax(0,615px)_minmax(0,674px)] items-start justify-between gap-12 pt-21 pr-12 pb-36 pl-11.5 max-lg:grid-cols-1 max-lg:px-8 max-lg:pt-12 max-lg:pb-24">
    <div>
        <h2 class="<?php echo $section_title; ?>">Our Origins</h2>
        <div class="mt-10 max-md:mt-6 [&_p+p]:mt-[1.35rem] <?php echo $copy; ?>"><?php the_content(); ?></div>
    </div>
    <img class="mt-13 aspect-674/449 w-full object-cover max-lg:mt-0" src="<?php echo $theme_img; ?>about-team.jpg" alt="The Viscar team">
</section>

<?php /* .ab-notch-top (input.css) cuts the V-shaped top edge. */ ?>
<section class="ab-notch-top relative isolate px-8 pt-44 pb-34 text-center text-white max-md:px-6 max-md:pt-24 max-md:pb-16">
    <img class="fixed inset-0 -z-20 h-full w-full object-cover" src="<?php echo $theme_img; ?>about-mission-bg.jpg" alt="">
    <span class="absolute inset-0 -z-10 bg-[linear-gradient(90deg,rgba(14,76,187,0.85),rgba(41,52,150,0.9))]" aria-hidden="true"></span>
    <div>
        <h2 class="text-[1.875rem] font-extrabold leading-[1.2] text-cream">Slogan</h2>
        <p class="mt-6 mb-0 text-base font-medium leading-[1.17]">Engineering Africa’s Future.</p>
    </div>
    <div class="mx-auto mt-26 grid max-w-335 grid-cols-3 gap-12 max-md:mt-12 max-md:grid-cols-1 max-md:gap-10">
        <?php foreach ($statements as $statement) : ?>
            <div>
                <h2 class="text-[1.875rem] font-extrabold leading-[1.2] text-cream"><?php echo esc_html($statement['title']); ?></h2>
                <p class="mx-auto mt-6 mb-0 max-w-78 text-base font-medium leading-[1.17]"><?php echo esc_html($statement['text']); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<div class="mt-18 grid grid-cols-4 gap-[1.7rem] max-md:mt-8 max-md:grid-cols-2 max-md:gap-3">
    <?php foreach ($gallery as $image) : ?>
        <img class="aspect-340/270 w-full object-cover" src="<?php echo $theme_img . $image; ?>" alt="" loading="lazy">
    <?php endforeach; ?>
</div>

<section class="mx-auto max-w-360 pt-34 pr-12 pl-11 max-md:px-8 max-md:pt-18">
    <h2 class="text-center <?php echo $section_title; ?>">A Message from our CEO</h2>
    <div class="mt-20 grid grid-cols-[minmax(0,650px)_minmax(0,644px)] items-start justify-between gap-13 max-lg:mt-10 max-lg:grid-cols-1 max-lg:gap-8">
        <img class="aspect-650/433 w-full object-cover" src="<?php echo $theme_img; ?>about-ceo.jpg" alt="Eng. David Mulongo, Chief Executive Officer" loading="lazy">
        <div class="[&_p+p]:mt-[1.3rem] <?php echo $copy; ?>">
            <p>Since our incorporation in 2008, Viscar has been driven by a simple conviction: that Africa's industrial growth depends on Africa's own engineering capacity. What started as a single programme — the Engineering Graduate Development Program — has grown, deliberately and steadily, into a multi-disciplinary engineering and technology partner trusted by over 100 organisations across the region.</p>
            <p>Our journey mirrors the journey of the industries we serve. As our clients moved from manual operations to automation, from siloed systems to digital transformation, and from reactive maintenance to safety-first, data-driven operations, Viscar moved with them — expanding from training into consultancy, and from consultancy into full engineering project delivery and managed technical support.</p>
            <p>Today, we operate through four focused business units — Engineering &amp; Emerging Technologies, ICT &amp; Digital Transformation, Safety in Engineering, and Engineering Talent &amp; Managed Services — each empowered to serve our clients with depth and speed. This is a business built by engineers, for engineers and the organisations that depend on them, and we remain committed to co-creating solutions that stand the test of time.</p>
            <p>We invite you to explore what we do, who we serve, and how we can partner with you on your next engineering or technology challenge.</p>
            <p class="font-bold!">Eng. David Mulongo<br>Chief Executive Officer<br>Viscar Industrial Capacity Limited</p>
        </div>
    </div>
</section>

<section class="mx-auto max-w-360 pt-35 pr-4 pl-11.5 max-md:px-8 max-md:pt-18">
    <h2 class="text-center <?php echo $section_title; ?>">Our Journey</h2>
    <?php /* The tab script in main.js toggles .is-current on the <li> and .hidden on the panels. */ ?>
    <ol class="mt-18 flex list-none items-center justify-between gap-6 max-lg:mt-10 max-lg:flex-wrap max-lg:justify-start max-lg:gap-x-5 max-lg:gap-y-2" data-tabs>
        <?php $first = true;
        foreach ($journey as $year => $paragraphs) : ?>
            <li class="group flex items-center gap-6 <?php echo $first ? 'is-current flex-none' : "flex-auto before:mr-auto before:h-0.5 before:max-w-20 before:flex-[1_1_5rem] before:bg-[#ee7274] before:content-[''] max-lg:flex-none max-lg:before:hidden"; ?>" data-target="year-<?php echo esc_attr($year); ?>">
                <button type="button" class="cursor-pointer border-0 bg-transparent p-0 font-sans text-[2.1rem] font-extrabold leading-[1.2] text-[#fca6a9] transition-colors duration-300 hover:text-hp-red group-[.is-current]:text-hp-red max-md:text-[1.5rem]"><?php echo esc_html($year); ?></button>
            </li>
        <?php $first = false;
        endforeach; ?>
    </ol>
    <div id="tab-content" class="mt-11 min-h-60 max-w-160 max-md:mt-7 max-md:min-h-0 [&_p+p]:mt-[1.35rem] <?php echo $copy; ?>">
        <?php $first = true;
        foreach ($journey as $year => $paragraphs) : ?>
            <div id="year-<?php echo esc_attr($year); ?>"<?php echo $first ? '' : ' class="hidden"'; ?>>
                <?php foreach ($paragraphs as $paragraph) : ?>
                    <p><?php echo wp_kses_post($paragraph); ?></p>
                <?php endforeach; ?>
            </div>
        <?php $first = false;
        endforeach; ?>
    </div>
</section>

<section class="mx-auto max-w-360 pt-18 pr-19 pb-21 pl-11.5 max-md:px-8 max-md:pb-16">
    <h2 class="<?php echo $section_title; ?>">Why Viscar</h2>
    <p class="mt-10 mb-0 text-base font-medium leading-[1.17] text-[#282a67]">In a market with many training providers, systems integrators and consultancies, Viscar's position is distinct: we are one of very few regional partners able to take a client from a skills gap, through a technology or process problem, to a fully engineered and commissioned solution — under one roof.</p>
    <div class="mt-15 grid max-w-329.5 grid-cols-[641px_minmax(0,1fr)] max-[1100px]:grid-cols-2 max-md:mt-10 max-md:grid-cols-1">
        <?php $count = count($reasons);
        foreach ($reasons as $i => $reason) :
            $is_left   = $i % 2 === 0;
            $first_row = $i < 2;
            $last_row  = $i >= $count - 2;
            $is_last   = $i === $count - 1;

            // Two columns: a divider to the right of the left column and a rule
            // under every row but the last. One column (mobile): a rule under
            // every item but the last.
            $cell = array('flex items-start border-[#959394] pr-12 max-md:gap-5 max-md:px-0 max-md:py-8');
            $cell[] = $first_row ? 'pt-[0.3rem]' : 'pt-13';
            $cell[] = $last_row ? 'pb-8' : 'pb-17 border-b';
            $cell[] = $is_left ? 'gap-10 border-r max-md:border-r-0' : 'gap-8 pl-21.5 max-[1100px]:pl-10';
            if ($last_row && !$is_last) {
                $cell[] = 'max-md:border-b';
            } elseif ($is_last) {
                $cell[] = 'max-md:border-b-0';
            } ?>
            <div class="<?php echo implode(' ', $cell); ?>">
                <span class="mt-[0.3rem] flex h-15.5 flex-[0_0_3.625rem] items-center justify-center text-[2.1rem] leading-none font-extrabold text-white <?php echo $is_left ? 'bg-hp-blue' : 'bg-hp-red'; ?>"><?php echo $i + 1; ?></span>
                <div>
                    <h3 class="text-[1.375rem] leading-[1.2] font-bold <?php echo $is_left ? 'text-[#0d4bba]' : 'text-[#e50000]'; ?>"><?php echo $reason['title']; ?></h3>
                    <p class="mt-6 mb-0 text-base leading-[1.2] font-medium text-[#292929]"><?php echo $reason['text']; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<?php get_footer(); ?>
