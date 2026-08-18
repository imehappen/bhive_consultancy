<!-- Hero Start -->
<div class="container-fluid p-0 mb-0">
    <div class="hero-section">
        <div class="row g-0 align-items-center">
            <!-- Main Slide Image — Swiper -->
            <div class="col-lg-7">
                <div class="hero-image-wrap">
                    <div class="swiper heroImgSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide hero-slide-1" data-img="dissolve-box" data-text="reveal-up">
                                <img src="img/event-1.jpg" alt="B-Hive Brand Strategy" class="hero-main-img">
                            </div>
                            <div class="swiper-slide hero-slide-2" data-img="dissolve-particles" data-text="reveal-left">
                                <img src="img/event-2.jpg" alt="Creating Visibility" class="hero-main-img">
                            </div>
                            <div class="swiper-slide hero-slide-3" data-img="wipe-diagonal" data-text="reveal-scale">
                                <img src="img/event-3.jpg" alt="Strategic Solutions" class="hero-main-img">
                            </div>
                        </div>
                    </div>
                    <!-- Slide counter -->
                    <div class="hero-counter">
                        <span class="hero-counter-current" id="heroCurrentSlide">01</span>
                        <span class="hero-counter-line"></span>
                        <span class="hero-counter-total">03</span>
                    </div>
                    <!-- Progress bar -->
                    <div class="hero-progress-bar">
                        <div class="hero-progress-fill"></div>
                    </div>
                    <!-- Nav arrows -->
                    <div class="hero-arrow hero-prev heroImgPrev"><i class="fa fa-arrow-left"></i></div>
                    <div class="hero-arrow hero-next heroImgNext"><i class="fa fa-arrow-right"></i></div>
                    <!-- Decorative gold corner -->
                    <div class="hero-deco-corner"></div>
                </div>
            </div>

            <!-- Text Content — Swiper -->
            <div class="col-lg-5">
                <div class="hero-content">
                    <canvas id="heroConfetti" class="hero-confetti-canvas"></canvas>
                    <div class="swiper heroTextSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" data-text="reveal-up">
                                <div class="hero-text-item">
                                    <span class="hero-tag">&#x2726; Welcome to B-Hive</span>
                                    <h1 class="hero-title">Building Brands That <span class="text-primary">Last</span></h1>
                                    <p class="hero-desc">A modern branding, PR and digital visibility agency helping brands build strong, visible and profitable identities.</p>
                                    <div class="hero-btns">
                                        <a class="btn btn-primary rounded-pill py-3 px-5" href="<?= url('/contact') ?>">Get Started <i class="fa fa-arrow-right ms-2"></i></a>
                                        <a class="btn btn-outline-light rounded-pill py-3 px-5" href="<?= url('/about') ?>">Learn More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-text="reveal-left">
                                <div class="hero-text-item">
                                    <span class="hero-tag">&#x2726; B-Hive Brand Consultancy</span>
                                    <h1 class="hero-title">Creating Visibility. <span class="text-primary">Positioning Talent.</span></h1>
                                    <p class="hero-desc">We don't just post content — we build perception, influence and long-term visibility.</p>
                                    <div class="hero-btns">
                                        <a class="btn btn-primary rounded-pill py-3 px-5" href="<?= url('/services') ?>">Our Services <i class="fa fa-arrow-right ms-2"></i></a>
                                        <a class="btn btn-outline-light rounded-pill py-3 px-5" href="<?= url('/contact') ?>">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-text="reveal-scale">
                                <div class="hero-text-item">
                                    <span class="hero-tag">&#x2726; Your Brand, Our Passion</span>
                                    <h1 class="hero-title">We Build <span class="text-primary">Perception</span> & Influence</h1>
                                    <p class="hero-desc">From brand strategy to event publicity, we make your brand visible, trusted and memorable.</p>
                                    <div class="hero-btns">
                                        <a class="btn btn-primary rounded-pill py-3 px-5" href="<?= url('/about') ?>">Learn More <i class="fa fa-arrow-right ms-2"></i></a>
                                        <a class="btn btn-outline-light rounded-pill py-3 px-5" href="<?= url('/services') ?>">Our Services</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Dot pagination -->
                        <div class="hero-dots"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Upcoming Slides Grid -->
        <div class="hero-preview-grid">
            <div class="container">
                <div class="row g-3">
                    <div class="col-md-4">
                        <div class="hero-preview-card active" data-slide-to="0">
                            <img src="img/event-1.jpg" alt="Brand Strategy">
                            <div class="hero-preview-overlay">
                                <span class="hero-preview-num">01</span>
                                <span class="hero-preview-title">Building Brands That Last</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="hero-preview-card" data-slide-to="1">
                            <img src="img/event-2.jpg" alt="Creating Visibility">
                            <div class="hero-preview-overlay">
                                <span class="hero-preview-num">02</span>
                                <span class="hero-preview-title">Creating Visibility</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="hero-preview-card" data-slide-to="2">
                            <img src="img/event-3.jpg" alt="Strategic Solutions">
                            <div class="hero-preview-overlay">
                                <span class="hero-preview-num">03</span>
                                <span class="hero-preview-title">Perception & Influence</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/js-confetti@latest/dist/js-confetti.browser.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var imgTypes = ['dissolve-box', 'dissolve-particles', 'wipe-diagonal'];
    var txtTypes = ['reveal-up', 'reveal-left', 'reveal-scale'];

    function clearAll(swiper, prefixes) {
        swiper.slides.forEach(function(s) {
            prefixes.forEach(function(p) {
                s.classList.remove(p + imgTypes[0], p + imgTypes[1], p + imgTypes[2]);
            });
        });
    }

    function apply(swiper, prefix, types) {
        var active = swiper.slides[swiper.activeIndex];
        void active.offsetWidth;
        active.classList.add(prefix + types[swiper.realIndex]);
    }

    function restartBar() {
        var bar = document.querySelector('.hero-progress-fill');
        if (bar) { bar.style.animation = 'none'; bar.offsetHeight; bar.style.animation = ''; }
    }

    var heroImgSwiper = new Swiper('.heroImgSwiper', {
        loop: true,
        speed: 1400,
        effect: 'fade',
        fadeEffect: { crossFade: true },
        autoplay: { delay: 7000, disableOnInteraction: false },
        pagination: false,
        navigation: false,
        on: {
            slideChangeTransitionStart: function() {
                clearAll(this, ['img-']);
                apply(this, 'img-', imgTypes);
                var counterEl = document.getElementById('heroCurrentSlide');
                if (counterEl) counterEl.textContent = String(this.realIndex + 1).padStart(2, '0');
                document.querySelectorAll('.hero-preview-card').forEach(function(card, i) {
                    card.classList.toggle('active', i === this.realIndex);
                }.bind(this));
                restartBar();
            }
        }
    });

    var heroTextSwiper = new Swiper('.heroTextSwiper', {
        loop: true,
        speed: 1400,
        effect: 'fade',
        fadeEffect: { crossFade: true },
        autoplay: { delay: 7000, disableOnInteraction: false },
        pagination: {
            el: '.hero-dots',
            clickable: true,
            bulletActiveClass: 'active'
        },
        navigation: false,
        on: {
            slideChangeTransitionStart: function() {
                clearAll(this, ['text-']);
                apply(this, 'text-', txtTypes);
            }
        }
    });

    heroImgSwiper.on('slideChangeTransitionStart', function() {
        heroTextSwiper.slideTo(this.realIndex + heroTextSwiper.loopedSlides, 0);
    });

    var prevBtn = document.querySelector('.heroImgPrev');
    var nextBtn = document.querySelector('.heroImgNext');
    if (prevBtn) prevBtn.addEventListener('click', function() { heroImgSwiper.slidePrev(); });
    if (nextBtn) nextBtn.addEventListener('click', function() { heroImgSwiper.slideNext(); });

    document.querySelectorAll('.hero-preview-card').forEach(function(card) {
        card.addEventListener('click', function() {
            heroImgSwiper.slideToLoop(parseInt(this.getAttribute('data-slide-to')));
        });
    });

    // Initial animations
    setTimeout(function() {
        var imgActive = heroImgSwiper.slides[heroImgSwiper.activeIndex];
        var txtActive = heroTextSwiper.slides[heroTextSwiper.activeIndex];
        if (imgActive) { void imgActive.offsetWidth; imgActive.classList.add('img-dissolve-box'); }
        if (txtActive) { void txtActive.offsetWidth; txtActive.classList.add('text-reveal-up'); }
    }, 300);

    // Confetti
    var canvas = document.getElementById('heroConfetti');
    if (canvas) {
        var jsConfetti = new JSConfetti({ canvas: canvas });
        function fireConfetti() {
            jsConfetti.addConfetti({
                confettiRadius: 5,
                confettiNumber: 12,
                confettiColors: ['#e0b20e', '#f5d442', '#b8920c', '#ffffff'],
                emojis: [],
                position: { x: canvas.width * 0.8, y: -10 },
                velocity: 30,
                gravity: 0.015,
                drift: 0.5,
                fade: true,
                scalar: 1.4
            });
        }
        fireConfetti();
        setInterval(fireConfetti, 2200);
    }
});
</script>

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative">
                    <img class="img-cover" src="img/about-company.jpg" alt="About B-Hive" style="height: 420px; object-position: center center;">
                    <div class="counter-badge animate-float">
                        <h3 class="m-0">7+</h3>
                        <small class="fw-normal">Services</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="section-title bg-white text-start text-primary pe-3">About B-Hive</h6>
                <h1 class="display-6 mb-4 fw-bold">A Modern Branding, PR & Digital Visibility Agency</h1>
                <p>B-Hive Brand Consultancy is a modern branding, PR and digital visibility agency focused on helping brands, businesses, public figures and talents build strong, visible and profitable identities both online and offline.</p>
                <p class="mb-4">We specialize in strategic brand positioning, social media growth, media visibility, influencer management and creative campaign execution that connects brands with the right audience.</p>
                <div class="row g-3 mb-4">
                    <div class="col-sm-6"><div class="d-flex align-items-center"><i class="fa fa-check-circle text-primary me-2"></i><span>Strategic Brand Positioning</span></div></div>
                    <div class="col-sm-6"><div class="d-flex align-items-center"><i class="fa fa-check-circle text-primary me-2"></i><span>Social Media Growth</span></div></div>
                    <div class="col-sm-6"><div class="d-flex align-items-center"><i class="fa fa-check-circle text-primary me-2"></i><span>Media Visibility</span></div></div>
                    <div class="col-sm-6"><div class="d-flex align-items-center"><i class="fa fa-check-circle text-primary me-2"></i><span>Creative Campaigns</span></div></div>
                </div>
                <a class="btn btn-primary rounded-pill py-3 px-5" href="<?= url('/about') ?>">Learn More <i class="fa fa-arrow-right ms-2"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Approach Start -->
