<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductVideoSectionSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();

        $sectionTitles = [
            'Product Overview',
            'Features & Highlights',
            'How to Use',
            'Unboxing & First Look',
            'Customer Reviews',
            'Installation Guide',
            'Comparison & Demo',
            'Tips & Tricks',
            'Before You Buy',
            'Expert Opinion',
        ];

        $sectionDescriptions = [
            'A complete overview of the product and its key features.',
            'Highlighting the best features and what makes this product stand out.',
            'Step-by-step guide on how to use this product effectively.',
            'Unboxing the product and taking a first look at what is inside.',
            'Real customer video reviews and feedback on this product.',
            'Detailed installation and setup guide for this product.',
            'Side-by-side comparison and live demonstration of the product.',
            'Useful tips and tricks to get the most out of this product.',
            'Everything you need to know before making a purchase decision.',
            'Expert analysis and in-depth opinion on this product.',
        ];

        for ($productId = 1; $productId <= 63; $productId++) {
            $sectionCount = rand(1, 3);

            $titlePool = $sectionTitles;
            shuffle($titlePool);
            $selectedTitles = array_slice($titlePool, 0, $sectionCount);

            foreach ($selectedTitles as $index => $title) {
                DB::table('product_video_sections')->insert([
                    'product_id'       => $productId,
                    'title'            => $title,
                    'description'      => $sectionDescriptions[array_rand($sectionDescriptions)],
                    'per_row'          => rand(1, 3),
                    'show_title'       => rand(0, 1),
                    'show_description' => rand(0, 1),
                    'show_video_title' => rand(0, 1),
                    'sort_by'          => $index + 1,
                    'is_active'        => true,
                    'created_at'       => $now,
                    'updated_at'       => $now,
                ]);
            }
        }
    }
}