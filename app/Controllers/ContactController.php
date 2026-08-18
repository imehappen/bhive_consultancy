<?php

declare(strict_types=1);

namespace App\Controllers;

class ContactController extends Controller
{
    public function index(): void
    {
        $this->view('pages/contact', [
            'pageTitle' => 'Contact Us - B-Hive Brand Consultancy | Get in Touch',
            'metaDescription' => 'Contact B-Hive Brand Consultancy in Nairobi, Kenya. Reach us for brand consultancy, PR, digital marketing, and talent positioning services.',
            'metaKeywords' => 'contact B-Hive, Nairobi brand consultancy, get in touch, hire PR agency Kenya',
            'ogImage' => 'img/logo.png',
            'canonicalUrl' => 'https://www.bhiveconsultancy.co.ke/contact',
            'activePage' => 'contact',
        ]);
    }

    public function submit(): void
    {
        /** @var \App\Core\Request $request */
        $request = $this->container->get('request');

        $name    = trim((string) $request->input('name', ''));
        $email   = trim((string) $request->input('email', ''));
        $subject = trim((string) $request->input('subject', ''));
        $message = trim((string) $request->input('message', ''));

        $data = [
            'pageTitle' => 'Contact Us - B-Hive Brand Consultancy | Get in Touch',
            'metaDescription' => 'Contact B-Hive Brand Consultancy in Nairobi, Kenya.',
            'metaKeywords' => 'contact B-Hive, Nairobi brand consultancy, get in touch',
            'ogImage' => 'img/logo.png',
            'canonicalUrl' => 'https://www.bhiveconsultancy.co.ke/contact',
            'activePage' => 'contact',
        ];

        if ($name === '' || $email === '' || $subject === '' || $message === '') {
            $this->view('pages/contact', array_merge($data, [
                'flash' => ['type' => 'error', 'message' => 'Please fill in all fields.'],
                'old' => ['name' => $name, 'email' => $email, 'subject' => $subject, 'message' => $message],
            ]));
            return;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->view('pages/contact', array_merge($data, [
                'flash' => ['type' => 'error', 'message' => 'Please enter a valid email address.'],
                'old' => ['name' => $name, 'email' => $email, 'subject' => $subject, 'message' => $message],
            ]));
            return;
        }

        try {
            /** @var \App\Core\Database $db */
            $db = $this->container->get('database');
            $pdo = $db->getPdo();

            $stmt = $pdo->prepare("INSERT INTO contacts (name, email, subject, message, created_at) VALUES (:name, :email, :subject, :message, NOW())");
            $stmt->execute([
                ':name'    => $name,
                ':email'   => $email,
                ':subject' => $subject,
                ':message' => $message,
            ]);

            $this->view('pages/contact', array_merge($data, [
                'flash' => ['type' => 'success', 'message' => 'Thank you! Your message has been sent successfully. We will get back to you shortly.'],
            ]));
        } catch (\Exception $e) {
            $this->view('pages/contact', array_merge($data, [
                'flash' => ['type' => 'error', 'message' => 'Something went wrong. Please try again later.'],
                'old' => ['name' => $name, 'email' => $email, 'subject' => $subject, 'message' => $message],
            ]));
        }
    }
}
