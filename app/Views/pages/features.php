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
            <span class="page-header-label">Why Choose Us</span>
            <h1 class="display-4 text-white mb-3">Our <span class="gradient-text">Features</span></h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= url('/') ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Features</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
</div>

<!-- Why B-Hive Features -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
            <h6 class="section-title bg-white text-center text-primary px-3">Why Choose B-Hive</h6>
            <h1 class="display-6 mb-4 fw-bold">What Makes Us Different</h1>
        </div>
        <div class="row g-4">
            <?php
            $features = [
                ['icon' => 'fa-eye', 'title' => 'Strategic Visibility', 'desc' => 'We focus on placing your brand in front of the right audience through strategic channels.'],
                ['icon' => 'fa-pen-fancy', 'title' => 'Authentic Storytelling', 'desc' => 'We craft genuine narratives that resonate with your target audience and build trust.'],
                ['icon' => 'fa-award', 'title' => 'Professional Positioning', 'desc' => 'We position your brand professionally to stand out in competitive markets.'],
                ['icon' => 'fa-laptop', 'title' => 'Modern Digital Trends', 'desc' => 'We stay ahead of digital trends to keep your brand relevant and competitive.'],
                ['icon' => 'fa-users', 'title' => 'Long-term Growth', 'desc' => 'We build sustainable audience growth and meaningful brand perception.'],
                ['icon' => 'fa-heart', 'title' => 'Meaningful Perception', 'desc' => 'We create lasting impressions that make your brand trusted and memorable.'],
                ['icon' => 'fa-handshake', 'title' => 'Trusted Partnerships', 'desc' => 'We build long-term relationships with our clients based on trust and results.'],
                ['icon' => 'fa-chart-line', 'title' => 'Data-Driven Results', 'desc' => 'We use analytics and insights to measure and optimize every campaign.'],
                ['icon' => 'fa-globe-africa', 'title' => 'Local & Global Reach', 'desc' => 'We combine local market expertise with global digital strategies.'],
            ];
            foreach ($features as $i => $f): ?>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="<?= ($i % 3) * 0.1 + 0.1 ?>s">
                <div class="why-card text-center h-100">
                    <div class="icon-wrap mx-auto"><i class="fa <?= $f['icon'] ?> fa-lg"></i></div>
                    <h5 class="fw-bold"><?= $f['title'] ?></h5>
                    <p style="color: var(--gray); margin: 0;"><?= $f['desc'] ?></p>
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
