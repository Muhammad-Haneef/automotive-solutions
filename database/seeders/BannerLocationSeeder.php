<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BannerLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();
        $url = url('/');
        $bannerLocations = [
            [
                // 1
                'title' => 'Custom Location Banners',
                'description' => 'This will be used by code to create custom banner locations as needed.',
                'layout_image' => "$url/images/flash_sale_banner.jpg",
                'sort_by' => 11,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                // 2
                'title' => 'Top Header Banner',
                'description' => 'Displayed above the navigation bar.',
                'layout_image' => "$url/images/top_header_banner.jpg",
                'sort_by' => 4,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                // 3
                'title' => 'Home Page Banners',
                'description' => 'Main banner slider for the home Page.',
                'layout_image' => "$url/images/main_slider.jpg",
                'sort_by' => 1,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                // 4
                'title' => 'Sidebar Banners',
                'description' => 'Banners displayed in the sidebar.',
                'layout_image' => "$url/images/sidebar_banner.jpg",
                'sort_by' => 2,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                // 5
                'title' => 'Sidebar banners for Category Page',
                'description' => 'Appears at the sidebar of category listing pages.',
                'layout_image' => "$url/images/category_page_sidebar_banner.jpg",
                'sort_by' => 5,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                // 6
                'title' => 'Footer Banners',
                'description' => 'Promotional banners displayed in the footer.',
                'layout_image' => "$url/images/footer_banner.jpg",
                'sort_by' => 3,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                // 7
                'title' => 'Product List Page Banners',
                'description' => 'Shown on the product listing page.',
                'layout_image' => "$url/images/product_list_banner.jpg",
                'sort_by' => 6,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                // 8
                'title' => 'Product Detail Banners',
                'description' => 'Shown on individual product detail pages. Will be displayed after product details',
                'layout_image' => "$url/images/product_detail_banner.jpg",
                'sort_by' => 6,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            /*
            [
                // 9
                'title' => 'Cart Page Banner',
                'description' => 'Promotional messages or offers shown on the cart page.',
                'layout_image' => "$url/images/cart_page_banner.jpg",
                'sort_by' => 7,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                // 10
                'title' => 'Checkout Page Banner',
                'description' => 'Banner shown during the checkout process.',
                'layout_image' => "$url/images/checkout_page_banner.jpg",
                'sort_by' => 8,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                // 11
                'title' => 'Mobile App Banner',
                'description' => 'Optimized banner for mobile app home screen.',
                'layout_image' => "$url/images/mobile_app_banner.jpg",
                'sort_by' => 9,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            */

        ];

        DB::table('banner_locations')->insert($bannerLocations);
    }
}
