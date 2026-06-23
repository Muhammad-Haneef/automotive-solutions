<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductVideoSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();

        $videoTitles = [
            'Full Product Demo',
            'Quick Overview',
            'Unboxing Video',
            'How It Works',
            'Setup in 5 Minutes',
            'Top Features Explained',
            'Before You Buy — Watch This',
            'Real User Experience',
            'Installation Walkthrough',
            'Product in Action',
            'Honest Review',
            'Beginner\'s Guide',
            'Advanced Tips',
            'Comparison with Similar Products',
            'Why We Love This Product',
            'First Impressions',
            'Deep Dive Review',
            'Common Mistakes to Avoid',
            'Pro Tips for Best Results',
            'Worth the Money?',
        ];

        $youtubeIds = [
            'dQw4w9WgXcQ',
            'ScMzIvxBSi4',
            'kJQP7kiw5Fk',
            '9bZkp7q19f0',
            'JGwWNGJdvx8',
            'OPf0YbXqDm0',
            'YQHsXMglC9A',
            'fRh_vgS2dFE',
            'hT_nvWreIhg',
            'CevxZvSJLk8',
            'pRpeEdMmmQ0',
            'PT2_F-1esPk',
            'nfWlot6h_JM',
            'RgKAFK5djSk',
            'e-ORhEE9VVg',
            'ZbZSe6N_BXs',
            'y6120QOlsfU',
            'Sagg08DrO5U',
            '09R8_2nJtjg',
            'lp-EO5I60KA',
        ];

        $sections = DB::table('product_video_sections')
            ->orderBy('product_id')
            ->orderBy('id')
            ->get()
            ->groupBy('product_id');

        foreach ($sections as $productId => $productSections) {
            foreach ($productSections as $section) {
                $videoCount = rand(3, 6);

                $titlePool = $videoTitles;
                shuffle($titlePool);
                $selectedTitles = array_slice($titlePool, 0, $videoCount);

                foreach ($selectedTitles as $index => $title) {
                    DB::table('product_videos')->insert([
                        'product_id'               => $productId,
                        'product_video_section_id' => $section->id,
                        'title'                    => $title,
                        'url'                      => 'https://www.youtube.com/watch?v=' . $youtubeIds[array_rand($youtubeIds)],
                        'sort_by'                  => $index + 1,
                        'is_active'                => true,
                        'created_at'               => $now,
                        'updated_at'               => $now,
                    ]);
                }
            }
        }
    }
}