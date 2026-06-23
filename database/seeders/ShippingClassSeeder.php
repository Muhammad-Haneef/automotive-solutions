<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ShippingClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        DB::table('shipping_classes')->insert([
            [
                'title' => 'Standard Shipping',
                'description' => 'Delivery within 5-7 business days.',
                'base_rate' => 200.00,
                'per_weight_rate' => 50.00,
                'sort_by' => 1,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Express Shipping',
                'description' => 'Delivery within 2-3 business days.',
                'base_rate' => 400.00,
                'per_weight_rate' => 80.00,
                'sort_by' => 2,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Same Day Delivery',
                'description' => 'Only available in selected cities.',
                'base_rate' => 600.00,
                'per_weight_rate' => 100.00,
                'sort_by' => 3,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        ]);
    }
}
