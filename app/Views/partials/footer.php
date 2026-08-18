<!-- Footer -->
<div class="container-fluid footer text-body mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <div class="d-flex align-items-center mb-3">
                    <img src="img/logo.png" alt="B-Hive Logo" style="height: 40px;" class="me-2">
                    <h5 class="text-light mb-0 fw-bold">B-Hive Brand Consultancy</h5>
                </div>
                <p class="mb-3" style="color: rgba(255,255,255,0.6);">Building Brands. Creating Visibility. Positioning Talent. We combine creativity, strategy and media understanding to help brands become visible, trusted and memorable.</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-square btn-outline-secondary rounded-circle me-2" href="https://www.facebook.com/BHiveBrandConsultancy" target="_blank" style="border-color: rgba(255,255,255,0.2);"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-outline-secondary rounded-circle me-2" href="https://twitter.com/BHiveConsult" target="_blank" style="border-color: rgba(255,255,255,0.2);"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-outline-secondary rounded-circle me-2" href="https://www.linkedin.com/company/bhive-brand-consultancy" target="_blank" style="border-color: rgba(255,255,255,0.2);"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-square btn-outline-secondary rounded-circle" href="https://www.instagram.com/bhivebrandconsultancy" target="_blank" style="border-color: rgba(255,255,255,0.2);"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <h5 class="text-light mb-4 fw-bold">Quick Links</h5>
                <a class="btn btn-link" href="<?= url('/') ?>">Home</a>
                <a class="btn btn-link" href="<?= url('/about') ?>">About Us</a>
                <a class="btn btn-link" href="<?= url('/services') ?>">Services</a>
                <a class="btn btn-link" href="<?= url('/projects') ?>">Projects</a>
                <a class="btn btn-link" href="<?= url('/team') ?>">Team</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4 fw-bold">Our Services</h5>
                <a class="btn btn-link" href="<?= url('/services') ?>">Brand Strategy</a>
                <a class="btn btn-link" href="<?= url('/services') ?>">Social Media Management</a>
                <a class="btn btn-link" href="<?= url('/services') ?>">PR & Media Visibility</a>
                <a class="btn btn-link" href="<?= url('/services') ?>">Talent Consultancy</a>
                <a class="btn btn-link" href="<?= url('/services') ?>">Event Publicity</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4 fw-bold">Contact Info</h5>
                <p class="mb-2" style="color: rgba(255,255,255,0.6);"><i class="fa fa-map-marker-alt me-2 text-primary"></i>Nairobi, Kenya</p>
                <p class="mb-2" style="color: rgba(255,255,255,0.6);"><i class="fa fa-phone-alt me-2 text-primary"></i>+254 711 130 992</p>
                <p class="mb-2" style="color: rgba(255,255,255,0.6);"><i class="fa fa-envelope me-2 text-primary"></i>bhiveconsultancyfirm@gmail.com</p>
                <p class="mb-0" style="color: rgba(255,255,255,0.6);"><i class="fa fa-clock me-2 text-primary"></i>Mon - Sat: 8:00 AM - 6:00 PM</p>
            </div>
        </div>
    </div>
    <div class="container-fluid copyright" style="border-top: 1px solid rgba(255,255,255,0.08);">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0 py-3">
                    &copy; <?= date('Y') ?> <a href="<?= url('/') ?>">B-Hive Brand Consultancy</a>. All Rights Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end py-3" style="color: rgba(255,255,255,0.5);">
                    Building Brands. Creating Visibility. Positioning Talent.
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>

<!-- Header scroll effect -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    var brandBar = document.getElementById('brandBar');
    if (brandBar) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                brandBar.classList.add('scrolled');
            } else {
                brandBar.classList.remove('scrolled');
            }
        });
    }
});
</script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
