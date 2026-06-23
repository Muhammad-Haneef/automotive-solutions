<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            ['title' => "New Arrival"],
            ['title' => "Best Seller"],
            ['title' => "Limited Edition"],
            ['title' => "Flash Sale"],
            ['title' => "Discount"],
            ['title' => "Trending"],
            ['title' => "Exclusive"],
            ['title' => "Featured"],
            ['title' => "Hot Deal"],
            ['title' => "Popular"],
            ['title' => "Clearance Sale"],
            ['title' => "Back in Stock"],
            ['title' => "Eco-Friendly"],
            ['title' => "Organic"],
            ['title' => "Handmade"],
            ['title' => "Luxury"],
            ['title' => "Budget-Friendly"],
            ['title' => "Gift Idea"],
            ['title' => "Tech Gadgets"],
            ['title' => "Fashion Trends"],
            ['title' => "Home & Living"],
            ['title' => "Fitness & Health"],
            ['title' => "Limited Stock"],
            ['title' => "Pre-Order"],
            ['title' => "Bundle Offer"],
            ['title' => "Seasonal"],
            ['title' => "Summer Collection"],
            ['title' => "Winter Collection"],
            ['title' => "Spring Collection"],
            ['title' => "Autumn Collection"],
            ['title' => "Anniversary Deal"],
            ['title' => "Daily Deal"],
            ['title' => "Weekly Pick"],
            ['title' => "Editor’s Choice"],
            ['title' => "Essentials"],
            ['title' => "Staff Pick"],
            ['title' => "Top Rated"],
            ['title' => "New in Tech"],
            ['title' => "Gadget of the Month"],
            ['title' => "Made in Pakistan"],
            ['title' => "Imported"],
            ['title' => "Cash on Delivery"],
            ['title' => "Free Shipping"],
            ['title' => "Same Day Delivery"],
            ['title' => "Under PKR 1000"],
            ['title' => "Bestselling Electronics"],
            ['title' => "Men’s Picks"],
            ['title' => "Women’s Picks"],
            ['title' => "Kids Collection"],
            ['title' => "For the Home"],
            ['title' => "Kitchen Essentials"],
            ['title' => "Smart Home"],
            ['title' => "Work From Home"],
            ['title' => "School Supplies"],
            ['title' => "Gaming Essentials"],
            ['title' => "Pet Friendly"],
            ['title' => "Beauty Must-Haves"],
            ['title' => "Health & Wellness"],
            ['title' => "Limited Time Offer"],
            ['title' => "Just Launched"],
            ['title' => "Gift for Him"],
            ['title' => "Gift for Her"],
            ['title' => "Women's Picks"],
            ['title' => "Men's Picks"],
            ['title' => "Outdoor"],
            ['title' => "Editor's Choice"],
        ];

        DB::table('tags')->insert($tags);
    }
}
