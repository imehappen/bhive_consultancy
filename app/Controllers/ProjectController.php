<?php

declare(strict_types=1);

namespace App\Controllers;

class ProjectController extends Controller
{
    public function index(): void
    {
        $this->view('pages/projects', [
            'pageTitle' => 'Our Projects - B-Hive Brand Consultancy | Portfolio',
            'metaDescription' => 'Explore our portfolio of branding, PR, and marketing projects delivered by B-Hive Brand Consultancy for top Kenyan brands.',
            'metaKeywords' => 'branding projects, PR campaigns, marketing portfolio, Kenya branding, case studies',
            'ogImage' => 'img/event-2.jpg',
            'canonicalUrl' => 'https://www.bhiveconsultancy.co.ke/projects',
            'activePage' => 'projects',
        ]);
    }
}
