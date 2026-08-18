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
            <span class="page-header-label">The People</span>
            <h1 class="display-4 text-white mb-3">Our <span class="gradient-text">Team</span></h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= url('/') ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Team</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!-- Team -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="section-title bg-white text-center text-primary px-3">Our Team</h6>
            <h1 class="display-6 mb-4 fw-bold">Meet The Creative Minds Behind B-Hive</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <?php
            $team = [
                ['name' => 'Betty Kithinji', 'role' => 'Brand Consultant & Founder', 'img' => 'img/team-betty.jpg', 'desc' => 'Digital Media Journalist, Brand Consultant & Event Moderator with a thriving presence in Kenya\'s entertainment and lifestyle industry.'],
            ];
            foreach ($team as $i => $m): ?>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="<?= $i * 0.2 ?>s">
                <div class="team-item text-center p-4">
                    <img class="img-fluid border rounded-circle w-75 p-2 mb-4" src="<?= $m['img'] ?>" alt="<?= $m['name'] ?>">
                    <div class="team-text">
                        <div class="team-title">
                            <h5 class="fw-bold"><?= $m['name'] ?></h5>
                            <span style="color: var(--gray);"><?= $m['role'] ?></span>
                        </div>
                        <div class="team-social mt-3">
                            <a class="btn btn-square btn-primary rounded-circle" href="https://www.instagram.com/bhivebrandconsultancy" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle" href="https://twitter.com/BHiveConsult" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle" href="https://www.facebook.com/BHiveBrandConsultancy" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- Founder Bio -->
<div class="container-xxl py-5" style="background: var(--light);">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <img class="img-cover" src="img/about-betty.jpg" alt="Betty Kithinji" style="height: 400px; object-position: center 15%;">
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="section-title bg-white text-start text-primary pe-3">Founder's Message</h6>
                <h2 class="mb-3 fw-bold">Betty Kithinji</h2>
                <p style="color: var(--gray);">Miss Kithinji is an accomplished media host and digital content creator with a thriving presence in Kenya's entertainment and lifestyle industry.</p>
                <p style="color: var(--gray);">With a natural flair for hosting, she has successfully moderated high-profile events such as the Africa e-Digital Summit 2024 and Miss Universe Kenya 2024 red carpet.</p>
                <p style="color: var(--gray);">She holds an educational background in Journalism, Communication, and Public Relations, and is dedicated to advancing her career in these interconnected fields.</p>
            </div>
        </div>
    </div>
</div>
