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
            <span class="page-header-label">Client Voices</span>
            <h1 class="display-4 text-white mb-3"><span class="gradient-text">Testimonials</span></h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= url('/') ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Testimonials</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!-- Testimonials -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="section-title bg-white text-center px-3" style="color: var(--dark);">Testimonials</h6>
            <h1 class="display-6 mb-4 fw-bold">What Our Clients Say!</h1>
        </div>
        <div class="row g-4">
            <?php
            $testimonials = [
                ['initials' => 'GM', 'name' => 'Grace Mwangi', 'role' => 'Marketing Lead, Safaricom', 'quote' => 'B-Hive transformed our campaign visibility completely. Their strategic approach to branding helped us stand out in the competitive telecom space. Highly recommend their services!'],
                ['initials' => 'JO', 'name' => 'James Ochieng', 'role' => 'Brand Manager, Tusker', 'quote' => 'The PR and media visibility B-Hive created for our product launch was extraordinary. They know exactly how to position brands for maximum impact.'],
                ['initials' => 'SN', 'name' => 'Sarah Njeri', 'role' => 'Communications Director, KCB Bank', 'quote' => 'Our social media presence grew by 300% within three months of working with B-Hive. Their team is creative, responsive, and results-driven.'],
                ['initials' => 'PK', 'name' => 'Peter Kamau', 'role' => 'Events Manager, Java House', 'quote' => 'B-Hive handled our event publicity flawlessly. The media coverage and brand visibility we received exceeded all expectations. True professionals!'],
            ];
            foreach ($testimonials as $i => $t): ?>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="<?= ($i % 2) * 0.2 + 0.1 ?>s">
                <div class="bg-white rounded p-4 shadow-sm h-100">
                    <div class="d-flex align-items-center mb-4">
                        <div class="flex-shrink-0 rounded-circle d-flex align-items-center justify-content-center" style="width: 55px; height: 55px; background: var(--dark);">
                            <span class="fw-bold" style="color: var(--primary);"><?= $t['initials'] ?></span>
                        </div>
                        <div class="ms-3">
                            <h5 class="mb-1 fw-bold"><?= $t['name'] ?></h5>
                            <small style="color: var(--gray);"><?= $t['role'] ?></small>
                        </div>
                    </div>
                    <p class="mb-0"><i class="fa fa-quote-left text-primary me-2"></i><?= $t['quote'] ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
