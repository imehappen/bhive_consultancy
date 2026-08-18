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
            <span class="page-header-label">Our Work</span>
            <h1 class="display-4 text-white mb-3">Featured <span class="gradient-text">Projects</span></h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= url('/') ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Projects</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!-- Projects -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="section-title bg-white text-center text-primary px-3">Our Projects</h6>
            <h1 class="display-6 mb-4 fw-bold">Brands We've Helped Grow</h1>
        </div>
        <div class="row g-4">
            <?php
            $projects = [
                ['title' => 'Brand Strategy Workshop', 'cat' => 'Brand Strategy', 'img' => 'img/company-1.jpg'],
                ['title' => 'Social Media Campaign', 'cat' => 'Social Media', 'img' => 'img/company-2.jpg'],
                ['title' => 'Corporate Event Publicity', 'cat' => 'Event Publicity', 'img' => 'img/company-3.jpg'],
                ['title' => 'Talent Positioning Project', 'cat' => 'Talent Consultancy', 'img' => 'img/company-4.jpg'],
                ['title' => 'Brand Collaboration Launch', 'cat' => 'Brand Collaboration', 'img' => 'img/company-5.jpg'],
                ['title' => 'PR & Media Campaign', 'cat' => 'PR Campaign', 'img' => 'img/company-6.jpg'],
                ['title' => 'Youth Mentorship Program', 'cat' => 'Mentorship', 'img' => 'img/company-7.jpg'],
                ['title' => 'Digital Visibility Project', 'cat' => 'Digital Strategy', 'img' => 'img/company-8.jpg'],
                ['title' => 'Event Experience Publicity', 'cat' => 'Event Publicity', 'img' => 'img/company-9.jpg'],
                ['title' => 'Influencer Campaign', 'cat' => 'Campaign', 'img' => 'img/company-10.jpg'],
                ['title' => 'Brand Activation', 'cat' => 'Brand Strategy', 'img' => 'img/company-11.jpg'],
                ['title' => 'Media Coverage Project', 'cat' => 'PR & Media', 'img' => 'img/company-12.jpg'],
            ];
            foreach ($projects as $i => $p): ?>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="<?= ($i % 3) * 0.1 + 0.1 ?>s">
                <div class="project-item position-relative rounded overflow-hidden" style="height: 280px;">
                    <img class="project-img" src="<?= $p['img'] ?>" alt="<?= $p['title'] ?>">
                    <a href="<?= url('/contact') ?>">
                        <span class="h5 text-white mb-0 fw-bold"><?= $p['title'] ?></span>
                        <small class="text-white-50 d-block"><?= $p['cat'] ?></small>
                    </a>
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
            <h2 class="text-white mb-3 fw-bold" style="position: relative; z-index: 1;">Want to Be Our Next Success Story?</h2>
            <p class="mb-4" style="color: rgba(255,255,255,0.7); position: relative; z-index: 1;">Let's work together to build your brand.</p>
            <a class="btn btn-primary rounded-pill py-3 px-5" href="<?= url('/contact') ?>" style="position: relative; z-index: 1;">Get in Touch <i class="fa fa-arrow-right ms-2"></i></a>
        </div>
    </div>
</div>