<div class="container-xxl py-5" style="background: var(--dark);">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
            <h6 class="section-title bg-dark text-center text-primary px-3">Our Approach</h6>
            <h1 class="display-6 mb-4 text-white fw-bold">Every Brand Has a Story. We Package It Professionally.</h1>
            <p style="color: rgba(255,255,255,0.6);">Our goal is to package your brand story and place it in front of the right audience.</p>
        </div>
        <div class="row g-4">
            <?php
            $steps = [
                ['icon' => 'fa-search', 'title' => 'Discover', 'desc' => "Uncover your brand's unique story"],
                ['icon' => 'fa-chess', 'title' => 'Strategize', 'desc' => 'Develop a tailored strategy'],
                ['icon' => 'fa-paint-brush', 'title' => 'Create', 'desc' => 'Craft compelling content'],
                ['icon' => 'fa-crosshairs', 'title' => 'Position', 'desc' => 'Place your brand before the right audience'],
                ['icon' => 'fa-chart-line', 'title' => 'Grow', 'desc' => 'Drive long-term visibility'],
            ];
            foreach ($steps as $i => $step): ?>
            <div class="col-lg col-md-4 col-6 wow fadeInUp" data-wow-delay="<?= ($i * 0.1 + 0.1) ?>s">
                <div class="process-step bg-white rounded text-center h-100">
                    <div class="step-icon"><i class="fa <?= $step['icon'] ?>"></i></div>
                    <h5 class="mb-2 fw-bold"><?= $step['title'] ?></h5>
                    <p class="small mb-0" style="color: var(--gray);"><?= $step['desc'] ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- Approach End -->

