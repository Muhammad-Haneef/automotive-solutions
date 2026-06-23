<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

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
                'image' => 'about-us.jpg',
                'title' => 'About Us',
                'slug' => 'about-us',
                'content' => 'Learn more about our company, values, and mission.',
            ],
            [
                'image' => 'contact-us.jpg',
                'title' => 'Contact Us',
                'slug' => 'contact-us',
                'content' => 'Get in touch with our support or sales teams.',
            ],
            [
                'image' => 'privacy-policy.jpg',
                'title' => 'Privacy Policy',
                'slug' => 'privacy-policy',
                'content' => 'Read our privacy practices regarding your data.',
            ],
            [
                'image' => 'terms-and-conditions.jpg',
                'title' => 'Terms & Conditions',
                'slug' => 'terms-conditions',
                'content' => 'Understand the terms of using our services.',
            ],
            [
                'image' => 'faq.jpg',
                'title' => 'FAQs',
                'slug' => 'faqs',
                'content' => 'Common questions and their answers for quick help.',
            ],
            [
                'image' => 'return-policy.jpg',
                'title' => 'Return Policy',
                'slug' => 'return-policy',
                'content' => 'Details about product returns and refund process.',
            ],
            [
                'image' => 'shipping-info.jpg',
                'title' => 'Shipping Information',
                'slug' => 'shipping-info',
                'content' => 'All you need to know about delivery and shipping.',
            ],
            [
                'image' => 'careers.jpg',
                'title' => 'Careers',
                'slug' => 'careers',
                'content' => 'Explore job opportunities and join our team.',
            ],
        ];

        foreach ($pages as $index => $page) {
            DB::table('pages')->insert([
                'image' => $page['image'],
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
