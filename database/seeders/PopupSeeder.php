<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PopupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        DB::table('popups')->insert([
            [
                'title' => 'Summer Sale!',
                'image' => 'popups/summer-sale.jpg',
                'display_pages' => 'home,shop',
                'link' => '/summer-sale',
                'start_date' => '2025-07-01',
                'end_date' => '2025-07-31',
                'sort_by' => 1,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Download Our App',
                'image' => 'popups/app-promo.png',
                'display_pages' => 'all',
                'link' => '/download-app',
                'start_date' => '2025-07-10',
                'end_date' => '2025-08-10',
                'sort_by' => 2,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Back to School Deals',
                'image' => 'popups/back-to-school.jpg',
                'display_pages' => 'home,school',
                'link' => '/school-deals',
                'start_date' => '2025-08-01',
                'end_date' => '2025-08-30',
                'sort_by' => 3,
                'is_active' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
