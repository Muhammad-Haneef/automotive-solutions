<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['title' => 'E-Commerce Tips'],
            ['title' => 'Product Reviews'],
            ['title' => 'Marketing & SEO'],
            ['title' => 'Customer Success Stories'],
            ['title' => 'Latest Trends'],
            ['title' => 'Buying Guides'],
            ['title' => 'Business Growth'],
            ['title' => 'Tech & Innovations'],
            ['title' => 'Seasonal Promotions'],
            ['title' => 'How-To Articles'],
            ['title' => 'Brand Spotlights'],
            ['title' => 'Industry News'],
            ['title' => 'User Experience'],
            ['title' => 'Dropshipping Tips'],
            ['title' => 'Logistics & Shipping'],
            ['title' => 'Inventory Management'],
            ['title' => 'Payment Solutions'],
            ['title' => 'Mobile Commerce'],
            ['title' => 'Social Media Strategies'],
            ['title' => 'Email Marketing'],
        ];

        foreach ($categories as $category) {
            DB::table('blog_categories')->insert([
                'title' => $category['title'],
                'slug' => Str::slug($category['title']),
            ]);
        }
    }
}
