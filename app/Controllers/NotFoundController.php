<?php

declare(strict_types=1);

namespace App\Controllers;

class NotFoundController extends Controller
{
    public function index(): void
    {
        http_response_code(404);
        $this->view('pages/404', [
            'pageTitle' => 'Page Not Found - B-Hive Brand Consultancy',
            'metaDescription' => 'The page you are looking for could not be found.',
            'canonicalUrl' => 'https://www.bhiveconsultancy.co.ke/',
        ]);
    }
}
