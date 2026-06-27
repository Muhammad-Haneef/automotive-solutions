<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        $pages = [
            [
                'banner' => 'pages/about-us.jpg',
                'title' => 'About Us',
                'slug' => 'about-us',
                'content' => 'Learn more about our company, values, and mission.',
            ],
            [
                'banner' => 'pages/contact-us.jpg',
                'title' => 'Contact Us',
                'slug' => 'contact-us',
                'content' => 'Get in touch with our support or sales teams.',
            ],
            [
                'banner' => 'pages/privacy-policy.jpg',
                'title' => 'Privacy Policy',
                'slug' => 'privacy-policy',
                'content' => 'Read our privacy practices regarding your data.',
            ],
            [
                'banner' => 'pages/terms-and-conditions.jpg',
                'title' => 'Terms & Conditions',
                'slug' => 'terms-conditions',
                'content' => 'Understand the terms of using our services.',
            ],
            [
                'banner' => 'pages/faq.jpg',
                'title' => 'FAQs',
                'slug' => 'faqs',
                'content' => 'Common questions and their answers for quick help.',
            ],
            [
                'banner' => 'pages/return-policy.jpg',
                'title' => 'Return Policy',
                'slug' => 'return-policy',
                'content' => 'Details about product returns and refund process.',
            ],
            [
                'banner' => 'pages/shipping-info.jpg',
                'title' => 'Shipping Information',
                'slug' => 'shipping-info',
                'content' => 'All you need to know about delivery and shipping.',
            ],
            [
                'banner' => 'pages/careers.jpg',
                'title' => 'Careers',
                'slug' => 'careers',
                'content' => 'Explore job opportunities and join our team.',
            ],
        ];

        foreach ($pages as $index => $page) {
            DB::table('pages')->insert([
                'banner' => $page['banner'],
                'title' => $page['title'],
                'slug' => Str::slug($page['slug']),
                'content' => $page['content'],
                'sort_by' => $index + 1,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }
    }
}
