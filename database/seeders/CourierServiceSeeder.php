<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class CourierServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        $couriers = [
            // 🇵🇰 Pakistan Couriers
            [
                'title' => 'TCS',
                'email' => 'support@tcs.com.pk',
                'about' => 'TCS is a leading courier company in Pakistan.',
                'contact_person' => 'TCS Support',
                'contact_email' => 'help@tcs.com.pk',
                'contact_phone' => '+92 21 111 123 456',
                'tracking_url' => 'https://www.tcsexpress.com/Tracking',
                'website' => 'https://www.tcsexpress.com/',
            ],
            [
                'title' => 'Leopard Courier',
                'email' => 'info@leopardscourier.com',
                'about' => 'Leopard Courier is a fast-growing courier in Pakistan.',
                'contact_person' => 'Customer Service',
                'contact_email' => 'support@leopardscourier.com',
                'contact_phone' => '+92 42 111 300 786',
                'tracking_url' => 'https://www.leopardscourier.com/leopards-tracking',
                'website' => 'https://www.leopardscourier.com/',
            ],
            [
                'title' => 'BlueEx',
                'email' => 'info@blue-ex.com',
                'about' => 'BlueEx offers complete logistics and ecommerce solutions.',
                'contact_person' => 'BlueEx Team',
                'contact_email' => 'support@blue-ex.com',
                'contact_phone' => '+92 21 111 258 339',
                'tracking_url' => 'https://www.blue-ex.com/track',
                'website' => 'https://www.blue-ex.com/',
            ],
            [
                'title' => 'Pakistan Post',
                'email' => 'info@pakpost.gov.pk',
                'about' => 'Pakistan Post is the national postal service.',
                'contact_person' => 'Postmaster General',
                'contact_email' => 'support@pakpost.gov.pk',
                'contact_phone' => '+92 51 111 111 117',
                'tracking_url' => 'http://ep.gov.pk/track/',
                'website' => 'http://ep.gov.pk/',
            ],

            // 🌍 International Couriers
            [
                'title' => 'DHL Express',
                'email' => 'support@dhl.com',
                'about' => 'DHL is a global logistics leader.',
                'contact_person' => 'DHL Customer Support',
                'contact_email' => 'help@dhl.com',
                'contact_phone' => '+49 228 902 435',
                'tracking_url' => 'https://www.dhl.com/en/express/tracking.html',
                'website' => 'https://www.dhl.com/',
            ],
            [
                'title' => 'FedEx',
                'email' => 'info@fedex.com',
                'about' => 'FedEx offers global express transportation.',
                'contact_person' => 'FedEx Team',
                'contact_email' => 'support@fedex.com',
                'contact_phone' => '+1 800 463 3339',
                'tracking_url' => 'https://www.fedex.com/apps/fedextrack/',
                'website' => 'https://www.fedex.com/',
            ],
            [
                'title' => 'UPS',
                'email' => 'contact@ups.com',
                'about' => 'UPS delivers to over 220 countries worldwide.',
                'contact_person' => 'UPS Support',
                'contact_email' => 'help@ups.com',
                'contact_phone' => '+1 800 742 5877',
                'tracking_url' => 'https://www.ups.com/track',
                'website' => 'https://www.ups.com/',
            ],
            [
                'title' => 'Aramex',
                'email' => 'info@aramex.com',
                'about' => 'Aramex provides international and domestic express delivery.',
                'contact_person' => 'Aramex Contact',
                'contact_email' => 'support@aramex.com',
                'contact_phone' => '+971 600 544000',
                'tracking_url' => 'https://www.aramex.com/track/shipments',
                'website' => 'https://www.aramex.com/',
            ],

            // 🇦🇪 UAE Couriers
            [
                'title' => 'Emirates Post',
                'email' => 'info@emiratespost.ae',
                'about' => 'Emirates Post provides local and international delivery.',
                'contact_person' => 'Customer Care',
                'contact_email' => 'support@emiratespost.ae',
                'contact_phone' => '+971 600 599999',
                'tracking_url' => 'https://www.emiratespost.ae/Portal/Track',
                'website' => 'https://www.emiratespost.ae/',
            ],
            [
                'title' => 'Fetchr',
                'email' => 'info@fetchr.us',
                'about' => 'Fetchr is a last-mile delivery app in the Middle East.',
                'contact_person' => 'Fetchr Help',
                'contact_email' => 'support@fetchr.us',
                'contact_phone' => '+971 4 811 6400',
                'tracking_url' => 'https://fetchr.us/track',
                'website' => 'https://fetchr.us/',
            ],
            [
                'title' => 'Quiqup',
                'email' => 'contact@quiqup.com',
                'about' => 'Quiqup delivers smarter and faster in UAE.',
                'contact_person' => 'Quiqup Support',
                'contact_email' => 'help@quiqup.com',
                'contact_phone' => '+971 4 249 6100',
                'tracking_url' => 'https://www.quiqup.com/track',
                'website' => 'https://www.quiqup.com/',
            ],
            [
                'title' => 'Jeebly',
                'email' => 'info@jeebly.com',
                'about' => 'Jeebly is a delivery solutions provider in UAE.',
                'contact_person' => 'Jeebly Team',
                'contact_email' => 'support@jeebly.com',
                'contact_phone' => '+971 4 881 4999',
                'tracking_url' => 'https://www.jeebly.com/track',
                'website' => 'https://www.jeebly.com/',
            ],
            [
                'title' => 'Zajel',
                'email' => 'info@zajel.com',
                'about' => 'Zajel offers courier and logistics services across UAE.',
                'contact_person' => 'Zajel Contact',
                'contact_email' => 'support@zajel.com',
                'contact_phone' => '+971 600 500 601',
                'tracking_url' => 'https://www.zajel.com/track-shipment',
                'website' => 'https://www.zajel.com/',
            ],
        ];

        foreach ($couriers as $index => $courier) {
            DB::table('courier_services')->insert([
                'logo' => null,
                'title' => $courier['title'],
                'email' => $courier['email'],
                'about' => $courier['about'],
                'contact_person' => $courier['contact_person'],
                'contact_email' => $courier['contact_email'],
                'contact_phone' => $courier['contact_phone'],
                'tracking_url' => $courier['tracking_url'],
                'website' => $courier['website'],
                'min_delivery_time' => rand(1, 3),
                'max_delivery_time' => rand(4, 7),
                'cost_type' => rand(1, 3),
                'base_shipping_cost' => rand(200, 1000),
                'additional_cost_per_kg' => rand(50, 200),
                'additional_cost_per_km' => rand(5, 20),
                'sort_by' => $index + 1,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }
    }
}