<!-- Services Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
            <h6 class="section-title bg-white text-center text-primary px-3">Our Services</h6>
            <h1 class="display-6 mb-4 fw-bold">Comprehensive Brand Solutions</h1>
        </div>
        <div class="row g-4">
            <?php
            $services = [
                ['icon' => 'fa-chess', 'title' => 'Brand Strategy & Positioning', 'desc' => 'We help brands define who they are and how they stand out in the market.', 'items' => ['Brand identity direction', 'Audience targeting', 'Digital growth strategy', 'Content planning']],
                ['icon' => 'fa-share-alt', 'title' => 'Social Media Management', 'desc' => 'We manage and grow social media platforms strategically.', 'items' => ['Content calendars', 'Community management', 'Analytics & reporting', 'Growth strategy']],
                ['icon' => 'fa-newspaper', 'title' => 'PR & Media Visibility', 'desc' => 'We help brands gain exposure through strategic media placement.', 'items' => ['PR campaigns', 'Press releases', 'Media outreach', 'Digital publications']],
                ['icon' => 'fa-user-tie', 'title' => 'Talent & Influencer Consultancy', 'desc' => 'We help creators turn their influence into a professional brand.', 'items' => ['Influencer positioning', 'Brand deal preparation', 'Media training', 'Profile building']],
                ['icon' => 'fa-bullhorn', 'title' => 'Campaigns & Collaborations', 'desc' => 'We create impactful campaigns through storytelling.', 'items' => ['Influencer campaigns', 'Product launches', 'Brand activations', 'Awareness campaigns']],
                ['icon' => 'fa-calendar-check', 'title' => 'Event & Experience Publicity', 'desc' => 'We help events gain attention before, during and after launch.', 'items' => ['Media coverage', 'Red carpet coordination', 'Digital hype campaigns', 'Event recap content']],
            ];
            foreach ($services as $i => $s): ?>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="<?= ($i % 3) * 0.1 + 0.1 ?>s">
                <div class="service-item d-block h-100 p-4">
                    <div class="text-center mb-3">
                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle mb-3" style="width: 70px; height: 70px; background: rgba(224,178,14,0.1);">
                            <i class="fa <?= $s['icon'] ?> fa-2x text-primary"></i>
                        </div>
                    </div>
                    <h4 class="mb-3 fw-bold text-center"><?= $s['title'] ?></h4>
                    <p class="text-center" style="color: var(--gray);"><?= $s['desc'] ?></p>
                    <ul class="list-unstyled text-start px-3">
                        <?php foreach ($s['items'] as $item): ?>
                        <li class="mb-2"><i class="fa fa-check text-primary me-2"></i><?= $item ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="text-center"><a class="btn btn-primary rounded-pill py-2 px-4" href="<?= url('/services') ?>">Learn More</a></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- Services End -->

