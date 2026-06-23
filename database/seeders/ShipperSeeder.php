<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShipperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $shippers = [
            // ── Pakistan ─────────────────────────────
            [
                'logo' => null,
                'title' => 'TCS Express',
                'email' => 'support@tcs.com.pk',
                'about' => 'TCS is a trusted logistics provider in Pakistan, offering nationwide express and cash on delivery services.',
                'contact_person' => 'Ali Raza',
                'contact_email' => 'ali.raza@tcs.com.pk',
                'contact_phone' => '+92-21-111-123-456',
                'tracking_url' => 'https://www.tcsexpress.com/track',
                'website' => 'https://www.tcsexpress.com',
                'min_delivery_time' => 1,
                'max_delivery_time' => 5,
                'cost_type' => 1, // flat
                'base_shipping_cost' => 250.00,
                'additional_cost_per_kg' => 50.00,
                'additional_cost_per_km' => null,
                'sort_by' => 1,
                'is_active' => true,
            ],
            [
                'logo' => null,
                'title' => 'Leopard Courier',
                'email' => 'info@leopardscourier.com',
                'about' => 'Leopards Courier Services is one of Pakistan’s largest courier companies with a wide delivery network.',
                'contact_person' => 'Sana Malik',
                'contact_email' => 'sana@leopards.com.pk',
                'contact_phone' => '+92-21-111-300-786',
                'tracking_url' => 'https://www.leopardscourier.com/track',
                'website' => 'https://www.leopardscourier.com',
                'min_delivery_time' => 1,
                'max_delivery_time' => 4,
                'cost_type' => 1, // flat
                'base_shipping_cost' => 200.00,
                'additional_cost_per_kg' => 40.00,
                'additional_cost_per_km' => null,
                'sort_by' => 2,
                'is_active' => true,
            ],

            // ── UAE ─────────────────────────────
            [
                'logo' => null,
                'title' => 'Aramex UAE',
                'email' => 'uae.support@aramex.com',
                'about' => 'Aramex offers efficient and fast logistics across UAE with international service capabilities.',
                'contact_person' => 'Mohammed Al Qasim',
                'contact_email' => 'mohammed.qasim@aramex.com',
                'contact_phone' => '+971-4-503-1111',
                'tracking_url' => 'https://www.aramex.com/track',
                'website' => 'https://www.aramex.com',
                'min_delivery_time' => 1,
                'max_delivery_time' => 3,
                'cost_type' => 2, // weight_based
                'base_shipping_cost' => 15.00,
                'additional_cost_per_kg' => 8.00,
                'additional_cost_per_km' => null,
                'sort_by' => 3,
                'is_active' => true,
            ],

            // ── International ─────────────────────────────
            [
                'logo' => null,
                'title' => 'DHL Express Worldwide',
                'email' => 'support@dhl.com',
                'about' => 'DHL is a global leader in logistics, offering international parcel and freight delivery services.',
                'contact_person' => 'Elena Smith',
                'contact_email' => 'elena.smith@dhl.com',
                'contact_phone' => '+1-800-225-5345',
                'tracking_url' => 'https://www.dhl.com/track',
                'website' => 'https://www.dhl.com',
                'min_delivery_time' => 2,
                'max_delivery_time' => 10,
                'cost_type' => 2, // weight_based
                'base_shipping_cost' => 25.00,
                'additional_cost_per_kg' => 15.00,
                'additional_cost_per_km' => null,
                'sort_by' => 4,
                'is_active' => true,
            ],
            [
                'logo' => null,
                'title' => 'FedEx International',
                'email' => 'contact@fedex.com',
                'about' => 'FedEx delivers packages worldwide with express and economy shipping options.',
                'contact_person' => 'John Carter',
                'contact_email' => 'john.carter@fedex.com',
                'contact_phone' => '+1-800-463-3339',
                'tracking_url' => 'https://www.fedex.com/fedextrack',
                'website' => 'https://www.fedex.com',
                'min_delivery_time' => 3,
                'max_delivery_time' => 12,
                'cost_type' => 3, // distance_based
                'base_shipping_cost' => 30.00,
                'additional_cost_per_kg' => 10.00,
                'additional_cost_per_km' => 0.50,
                'sort_by' => 5,
                'is_active' => true,
            ],
        ];

        foreach ($shippers as $shipper) {
            DB::table('shippers')->insert([
                ...$shipper,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
