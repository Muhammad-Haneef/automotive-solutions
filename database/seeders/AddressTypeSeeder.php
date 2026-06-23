<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class AddressTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        $addressTypes = [
            [
                'title' => 'Home',
                'description' => 'Residential address of the user',
                'sort_by' => 1,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Office',
                'description' => 'Workplace or business address',
                'sort_by' => 2,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Billing',
                'description' => 'Billing address used for invoicing',
                'sort_by' => 3,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Shipping',
                'description' => 'Address where orders are delivered',
                'sort_by' => 4,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Other',
                'description' => 'Any other type of address',
                'sort_by' => 5,
                'is_active' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        DB::table('address_types')->insert($addressTypes);
    }
}
