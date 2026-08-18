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
            <span class="page-header-label">What We Do</span>
            <h1 class="display-4 text-white mb-3">Our <span class="gradient-text">Services</span></h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= url('/') ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!-- Services -->
<?php
$allServices = [
    ['num' => '01', 'title' => 'Brand Strategy & Positioning', 'icon' => 'fa-chess', 'desc' => 'We help brands define who they are, how they communicate and how they stand out in the market.', 'includes' => ['Brand identity direction', 'Brand positioning', 'Audience targeting', 'Digital growth strategy', 'Personal branding', 'Campaign planning', 'Brand visibility strategy', 'Content direction & planning'], 'ideal' => 'Businesses, startups, public figures, creators and growing brands looking to become more visible and professional.'],
    ['num' => '02', 'title' => 'Social Media Management', 'icon' => 'fa-share-alt', 'desc' => 'We manage and grow social media platforms strategically while maintaining a strong brand image.', 'platforms' => 'Instagram, TikTok, Facebook, LinkedIn, X (Twitter)', 'includes' => ['Monthly content calendars', 'Content strategy', 'Caption writing', 'Trend research', 'Posting & scheduling', 'Community management', 'Analytics & reporting', 'Growth strategy'], 'goal' => 'To increase visibility, engagement, trust and conversions.'],
    ['num' => '03', 'title' => 'PR & Media Visibility', 'icon' => 'fa-newspaper', 'desc' => 'We help brands and talents gain exposure through strategic media placement and public relations.', 'includes' => ['PR campaigns', 'Media outreach', 'Press releases', 'Blog features', 'Digital publications', 'TV & radio coordination', 'Event publicity', 'Influencer collaborations'], 'note' => 'Visibility across top blogs, media houses, entertainment platforms and digital publications across Kenya and beyond.'],
    ['num' => '04', 'title' => 'Talent & Influencer Consultancy', 'icon' => 'fa-user-tie', 'desc' => 'We help creators and public figures turn their influence into a professional brand.', 'includes' => ['Talent management support', 'Influencer positioning', 'Brand deal preparation', 'Media training', 'Social media optimization', 'Profile building', 'Content direction', 'Partnership strategy'], 'ideal' => 'Creators, influencers, artists, public figures and upcoming talents.'],
    ['num' => '05', 'title' => 'Campaigns & Brand Collaborations', 'icon' => 'fa-bullhorn', 'desc' => 'We create impactful campaigns that connect brands with audiences through storytelling and digital influence.', 'includes' => ['Influencer campaigns', 'Product launches', 'Brand activations', 'Event campaigns', 'Awareness campaigns', 'Digital marketing collaborations', 'Community engagement campaigns']],
    ['num' => '06', 'title' => 'Event & Experience Publicity', 'icon' => 'fa-calendar-check', 'desc' => 'We help events gain attention before, during and after launch.', 'includes' => ['Event media coverage', 'Event promotion', 'Red carpet coordination', 'Digital hype campaigns', 'Influencer attendance coordination', 'Event recap content', 'Photography/videography coordination']],
    ['num' => '07', 'title' => 'Mentorship & Youth Empowerment', 'icon' => 'fa-star', 'desc' => 'Through the B-Hive Mentorship Program — Radiant Futures — we mentor and empower young people through confidence building, purpose discovery and creative industry exposure.', 'includes' => ['Confidence & personal growth', 'Digital career guidance', 'Talent development', 'Media & branding mentorship', 'Youth empowerment programs'], 'dark' => true],
];
foreach ($allServices as $i => $s):
$reverse = ($i % 2 !== 0);
?>
<div class="container-xxl py-5" style="<?= ($s['dark'] ?? false) ? 'background: linear-gradient(135deg, var(--dark) 0%, rgba(224,178,14,0.15) 100%);' : (($i % 2 === 0) ? 'background: var(--light);' : 'background: var(--white);') ?>">
    <div class="container">
        <div class="row g-5 align-items-center">
            <?php if (!$reverse): ?>
            <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="d-flex align-items-center justify-content-center" style="min-height: 300px;">
                    <div class="text-center">
                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle mb-4" style="width: 120px; height: 120px; background: rgba(224,178,14,0.1);">
                            <i class="fa <?= $s['icon'] ?> fa-4x text-primary"></i>
                        </div>
                        <h2 class="display-1 fw-bold" style="color: rgba(224,178,14,0.12);"><?= $s['num'] ?></h2>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="mb-2 <?= ($s['dark'] ?? false) ? 'text-white' : '' ?>" style="color: var(--primary); font-weight: 700; letter-spacing: 2px;"><?= $s['num'] ?></h6>
                <h2 class="mb-3 fw-bold <?= ($s['dark'] ?? false) ? 'text-white' : '' ?>"><?= $s['title'] ?></h2>
                <p class="<?= ($s['dark'] ?? false) ? 'text-white-50' : '' ?>" style="<?= !($s['dark'] ?? false) ? 'color: var(--gray);' : '' ?>"><?= $s['desc'] ?></p>
                <?php if (!empty($s['platforms'])): ?><p class="small <?= ($s['dark'] ?? false) ? 'text-white-50' : '' ?>" style="<?= !($s['dark'] ?? false) ? 'color: var(--gray);' : '' ?>"><strong>Platforms:</strong> <?= $s['platforms'] ?></p><?php endif; ?>
                <?php if (!empty($s['goal'])): ?><p class="small <?= ($s['dark'] ?? false) ? 'text-white-50' : '' ?>" style="<?= !($s['dark'] ?? false) ? 'color: var(--gray);' : '' ?>"><strong>Goal:</strong> <?= $s['goal'] ?></p><?php endif; ?>
                <?php if (!empty($s['note'])): ?><p class="small <?= ($s['dark'] ?? false) ? 'text-white-50' : '' ?>" style="<?= !($s['dark'] ?? false) ? 'color: var(--gray);' : '' ?>"><?= $s['note'] ?></p><?php endif; ?>
                <div class="row g-2 mb-4">
                    <?php foreach ($s['includes'] as $item): ?>
                    <div class="col-sm-6"><i class="fa fa-check text-primary me-2"></i><span class="<?= ($s['dark'] ?? false) ? 'text-white-50' : '' ?>"><?= $item ?></span></div>
                    <?php endforeach; ?>
                </div>
                <?php if (!empty($s['ideal'])): ?><p class="small <?= ($s['dark'] ?? false) ? 'text-white-50' : '' ?>" style="<?= !($s['dark'] ?? false) ? 'color: var(--gray);' : '' ?>"><strong>Ideal for:</strong> <?= $s['ideal'] ?></p><?php endif; ?>
            </div>
            <?php if ($reverse): ?>
            <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="d-flex align-items-center justify-content-center" style="min-height: 300px;">
                    <div class="text-center">
                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle mb-4" style="width: 120px; height: 120px; background: <?= ($s['dark'] ?? false) ? 'rgba(224,178,14,0.2)' : 'rgba(224,178,14,0.1)' ?>;">
                            <i class="fa <?= $s['icon'] ?> fa-4x text-primary"></i>
                        </div>
                        <h2 class="display-1 fw-bold" style="color: <?= ($s['dark'] ?? false) ? 'rgba(255,255,255,0.06)' : 'rgba(224,178,14,0.12)' ?>;"><?= $s['num'] ?></h2>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php endforeach; ?>

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
