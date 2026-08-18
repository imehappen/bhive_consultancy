<?php

declare(strict_types=1);

namespace App\Controllers;

class TeamController extends Controller
{
    public function index(): void
    {
        $this->view('pages/team', [
            'pageTitle' => 'Our Team - B-Hive Brand Consultancy | Meet the Experts',
            'metaDescription' => 'Meet the talented team behind B-Hive Brand Consultancy in Nairobi. Dedicated brand consultants, PR specialists, and marketing professionals.',
            'metaKeywords' => 'B-Hive team, brand consultants Nairobi, marketing professionals Kenya, PR specialists',
            'ogImage' => 'img/team-betty.jpg',
            'canonicalUrl' => 'https://www.bhiveconsultancy.co.ke/team',
            'activePage' => 'team',
        ]);
    }
}
