<?php
$pageTitle = $pageTitle ?? 'B-Hive Brand Consultancy | Building Brands. Creating Visibility. Positioning Talent.';
$metaDescription = $metaDescription ?? 'B-Hive Brand Consultancy is a leading branding, PR and digital visibility agency in Nairobi, Kenya. We build brands, create visibility and position talent for businesses, public figures and influencers.';
$metaKeywords = $metaKeywords ?? 'B-Hive, brand consultancy Kenya, PR agency Nairobi, branding, marketing, digital visibility, talent consultancy, influencer marketing, event publicity, mentorship Kenya';
$ogImage = $ogImage ?? 'img/logo.png';
$canonicalUrl = $canonicalUrl ?? 'https://www.bhiveconsultancy.co.ke' . ($_SERVER['REQUEST_URI'] ?? '/');
$pageType = $pageType ?? 'website';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <!-- Primary SEO -->
    <title><?= e($pageTitle) ?></title>
    <meta name="description" content="<?= e($metaDescription) ?>">
    <meta name="keywords" content="<?= e($metaKeywords) ?>">
    <meta name="author" content="B-Hive Brand Consultancy">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <link rel="canonical" href="<?= e($canonicalUrl) ?>">

    <!-- Geo Meta -->
    <meta name="geo.region" content="KE-30">
    <meta name="geo.placename" content="Nairobi">
    <meta name="geo.position" content="-1.286389;36.817223">
    <meta name="ICBM" content="-1.286389, 36.817223">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="<?= e($pageType) ?>">
    <meta property="og:url" content="<?= e($canonicalUrl) ?>">
    <meta property="og:title" content="<?= e($pageTitle) ?>">
    <meta property="og:description" content="<?= e($metaDescription) ?>">
    <meta property="og:image" content="<?= e('https://www.bhiveconsultancy.co.ke/' . ltrim($ogImage, '/')) ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="B-Hive Brand Consultancy">
    <meta property="og:locale" content="en_KE">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= e($pageTitle) ?>">
    <meta name="twitter:description" content="<?= e($metaDescription) ?>">
    <meta name="twitter:image" content="<?= e('https://www.bhiveconsultancy.co.ke/' . ltrim($ogImage, '/')) ?>">
    <meta name="twitter:site" content="@bhiveconsult">
    <meta name="twitter:creator" content="@bhiveconsult">

    <!-- Favicons -->
    <link rel="icon" type="image/svg+xml" href="favicon.svg">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="manifest" href="site.webmanifest">
    <meta name="theme-color" content="#e0b20e">
    <meta name="msapplication-TileColor" content="#0d0d0d">
    <meta name="msapplication-TileImage" content="android-chrome-192x192.png">

    <!-- Preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ProfessionalService",
        "name": "B-Hive Brand Consultancy",
        "alternateName": "B-Hive",
        "url": "https://www.bhiveconsultancy.co.ke",
        "logo": "https://www.bhiveconsultancy.co.ke/img/logo.png",
        "image": "https://www.bhiveconsultancy.co.ke/img/about-company.jpg",
        "description": "B-Hive Brand Consultancy is a leading branding, PR and digital visibility agency in Nairobi, Kenya.",
        "foundingDate": "2023",
        "founder": {
            "@type": "Person",
            "name": "Betty Kithinji",
            "jobTitle": "Founder & Brand Consultant",
            "url": "https://www.bhiveconsultancy.co.ke/about"
        },
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Nairobi",
            "addressCountry": "KE"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": -1.286389,
            "longitude": 36.817223
        },
        "areaServed": [
            { "@type": "Country", "name": "Kenya" },
            { "@type": "City", "name": "Nairobi" }
        ],
        "serviceType": [
            "Brand Strategy",
            "Social Media Management",
            "Public Relations",
            "Talent Consultancy",
            "Event Publicity",
            "Digital Marketing",
            "Mentorship"
        ],
        "priceRange": "$$",
        "telephone": "+254711130992",
        "email": "bhiveconsultancyfirm@gmail.com",
        "sameAs": [],
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "5",
            "reviewCount": "50"
        }
    }
    </script>

    <style>
        body { font-family: 'Inter', 'Open Sans', sans-serif; }
    </style>
</head>

<body>
    <?php include __DIR__ . '/../partials/header.php'; ?>
    <?php include __DIR__ . '/../partials/navbar.php'; ?>

    <?= $content ?? '' ?>

    <?php include __DIR__ . '/../partials/footer.php'; ?>
</body>

</html>