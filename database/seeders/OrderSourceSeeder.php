<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OrderSourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        $sources = [
            [
                'title' => 'Subscriber',
                'description' => 'Orders generated from newsletter or promotional email subscribers.',
            ],
            [
                'title' => 'User Registration',
                'description' => 'Orders placed right after new user sign-ups.',
            ],
            [
                'title' => 'Contact Us',
                'description' => 'Orders initiated through contact form inquiries.',
            ],
            [
                'title' => 'Callback Request',
                'description' => 'Orders confirmed through callback requests by users.',
            ],
            [
                'title' => 'User Registration by Admin',
                'description' => 'Orders placed under accounts created manually by admin.',
            ],
            [
                'title' => 'Refer a Friend',
                'description' => 'Orders made by referred customers.',
            ],
            [
                'title' => 'Quick Buy Products Listing',
                'description' => 'Orders made via the quick-buy list of products.',
            ],
            [
                'title' => 'Quick Buy Product Page',
                'description' => 'Direct quick-buy actions from individual product pages.',
            ],
            [
                'title' => 'Add to Cart',
                'description' => 'Orders that began from the Add to Cart flow.',
            ],
            [
                'title' => 'Whatsapp Order',
                'description' => 'Orders confirmed through WhatsApp communication.',
            ],
            [
                'title' => 'Mobile Order',
                'description' => 'Orders placed using mobile app or mobile browser.',
            ],
        ];

        $data = [];
        foreach ($sources as $index => $source) {
            $data[] = [
                'title' => $source['title'],
                'description' => $source['description'],
                'sort_by' => $index + 1,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        DB::table('order_sources')->insert($data);
    }
}