<!-- Who We Work With Start -->
<div class="container-xxl py-5" style="background: var(--light);">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
            <h6 class="section-title bg-white text-center text-primary px-3">Who We Work With</h6>
            <h1 class="display-6 mb-4 fw-bold">Trusted by Leading Brands</h1>
        </div>
    </div>
    <?php
    $logos = [
        ['img' => 'logos/safaricom.png', 'alt' => 'Safaricom'],
        ['img' => 'logos/kcb-bank.png', 'alt' => 'KCB Bank'],
        ['img' => 'logos/britam.png', 'alt' => 'Britam'],
        ['img' => 'logos/tusker.png', 'alt' => 'Tusker'],
        ['img' => 'logos/nrg-radio.png', 'alt' => 'NRG Radio'],
        ['img' => 'logos/java-house.png', 'alt' => 'Java House'],
    ];
    $allLogos = array_merge($logos, $logos, $logos, $logos);
    ?>
    <div class="ticker-wrap wow fadeInUp" data-wow-delay="0.2s">
        <div class="ticker-track">
            <?php foreach ($allLogos as $l): ?>
            <div class="ticker-item">
                <img src="img/<?= $l['img'] ?>" alt="<?= $l['alt'] ?>">
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- Trusted by Leading Brands End -->

<!-- Why Choose Us + Founder Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <img class="img-cover" src="img/about-betty.jpg" alt="Betty Kithinji" style="height: 420px; object-position: center 15%;">
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="section-title bg-white text-start text-primary pe-3">Why B-Hive?</h6>
                <h1 class="display-6 mb-4 fw-bold">We Combine Creativity, Strategy & Media Understanding</h1>
                <p style="color: var(--gray);" class="mb-4">We focus on strategic visibility, authentic storytelling, professional brand positioning and meaningful brand perception.</p>
                <div class="row g-3">
                    <div class="col-sm-6"><div class="why-card d-flex align-items-center p-3"><div class="icon-wrap flex-shrink-0 me-2" style="width: 40px; height: 40px; min-width: 40px;"><i class="fa fa-eye"></i></div><div><h6 class="mb-0 fw-bold" style="font-size:0.9rem;">Strategic Visibility</h6></div></div></div>
                    <div class="col-sm-6"><div class="why-card d-flex align-items-center p-3"><div class="icon-wrap flex-shrink-0 me-2" style="width: 40px; height: 40px; min-width: 40px;"><i class="fa fa-pen-fancy"></i></div><div><h6 class="mb-0 fw-bold" style="font-size:0.9rem;">Authentic Storytelling</h6></div></div></div>
                    <div class="col-sm-6"><div class="why-card d-flex align-items-center p-3"><div class="icon-wrap flex-shrink-0 me-2" style="width: 40px; height: 40px; min-width: 40px;"><i class="fa fa-award"></i></div><div><h6 class="mb-0 fw-bold" style="font-size:0.9rem;">Professional Positioning</h6></div></div></div>
                    <div class="col-sm-6"><div class="why-card d-flex align-items-center p-3"><div class="icon-wrap flex-shrink-0 me-2" style="width: 40px; height: 40px; min-width: 40px;"><i class="fa fa-chart-line"></i></div><div><h6 class="mb-0 fw-bold" style="font-size:0.9rem;">Audience Growth</h6></div></div></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Why Choose Us End -->

