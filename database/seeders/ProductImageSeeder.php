<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        $gallery = [
            '2'  => [1, 2, 3, 4, 5],
            '3'  => [1, 2, 3, 4, 5],
            '6'  => [1, 2, 3, 4, 5],
            '7'  => [1, 2, 3, 4, 5],
            '9'  => [1, 2],
            '10' => [1, 2, 3, 4],
            '11' => [1, 2, 3, 4],
            '12' => [1, 2, 3, 4, 5],
            '14' => [1, 2, 3, 4],
            '15' => [1, 2, 3, 4, 5, 6],
            '17' => [1, 2, 3, 4],
        ];

        foreach ($gallery as $product_id => $images) {
            foreach ($images as $image) {
                DB::table('product_images')->insert([
                    'product_id' => $product_id,
                    'image'      => 'mock/products/' . $product_id . '/' . $image . '.jpg',
                    'link'       => '#',
                    'title'      => 'PRODUCT GALLERY ',
                    'sort_by'    => $image,
                    'created_at' => $now,
                    'updated_at' => $now,
                ]);
            }
        }
    }
}