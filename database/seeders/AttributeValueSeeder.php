<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AttributeValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        // Fetch all attributes keyed by title for easy lookup
        $attributes = DB::table('attributes')->pluck('id', 'title');

        $valuesByAttribute = [
            'Color' => [
                'Red', 'Blue', 'Green', 'Black', 'White',
                'Yellow', 'Purple', 'Orange', 'Gray', 'Pink',
            ],
            'Size' => [
                'XS', 'S', 'M', 'L', 'XL', 'XXL', '3XL',
            ],
            'Storage' => [
                '32GB', '64GB', '128GB', '256GB', '512GB', '1TB',
            ],
            'RAM' => [
                '2GB', '4GB', '6GB', '8GB', '12GB', '16GB', '32GB',
            ],
            'Material' => [
                'Cotton', 'Polyester', 'Leather', 'Wool',
                'Silk', 'Denim', 'Linen', 'Synthetic',
            ],
            'Weight' => [
                '0.5 kg', '1 kg', '1.5 kg', '2 kg', '5 kg', '10 kg',
            ],
            'Shoe Size' => [
                '36', '37', '38', '39', '40', '41', '42', '43', '44', '45',
            ],
            'Screen Size' => [
                '5.5"', '6.1"', '6.4"', '6.7"', '13.3"', '15.6"', '17"',
            ],
        ];

        $rows = [];

        foreach ($valuesByAttribute as $attributeTitle => $values) {
            $attributeId = $attributes[$attributeTitle] ?? null;

            if (!$attributeId) {
                $this->command->warn("Attribute '{$attributeTitle}' not found. Skipping its values.");
                continue;
            }

            foreach ($values as $index => $valueTitle) {
                $rows[] = [
                    'attribute_id' => $attributeId,
                    'title'        => $valueTitle,
                    'sort_by'      => $index + 1,
                    'is_active'    => true,
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
            }
        }

        DB::table('attribute_values')->insert($rows);
    }
}