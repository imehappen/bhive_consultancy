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
            <span class="page-header-label">Get In Touch</span>
            <h1 class="display-4 text-white mb-3">Contact <span class="gradient-text">Us</span></h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= url('/') ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!-- Contact Info -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
            <h6 class="section-title bg-white text-center text-primary px-3">Get In Touch</h6>
            <h1 class="display-6 mb-4 fw-bold">Let's Build Something Great Together</h1>
        </div>
        <div class="row g-4 mb-5">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="contact-card bg-white rounded p-4 h-100 text-center shadow-sm">
                    <div class="d-inline-flex align-items-center justify-content-center rounded-circle mb-3" style="width: 60px; height: 60px; background: rgba(224,178,14,0.1);"><i class="fa fa-phone fa-lg text-primary"></i></div>
                    <h5 class="fw-bold">Call Us</h5>
                    <p style="color: var(--gray);">+254 711 130 992</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="contact-card bg-white rounded p-4 h-100 text-center shadow-sm">
                    <div class="d-inline-flex align-items-center justify-content-center rounded-circle mb-3" style="width: 60px; height: 60px; background: rgba(224,178,14,0.1);"><i class="fa fa-envelope fa-lg text-primary"></i></div>
                    <h5 class="fw-bold">Email Us</h5>
                    <p style="color: var(--gray);">bhiveconsultancyfirm@gmail.com</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="contact-card bg-white rounded p-4 h-100 text-center shadow-sm">
                    <div class="d-inline-flex align-items-center justify-content-center rounded-circle mb-3" style="width: 60px; height: 60px; background: rgba(224,178,14,0.1);"><i class="fa fa-map-marker-alt fa-lg text-primary"></i></div>
                    <h5 class="fw-bold">Location</h5>
                    <p style="color: var(--gray);">Nairobi, Kenya</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Form -->
<div class="container-xxl py-5" style="background: var(--light);">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-start text-primary pe-3">Send a Message</h6>
                <h2 class="mb-4 fw-bold">Have A Question? We'd Love to Hear From You</h2>
                <p class="mb-4" style="color: var(--gray);">Whether you're looking to build your brand from scratch, boost your social media presence, or plan an unforgettable event, we're here to help.</p>
                <div class="row g-3">
                    <div class="col-sm-6"><div class="d-flex align-items-center"><i class="fa fa-check-circle text-primary me-2"></i><span>Free Consultation</span></div></div>
                    <div class="col-sm-6"><div class="d-flex align-items-center"><i class="fa fa-check-circle text-primary me-2"></i><span>Quick Response</span></div></div>
                    <div class="col-sm-6"><div class="d-flex align-items-center"><i class="fa fa-check-circle text-primary me-2"></i><span>Custom Solutions</span></div></div>
                    <div class="col-sm-6"><div class="d-flex align-items-center"><i class="fa fa-check-circle text-primary me-2"></i><span>Results Driven</span></div></div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <?php if (!empty($flash)): ?>
                    <div class="alert alert-<?= $flash['type'] === 'success' ? 'success' : 'danger' ?> alert-dismissible fade show" role="alert">
                        <?= e($flash['message']) ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                <?php endif; ?>
                <div class="bg-white rounded p-4 shadow-sm">
                    <form action="<?= url('/contact') ?>" method="POST">
                        <?= csrf_field() ?>
                        <div class="row g-3">
                            <div class="col-md-6"><div class="form-floating"><input type="text" class="form-control" id="name" name="name" placeholder="Your Name" value="<?= e($old['name'] ?? '') ?>" required><label for="name">Your Name</label></div></div>
                            <div class="col-md-6"><div class="form-floating"><input type="email" class="form-control" id="email" name="email" placeholder="Your Email" value="<?= e($old['email'] ?? '') ?>" required><label for="email">Your Email</label></div></div>
                            <div class="col-12"><div class="form-floating"><input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" value="<?= e($old['subject'] ?? '') ?>" required><label for="subject">Subject</label></div></div>
                            <div class="col-12"><div class="form-floating"><textarea class="form-control" placeholder="Your message" id="message" name="message" style="height: 150px" required><?= e($old['message'] ?? '') ?></textarea><label for="message">Your Message</label></div></div>
                            <div class="col-12 text-center"><button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Send Message <i class="fa fa-paper-plane ms-2"></i></button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Map -->
<div class="container-xxl pt-5 px-0 wow fadeIn" data-wow-delay="0.1s">
    <iframe class="w-100 mb-n2" style="height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15955.238650327944!2d36.8219462!3d-1.2920659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f173c01e28d83%3A0x3b96b7de2dde2f3c!2sNairobi%2C%20Kenya!5e0!3m2!1sen!2s!4v1698765432100!5m2!1sen!2s" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
