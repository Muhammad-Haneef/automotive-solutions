<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        // Fetch tags keyed by title => id
        $tags = DB::table('tags')->pluck('id', 'title');

        $productTags = [

            // --- ELECTRONICS ---

            // Outdoor Bullet Security Camera
            1  => ['Tech Gadgets', 'Featured', 'Bestselling Electronics'],

            // Smart Fitness Band
            19 => ['Fitness & Health', 'Best Seller', 'Tech Gadgets', 'Health & Wellness'],

            // 20000mAh Power Bank
            20 => ['Tech Gadgets', 'Best Seller', 'Bestselling Electronics', 'Free Shipping'],

            // Apple iPad Mini 4
            22 => ['Bestselling Electronics', 'Imported', 'Featured', 'Top Rated'],

            // Apple iPad Pro 10.5"
            23 => ['Bestselling Electronics', 'Imported', 'Exclusive', 'Featured'],

            // Mini Portable Smart Projector
            24 => ['Tech Gadgets', 'New in Tech', 'Smart Home', 'Hot Deal'],

            // Professional Full-Frame DSLR Camera
            25 => ['Exclusive', 'Luxury', 'Imported', 'Top Rated'],

            // Mini Wearable Clip-On Action Camera
            26 => ['New in Tech', 'Tech Gadgets', 'Flash Sale', 'Trending'],

            // Waterproof DSLR Camera Sling Bag
            27 => ['Featured', 'Budget-Friendly', 'Free Shipping'],

            // Flexible Gorilla Mini Tripod
            28 => ['Budget-Friendly', 'Under PKR 1000', 'Best Seller'],

            // Bluetooth Digital Sports Watch
            29 => ['Fitness & Health', 'Health & Wellness', 'Tech Gadgets'],

            // Smartwatch with SIM Card Slot
            30 => ['New in Tech', 'Best Seller', 'Tech Gadgets', 'Hot Deal'],

            // True Wireless Earbuds
            45 => ['Bestselling Electronics', 'Top Rated', 'Best Seller', 'Featured'],

            // --- FASHION - WOMEN ---

            // Elegant Bow-Detail Bodycon Midi Dress
            2  => ['New Arrival', 'Fashion Trends', 'Women\'s Picks', 'Featured'],

            // Women's Short Hooded Puffer Jacket (Pink)
            3  => ['Winter Collection', 'Fashion Trends', 'Women\'s Picks', 'Trending'],

            // Glitter Batwing Sleeve Knit Mini Dress
            4  => ['Fashion Trends', 'Women\'s Picks', 'Limited Edition', 'Trending'],

            // Luxury Beaded Lace Bodycon Evening Dress
            5  => ['Luxury', 'Exclusive', 'Limited Stock', 'Gift for Her'],

            // Women's Long Quilted Hooded Winter Coat
            6  => ['Winter Collection', 'Best Seller', 'Women\'s Picks', 'Featured'],

            // Casual Marled Knit Long Sleeve Swing Dress
            7  => ['Budget-Friendly', 'Essentials', 'Women\'s Picks', 'Daily Deal'],

            // Women's Hooded Padded Puffer Jacket Red
            8  => ['Winter Collection', 'Fashion Trends', 'Women\'s Picks', 'Flash Sale'],

            // Multicolor Striped Faux Fur Vest
            9  => ['Limited Edition', 'Trending', 'Women\'s Picks', 'Winter Collection'],

            // Oversized Teddy Bear Faux Fur Long Coat
            10 => ['Luxury', 'Winter Collection', 'Top Rated', 'Women\'s Picks'],

            // Oversized Ribbed Turtleneck Sweater Orange
            11 => ['New Arrival', 'Fashion Trends', 'Women\'s Picks', 'Autumn Collection'],

            // Classic Ribbed Turtleneck Sweater Black
            12 => ['Best Seller', 'Essentials', 'Women\'s Picks', 'Top Rated'],

            // Plaid Cropped Jacket & Wide-Leg Pants Set
            13 => ['Trending', 'Fashion Trends', 'Women\'s Picks', 'Editor\'s Choice'],

            // Women's Lace-Up V-Neck Crop Knit Sweater
            41 => ['New Arrival', 'Fashion Trends', 'Women\'s Picks', 'Trending'],

            // Women's Twist Front V-Neck Knit Sweater Mustard
            51 => ['New Arrival', 'Fashion Trends', 'Women\'s Picks', 'Autumn Collection'],

            // Women's Lace-Up Deep V Crop Sweater Pink
            52 => ['Fashion Trends', 'Women\'s Picks', 'Spring Collection', 'Trending'],

            // Women's Oversized Military Shirt Jacket Khaki
            53 => ['Trending', 'Fashion Trends', 'Women\'s Picks', 'New Arrival'],

            // Women's Bear Print Colorblock Oversized Sweater
            56 => ['Trending', 'Women\'s Picks', 'New Arrival', 'Autumn Collection'],

            // Women's Twist Front V-Neck Knit Sweater Dark Mustard
            60 => ['Autumn Collection', 'Women\'s Picks', 'Essentials', 'Fashion Trends'],

            // Women's Puff Sleeve Ruffle Crop Top White
            61 => ['Summer Collection', 'Spring Collection', 'Women\'s Picks', 'New Arrival'],

            // Women's Cross Strap V-Neck Knit Sweater Grey
            62 => ['Essentials', 'Women\'s Picks', 'Best Seller', 'Fashion Trends'],

            // --- FASHION - MEN ---

            // Men's Knit Beanie & Neck Warmer Winter Set
            14 => ['Winter Collection', 'Men\'s Picks', 'Budget-Friendly', 'Essentials'],

            // Men's Open-Front Knit Cardigan Sweater
            16 => ['Men\'s Picks', 'Essentials', 'Autumn Collection', 'Best Seller'],

            // Men's Slim Fit Single Button Formal Suit
            17 => ['Luxury', 'Men\'s Picks', 'Featured', 'Gift for Him'],

            // Men's Fleece-Lined Visor Beanie & Scarf Set
            18 => ['Winter Collection', 'Men\'s Picks', 'Budget-Friendly', 'Essentials'],

            // Men's Hooded Windbreaker Jacket Olive Green
            48 => ['Men\'s Picks', 'New Arrival', 'Trending', 'Seasonal'],

            // Men's Washed Denim Shirt with Sleeve Print
            49 => ['Men\'s Picks', 'Fashion Trends', 'Trending', 'New Arrival'],

            // Men's Classic Wool Blend Long Overcoat Camel
            50 => ['Luxury', 'Men\'s Picks', 'Winter Collection', 'Top Rated'],

            // Men's Lightweight Hooded Windbreaker Jacket Sage
            58 => ['Men\'s Picks', 'New Arrival', 'Trending', 'Spring Collection'],

            // --- FASHION - ACCESSORIES ---

            // Pure Cashmere Solid Fringe Scarf Ivory
            15 => ['Luxury', 'Gift Idea', 'Winter Collection', 'Best Seller'],

            // Premium Cashmere Wrap Scarf White
            34 => ['Luxury', 'Gift for Her', 'Winter Collection', 'Essentials'],

            // Unisex Cable Knit Winter Scarf Charcoal Grey
            54 => ['Essentials', 'Winter Collection', 'Budget-Friendly', 'Gift Idea'],

            // Streetwear Logo Baseball Cap Yellow
            55 => ['Trending', 'Fashion Trends', 'New Arrival', 'Summer Collection'],

            // --- FASHION - FOOTWEAR ---

            // Retro Suede High-Top Sneakers Yellow (side view)
            47 => ['Trending', 'New Arrival', 'Limited Edition', 'Top Rated'],

            // Retro Suede High-Top Sneakers Yellow (front view)
            59 => ['Best Seller', 'Trending', 'Fashion Trends', 'Imported'],

            // --- FASHION - BAGS ---

            // Waterproof Outdoor Hiking Backpack 40L
            46 => ['Outdoor', 'Featured', 'Best Seller', 'Free Shipping'],

            // Waterproof Outdoor Hiking Backpack 45L
            57 => ['New Arrival', 'Featured', 'Top Rated', 'Free Shipping'],

            // Handcrafted Pearl Beaded Half-Moon Clutch Bag
            63 => ['Luxury', 'Handmade', 'Gift for Her', 'Limited Edition'],

            // --- BEAUTY ---

            // Nano Ionic Facial Steamer
            35 => ['Beauty Must-Haves', 'Best Seller', 'Women\'s Picks', 'Health & Wellness'],

            // Electric Rotating Facial Cleansing Brush Set
            36 => ['Beauty Must-Haves', 'New Arrival', 'Trending', 'Women\'s Picks'],

            // --- BABY & TODDLER ---

            // Baby Musical Light-Up Drum Toy
            21 => ['Kids Collection', 'Best Seller', 'Gift Idea', 'Featured'],

            // Baby Bunny Musical Rattle with LED Lights
            38 => ['Kids Collection', 'New Arrival', 'Gift Idea', 'Under PKR 1000'],

            // Baby Manhattan Soft Teether Rattle Ball
            40 => ['Kids Collection', 'Best Seller', 'Eco-Friendly', 'Gift Idea'],

            // Baby Penguin Plush Night Light Sleep Soother
            42 => ['Kids Collection', 'Featured', 'Gift Idea', 'New Arrival'],

            // Kids Ice Cream Cart Pretend Play Toy Set
            43 => ['Kids Collection', 'Best Seller', 'Gift Idea', 'Featured'],

            // Kids Electric Drum Kit Set
            44 => ['Kids Collection', 'Hot Deal', 'Gift for Him', 'Featured'],

            // --- FURNITURE ---

            // Mid-Century Modern Upholstered Ottoman Footstool
            31 => ['Home & Living', 'For the Home', 'Editor\'s Choice', 'Featured'],

            // Artistic Horse-Leg Console Table
            33 => ['Luxury', 'Exclusive', 'Home & Living', 'Handmade'],

            // --- HOME & KITCHEN ---

            // Stretch Dining Chair Slipcover Floral Print
            32 => ['Home & Living', 'For the Home', 'Budget-Friendly', 'Daily Deal'],

            // Borosilicate Glass Travel Mug with Cork Band
            37 => ['Eco-Friendly', 'For the Home', 'Gift Idea', 'Best Seller'],

            // Ceramic Olive Oil Dispenser Bottle
            39 => ['Kitchen Essentials', 'For the Home', 'Gift Idea', 'Eco-Friendly'],
        ];

        $rows = [];

        foreach ($productTags as $productId => $tagTitles) {
            foreach ($tagTitles as $sortIndex => $tagTitle) {
                $tagId = $tags[$tagTitle] ?? null;

                if (!$tagId) {
                    $this->command->warn("Tag '{$tagTitle}' not found. Skipping for product #{$productId}.");
                    continue;
                }

                $rows[] = [
                    'product_id' => $productId,
                    'tag_id'     => $tagId,
                    'sort_by'    => $sortIndex + 1,
                    'created_at' => $now,
                    'updated_at' => $now,
                ];
            }
        }

        DB::table('product_tags')->insert($rows);
    }
}