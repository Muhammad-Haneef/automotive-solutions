<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        $attributes = [
            [
                'title'       => 'Color',
                'input_type'  => 'color',
                'description' => 'The color of the product.',
                'sort_by'     => 1,
                'is_active'   => true,
                'created_at'  => $now,
                'updated_at'  => $now,
            ],
            [
                'title'       => 'Size',
                'input_type'  => 'text',
                'description' => 'The size of the product (clothing, footwear, etc.).',
                'sort_by'     => 2,
                'is_active'   => true,
                'created_at'  => $now,
                'updated_at'  => $now,
            ],
            [
                'title'       => 'Storage',
                'input_type'  => 'text',
                'description' => 'Internal storage capacity for electronic devices.',
                'sort_by'     => 3,
                'is_active'   => true,
                'created_at'  => $now,
                'updated_at'  => $now,
            ],
            [
                'title'       => 'RAM',
                'input_type'  => 'number',
                'description' => 'RAM size in GB for electronic devices.',
                'sort_by'     => 4,
                'is_active'   => true,
                'created_at'  => $now,
                'updated_at'  => $now,
            ],
            [
                'title'       => 'Material',
                'input_type'  => 'text',
                'description' => 'The material the product is made from.',
                'sort_by'     => 5,
                'is_active'   => true,
                'created_at'  => $now,
                'updated_at'  => $now,
            ],
            [
                'title'       => 'Weight',
                'input_type'  => 'number',
                'description' => 'Product weight in kilograms.',
                'sort_by'     => 6,
                'is_active'   => true,
                'created_at'  => $now,
                'updated_at'  => $now,
            ],
            [
                'title'       => 'Shoe Size',
                'input_type'  => 'number',
                'description' => 'Shoe size in EU standard.',
                'sort_by'     => 7,
                'is_active'   => true,
                'created_at'  => $now,
                'updated_at'  => $now,
            ],
            [
                'title'       => 'Screen Size',
                'input_type'  => 'number',
                'description' => 'Display screen size in inches.',
                'sort_by'     => 8,
                'is_active'   => true,
                'created_at'  => $now,
                'updated_at'  => $now,
            ],
        ];

        DB::table('attributes')->insert($attributes);
    }
}