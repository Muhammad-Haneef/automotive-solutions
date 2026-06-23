<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WarehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $warehouses = [
            [
                'system_user_id' => 1,
                'title' => 'Karachi Central Warehouse',
                'address' => 'Plot #45, Korangi Industrial Area, Karachi',
                'contact' => '+92-300-1234567',
                'city' => 'Karachi',
                'state' => 'Sindh',
                'country' => 'Pakistan',
                'postal_code' => '74900',
                'latitude' => 24.8607,
                'longitude' => 67.0011,
                'capacity' => 10000,
                'current_stock' => 4200,
                'sort_by' => 1,
                'is_active' => true,
            ],
            [
                'system_user_id' => 3,
                'title' => 'Dubai Freezone Warehouse',
                'address' => 'Jebel Ali Freezone, Dubai',
                'contact' => '+971-50-1234567',
                'city' => 'Dubai',
                'state' => 'Dubai',
                'country' => 'UAE',
                'postal_code' => '00000',
                'latitude' => 25.0657,
                'longitude' => 55.1713,
                'capacity' => 15000,
                'current_stock' => 7500,
                'sort_by' => 3,
                'is_active' => true,
            ],
            [
                'system_user_id' => 1,
                'title' => 'International Fulfillment Center - Singapore',
                'address' => '5 Changi South Lane, Singapore Logistics Hub',
                'contact' => '+65-800-222-8888',
                'city' => 'Singapore',
                'state' => 'Singapore',
                'country' => 'Singapore',
                'postal_code' => '486045',
                'latitude' => 1.3521,
                'longitude' => 103.8198,
                'capacity' => 20000,
                'current_stock' => 5000,
                'sort_by' => 4,
                'is_active' => true,
            ],
        ];

        foreach ($warehouses as $warehouse) {
            DB::table('warehouses')->insert([
                ...$warehouse,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
