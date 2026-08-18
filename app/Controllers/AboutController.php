<?php

declare(strict_types=1);

namespace App\Controllers;

class AboutController extends Controller
{
    public function index(): void
    {
        $this->view('pages/about', [
            'pageTitle' => 'About Us - B-Hive Brand Consultancy | Our Story & Mission',
            'metaDescription' => 'Learn about B-Hive Brand Consultancy, founded by Betty Kithinji in Nairobi, Kenya. Discover our mission to build brands, create visibility, and empower youth.',
            'metaKeywords' => 'B-Hive, about us, Betty Kithinji, brand consultancy Kenya, Nairobi agency, brand strategy, PR, mentorship',
            'ogImage' => 'img/about-betty.jpg',
            'canonicalUrl' => 'https://www.bhiveconsultancy.co.ke/about',
            'activePage' => 'about',
        ]);
    }
}
