<?php

declare(strict_types=1);

namespace App\Controllers;

class ServiceController extends Controller
{
    public function index(): void
    {
        $this->view('pages/services', [
            'pageTitle' => 'Our Services - B-Hive Brand Consultancy | Brand Strategy, PR & Marketing',
            'metaDescription' => 'B-Hive offers brand strategy, social media management, PR, talent consultancy, campaigns, event publicity, and mentorship services in Nairobi, Kenya.',
            'metaKeywords' => 'brand strategy, social media management, PR agency, media visibility, talent consultancy, influencer marketing, event publicity, mentorship Kenya',
            'ogImage' => 'img/event-1.jpg',
            'canonicalUrl' => 'https://www.bhiveconsultancy.co.ke/services',
            'activePage' => 'services',
        ]);
    }
}
