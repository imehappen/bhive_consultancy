<!-- Page Header -->
<div class="page-header py-5 mb-5">
    <div class="page-header-shapes">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="shape shape-3"></div>
    </div>
    <div class="page-header-accent"></div>
    <div class="container">
        <div class="page-header-content">
            <span class="page-header-label">Who We Are</span>
            <h1 class="display-4 text-white mb-3">About <span class="gradient-text">B-Hive</span></h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= url('/') ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!-- About B-Hive -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <img class="img-cover" src="img/about-company.jpg" alt="About B-Hive" style="height: 400px; object-position: center center;">
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="section-title bg-white text-start text-primary pe-3">About B-Hive</h6>
                <h1 class="display-6 mb-4 fw-bold">Building Brands. Creating Visibility. Positioning Talent.</h1>
                <p>B-Hive Brand Consultancy is a modern branding, PR and digital visibility agency focused on helping brands, businesses, public figures and talents build strong, visible and profitable identities both online and offline.</p>
                <p>At B-Hive, we don't just post content — we build perception, influence and long-term visibility.</p>
                <p class="mb-4">Founded by Betty Kithinji, an accomplished media host, digital content creator and brand consultant, B-Hive has grown to become a trusted partner for brands seeking to establish a strong market presence across Kenya and beyond.</p>
                <a class="btn btn-primary rounded-pill py-3 px-5" href="<?= url('/services') ?>">Our Services <i class="fa fa-arrow-right ms-2"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- Founder -->
<div class="container-xxl py-5" style="background: var(--light);">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="section-title bg-white text-start text-primary pe-3">Meet The Founder</h6>
                <h1 class="display-6 mb-3 fw-bold">Betty Kithinji</h1>
                <h5 class="mb-3 fw-semibold" style="color: var(--primary);">Digital Media Journalist | Brand Consultant | Event Moderator</h5>
                <p>Miss Kithinji is an accomplished media host and digital content creator with a thriving presence in Kenya's entertainment and lifestyle industry.</p>
                <p>She has successfully moderated high-profile events such as the <strong>Africa e-Digital Summit 2024</strong> and <strong>Miss Universe Kenya 2024</strong> red carpet, and spearheaded the B-Hive Mentorship Program.</p>
                <p>As a host at SPM Buzz, she brings her audience closer to the pulse of Kenyan culture through insightful interviews, creative storytelling, and engaging coverage of major events.</p>
                <p>Miss Kithinji holds an educational background in Journalism, Communication, and Public Relations.</p>
                <div class="row g-3 mt-3">
                    <div class="col-sm-6"><div class="d-flex align-items-center"><i class="fa fa-microphone text-primary me-2"></i><span>Event Moderation</span></div></div>
                    <div class="col-sm-6"><div class="d-flex align-items-center"><i class="fa fa-bullhorn text-primary me-2"></i><span>Brand Influencing</span></div></div>
                    <div class="col-sm-6"><div class="d-flex align-items-center"><i class="fa fa-music text-primary me-2"></i><span>Voice Over Artist</span></div></div>
                    <div class="col-sm-6"><div class="d-flex align-items-center"><i class="fa fa-users text-primary me-2"></i><span>Talent Consultancy</span></div></div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row g-3">
                    <div class="col-12"><img class="img-cover" src="img/about-betty.jpg" alt="Betty Kithinji" style="height: 300px; object-position: center 25%;"></div>
                    <div class="col-6"><img class="img-cover" src="img/mentorship-1.jpg" alt="Mentorship" style="height: 180px; object-position: center 15%;"></div>
                    <div class="col-6"><img class="img-cover" src="img/event-2.jpg" alt="B-Hive Events" style="height: 180px; object-position: center 40%;"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Brands Worked With -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
            <h6 class="section-title bg-white text-center text-primary px-3">Brands We've Worked With</h6>
            <h1 class="display-6 mb-4 fw-bold">Trusted by Leading Brands</h1>
        </div>
    </div>
    <?php
    $brands = [
        ['img' => 'logos/safaricom.png', 'alt' => 'Safaricom'],
        ['img' => 'logos/kcb-bank.png', 'alt' => 'KCB Bank'],
        ['img' => 'logos/britam.png', 'alt' => 'Britam'],
        ['img' => 'logos/tusker.png', 'alt' => 'Tusker'],
        ['img' => 'logos/nrg-radio.png', 'alt' => 'NRG Radio'],
        ['img' => 'logos/monster-energy.png', 'alt' => 'Monster Energy'],
        ['img' => 'logos/spm-buzz.png', 'alt' => 'SPM Buzz'],
        ['img' => 'logos/lugo-collection.png', 'alt' => 'Lugo Collection'],
    ];
    $allBrands = array_merge($brands, $brands, $brands, $brands);
    ?>
    <div class="ticker-wrap wow fadeInUp" data-wow-delay="0.2s">
        <div class="ticker-track">
            <?php foreach ($allBrands as $b): ?>
            <div class="ticker-item">
                <img src="img/<?= $b['img'] ?>" alt="<?= $b['alt'] ?>">
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- Why B-Hive -->
<div class="container-xxl py-5" style="background: var(--light);">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
            <h6 class="section-title bg-white text-center text-primary px-3">Why B-Hive?</h6>
            <h1 class="display-6 mb-4 fw-bold">What Makes Us Stand Out</h1>
        </div>
        <div class="row g-4">
            <?php foreach ([
                ['icon' => 'fa-eye', 'title' => 'Strategic Visibility', 'desc' => 'Placing your brand in front of the right audience.'],
                ['icon' => 'fa-pen-fancy', 'title' => 'Authentic Storytelling', 'desc' => 'Crafting genuine narratives that build trust.'],
                ['icon' => 'fa-award', 'title' => 'Professional Positioning', 'desc' => 'Standing out in competitive markets.'],
                ['icon' => 'fa-laptop', 'title' => 'Modern Digital Trends', 'desc' => 'Staying ahead of digital trends.'],
                ['icon' => 'fa-users', 'title' => 'Long-term Growth', 'desc' => 'Sustainable audience growth.'],
                ['icon' => 'fa-heart', 'title' => 'Meaningful Perception', 'desc' => 'Creating lasting, trusted impressions.'],
            ] as $i => $item): ?>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="<?= ($i % 3) * 0.1 + 0.1 ?>s">
                <div class="why-card text-center">
                    <div class="icon-wrap mx-auto"><i class="fa <?= $item['icon'] ?> fa-lg"></i></div>
                    <h5 class="fw-bold"><?= $item['title'] ?></h5>
                    <p style="color: var(--gray); margin: 0;"><?= $item['desc'] ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- CTA -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="cta-section rounded p-5 text-center wow fadeInUp" data-wow-delay="0.1s" style="position: relative; overflow: hidden;">
            <h2 class="text-white mb-3 fw-bold" style="position: relative; z-index: 1;">Ready to Build Your Brand?</h2>
            <p class="mb-4" style="color: rgba(255,255,255,0.7); position: relative; z-index: 1;">Let B-Hive help you create visibility and position your brand for success.</p>
            <a class="btn btn-primary rounded-pill py-3 px-5" href="<?= url('/contact') ?>" style="position: relative; z-index: 1;">Get in Touch <i class="fa fa-arrow-right ms-2"></i></a>
        </div>
    </div>
</div>