<!-- Mentorship Start -->
<div class="container-xxl py-5 mentorship-section">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <h6 class="section-title bg-dark text-start text-primary pe-3">Mentorship</h6>
                <h1 class="display-6 mb-4 text-white fw-bold">B-Hive Mentorship Program: Radiant Futures</h1>
                <p style="color: rgba(255,255,255,0.7);">We mentor and empower young people through confidence building, purpose discovery and creative industry exposure.</p>
                <div class="row g-3 mb-4">
                    <div class="col-sm-6"><div class="d-flex align-items-center"><i class="fa fa-star text-primary me-2"></i><span style="color: rgba(255,255,255,0.8);">Confidence & Personal Growth</span></div></div>
                    <div class="col-sm-6"><div class="d-flex align-items-center"><i class="fa fa-star text-primary me-2"></i><span style="color: rgba(255,255,255,0.8);">Digital Career Guidance</span></div></div>
                    <div class="col-sm-6"><div class="d-flex align-items-center"><i class="fa fa-star text-primary me-2"></i><span style="color: rgba(255,255,255,0.8);">Talent Development</span></div></div>
                    <div class="col-sm-6"><div class="d-flex align-items-center"><i class="fa fa-star text-primary me-2"></i><span style="color: rgba(255,255,255,0.8);">Youth Empowerment</span></div></div>
                </div>
                <a class="btn btn-primary rounded-pill py-3 px-5" href="<?= url('/about') ?>">Learn More</a>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row g-3">
                    <div class="col-6"><img class="img-cover" src="img/mentorship-1.jpg" alt="Mentorship" style="height: 200px; object-position: center 15%;"></div>
                    <div class="col-6"><img class="img-cover" src="img/mentorship-2.jpg" alt="Youth Program" style="height: 200px; object-position: center 15%;"></div>
                    <div class="col-12"><img class="img-cover" src="img/event-1.jpg" alt="B-Hive Event" style="height: 220px; object-position: center 40%;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mentorship End -->

