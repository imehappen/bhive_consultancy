<?php

declare(strict_types=1);

namespace App\Controllers;

class FeatureController extends Controller
{
    public function index(): void
    {
        $this->view('pages/features', [
            'pageTitle' => 'Why Choose Us - B-Hive Brand Consultancy | Our Edge',
            'metaDescription' => 'Discover what makes B-Hive Brand Consultancy stand out. Expertise in brand strategy, social media growth, PR media visibility, and youth mentorship.',
            'metaKeywords' => 'B-Hive features, brand strategy expertise, social media growth, PR media visibility, youth mentorship Kenya',
            'ogImage' => 'img/mentorship-1.jpg',
            'canonicalUrl' => 'https://www.bhiveconsultancy.co.ke/features',
            'activePage' => 'features',
        ]);
    }
}
