<!-- Navbar -->
<nav class="navbar navbar-expand-lg main-nav sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <a href="<?= url('/') ?>" class="navbar-brand d-flex align-items-center">
            <img src="img/logo.png" alt="B-Hive" style="height: 40px;" class="me-2">
            <span class="fw-bold text-white d-lg-none">B-Hive</span>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav me-auto">
                <?php $active = $activePage ?? 'home'; ?>
                <a href="<?= url('/') ?>" class="nav-item nav-link <?= $active === 'home' ? 'active' : '' ?>">Home</a>
                <a href="<?= url('/about') ?>" class="nav-item nav-link <?= $active === 'about' ? 'active' : '' ?>">About</a>
                <a href="<?= url('/services') ?>" class="nav-item nav-link <?= $active === 'services' ? 'active' : '' ?>">Services</a>
                <a href="<?= url('/projects') ?>" class="nav-item nav-link <?= $active === 'projects' ? 'active' : '' ?>">Projects</a>
                <a href="<?= url('/team') ?>" class="nav-item nav-link <?= $active === 'team' ? 'active' : '' ?>">Team</a>
                <a href="<?= url('/contact') ?>" class="nav-item nav-link <?= $active === 'contact' ? 'active' : '' ?>">Contact</a>
            </div>
            <a href="<?= url('/contact') ?>" class="btn btn-primary rounded-pill py-2 px-4">Get a Quote</a>
        </div>
    </div>
</nav>