<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="section-title bg-white text-center text-primary px-3">Our Team</h6>
            <h1 class="display-6 mb-4 fw-bold">Meet The Creative Minds Behind B-Hive</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item text-center p-4">
                    <img class="img-fluid border rounded-circle w-75 p-2 mb-4" src="img/team-betty.jpg" alt="Betty Kithinji" style="object-position: center 15%;">
                    <div class="team-text">
                        <div class="team-title">
                            <h5 class="fw-bold">Betty Kithinji</h5>
                            <span style="color: var(--gray);">Brand Consultant & Founder</span>
                        </div>
                        <div class="team-social mt-3">
                            <a class="btn btn-square btn-primary rounded-circle" href="https://www.instagram.com/bhivebrandconsultancy" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle" href="https://twitter.com/BHiveConsult" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle" href="https://www.facebook.com/BHiveBrandConsultancy" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

<!-- Testimonials Start -->
<div class="container-xxl py-5" style="background: var(--light);">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="section-title bg-white text-center text-primary px-3">Testimonials</h6>
            <h1 class="display-6 mb-4 fw-bold">What Our Clients Say!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="testimonial-item bg-white rounded p-4">
                <div class="d-flex align-items-center mb-4">
                    <div class="flex-shrink-0 rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; background: var(--primary);"><span class="fw-bold" style="color: var(--dark);">GM</span></div>
                    <div class="ms-3"><h5 class="mb-1 fw-bold">Grace Mwangi</h5><small style="color: var(--gray);">CEO, TechStart Kenya</small></div>
                </div>
                <p class="mb-0"><i class="fa fa-quote-left text-primary me-2"></i>B-Hive transformed our brand completely. Their strategic approach helped us stand out in the competitive tech space.</p>
            </div>
            <div class="testimonial-item bg-white rounded p-4">
                <div class="d-flex align-items-center mb-4">
                    <div class="flex-shrink-0 rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; background: var(--primary);"><span class="fw-bold" style="color: var(--dark);">JO</span></div>
                    <div class="ms-3"><h5 class="mb-1 fw-bold">James Ochieng</h5><small style="color: var(--gray);">Founder, AfroStyle Magazine</small></div>
                </div>
                <p class="mb-0"><i class="fa fa-quote-left text-primary me-2"></i>The PR and media visibility B-Hive created for our magazine launch was extraordinary. They know how to position brands.</p>
            </div>
            <div class="testimonial-item bg-white rounded p-4">
                <div class="d-flex align-items-center mb-4">
                    <div class="flex-shrink-0 rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; background: var(--primary);"><span class="fw-bold" style="color: var(--dark);">SN</span></div>
                    <div class="ms-3"><h5 class="mb-1 fw-bold">Sarah Njeri</h5><small style="color: var(--gray);">Marketing Director, GreenLife Co.</small></div>
                </div>
                <p class="mb-0"><i class="fa fa-quote-left text-primary me-2"></i>Our social media presence grew by 300% within three months. Creative, responsive, and results-driven.</p>
            </div>
            <div class="testimonial-item bg-white rounded p-4">
                <div class="d-flex align-items-center mb-4">
                    <div class="flex-shrink-0 rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; background: var(--primary);"><span class="fw-bold" style="color: var(--dark);">PK</span></div>
                    <div class="ms-3"><h5 class="mb-1 fw-bold">Peter Kamau</h5><small style="color: var(--gray);">Events Manager, Kenya Expos</small></div>
                </div>
                <p class="mb-0"><i class="fa fa-quote-left text-primary me-2"></i>B-Hive handled our event publicity flawlessly. The media coverage exceeded all expectations. True professionals!</p>
            </div>
        </div>
    </div>
</div>
<!-- Testimonials End -->

<!-- CTA Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="cta-section rounded p-5 text-center wow fadeInUp" data-wow-delay="0.1s" style="position: relative; overflow: hidden;">
            <h2 class="text-white mb-3 fw-bold" style="position: relative; z-index: 1;">Ready to Build Your Brand?</h2>
            <p class="mb-4" style="color: rgba(255,255,255,0.7); position: relative; z-index: 1;">Let B-Hive help you create visibility, build influence and position your brand for success.</p>
            <div style="position: relative; z-index: 1;">
                <a class="btn btn-primary rounded-pill py-3 px-5 me-3" href="<?= url('/contact') ?>">Get in Touch <i class="fa fa-arrow-right ms-2"></i></a>
                <a class="btn btn-outline-light rounded-pill py-3 px-5" href="<?= url('/services') ?>">Our Services</a>
            </div>
        </div>
    </div>
</div>
<!-- CTA End -->
