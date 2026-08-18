<?php

declare(strict_types=1);

namespace App\Controllers;

class HomeController extends Controller
{
    public function index(): void
    {
        $this->view('pages/home', [
            'pageTitle' => 'B-Hive Brand Consultancy | Building Brands. Creating Visibility. Positioning Talent.',
            'metaDescription' => 'B-Hive Brand Consultancy is Kenya\'s premier brand consultancy in Nairobi. We build brands, create visibility, and position talent for lasting impact.',
            'metaKeywords' => 'B-Hive, brand consultancy, Kenya, brand strategy, PR agency Nairobi, marketing, talent positioning, digital visibility',
            'ogImage' => 'img/about-company.jpg',
            'canonicalUrl' => 'https://www.bhiveconsultancy.co.ke/',
            'activePage' => 'home',
        ]);
    }
}
