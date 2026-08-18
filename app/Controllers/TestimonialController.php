<?php

declare(strict_types=1);

namespace App\Controllers;

class TestimonialController extends Controller
{
    public function index(): void
    {
        $this->view('pages/testimonials', [
            'pageTitle' => 'Testimonials - B-Hive Brand Consultancy | Client Reviews',
            'metaDescription' => 'Read what our clients say about B-Hive Brand Consultancy. Trusted by Safaricom, KCB Bank, Tusker, and other leading brands in Kenya.',
            'metaKeywords' => 'client testimonials, B-Hive reviews, brand consultancy reviews, Kenya PR, Safaricom, KCB Bank',
            'ogImage' => 'img/event-3.jpg',
            'canonicalUrl' => 'https://www.bhiveconsultancy.co.ke/testimonials',
            'activePage' => 'testimonials',
        ]);
    }
}
