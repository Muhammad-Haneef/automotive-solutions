<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BannerSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();

        $banners = [
            [
                'banner' => [
                    'banner_location_id' => 2,
                    'title'              => 'Top Strip Banner',
                    'display'            => 'static',
                    'sort_by'            => 0,
                ],
                'images' => [
                    ['mock/banners/top-banner.png', 'Promo Banner'],
                ],
            ],
            [
                'banner' => [
                    'banner_location_id' => 3,
                    'title'              => 'Homepage Main Banner',
                    'display'            => 'slider',
                    'sort_by'            => 1,
                ],
                'images' => [
                    ['mock/banners/1.jpg', 'Side Banner 1'],
                    ['mock/banners/2.jpg', 'Side Banner 2'],
                    ['mock/banners/3.jpg', 'Slider Banner 3'],
                    ['mock/banners/4.jpg', 'Slider Banner 4'],
                    ['mock/banners/5.jpg', 'Slider Banner 5'],
                    ['mock/banners/6.jpg', 'Slider Banner 6'],
                ],
            ],
            [
                'banner' => [
                    'banner_location_id' => 1,
                    'title'              => 'Secondary Banner',
                    'display'            => 'static',
                    'sort_by'            => 2,
                ],
                'images' => [
                    ['mock/banners/home-appliances.jpg', 'Promo Banner'],
                ],
            ],
            [
                'banner' => [
                    'banner_location_id' => 6,
                    'title'              => 'Before Footer Banner',
                    'display'            => 'static',
                    'sort_by'            => 3,
                ],
                'images' => [
                    ['mock/banners/airpods.jpg',  'Footer Promo Left'],
                    ['mock/banners/sound-and-play.jpg', 'Footer Promo Right'],
                ],
            ],
        ];

        foreach ($banners as $entry) {
            $bannerId = DB::table('banners')->insertGetId(array_merge($entry['banner'], [
                'description' => $entry['banner']['title'],
                'is_active'   => true,
                'created_at'  => $now,
                'updated_at'  => $now,
            ]));

            $images = array_map(fn($img, $index) => [
                'banner_id'       => $bannerId,
                'image_url'       => $img[0],
                'image_alt'       => $img[1],
                'image_link'      => '#',
                'image_sort_by'   => $index,
                'image_is_active' => true,
                'created_at'      => $now,
                'updated_at'      => $now,
            ], $entry['images'], array_keys($entry['images']));

            DB::table('banner_images')->insert($images);
        }
    }
}