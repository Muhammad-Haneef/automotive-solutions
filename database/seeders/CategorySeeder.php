<?php
/*

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['title' => 'Electronics', 'slug' => Str::slug('Electronics'), 'description' => 'Electronic gadgets and devices.'],
            ['title' => 'Fashion', 'slug' => Str::slug('Fashion'), 'description' => 'Clothing, footwear, and accessories.'],
            ['title' => 'Home & Furniture', 'slug' => Str::slug('Home & Furniture'), 'description' => 'Furniture and home decor.'],
            ['title' => 'Beauty & Health', 'slug' => Str::slug('Beauty & Health'), 'description' => 'Beauty products and health supplements.'],
            ['title' => 'Sports & Outdoors', 'slug' => Str::slug('Sports & Outdoors'), 'description' => 'Sports equipment and outdoor gear.'],
            ['title' => 'Toys & Games', 'slug' => Str::slug('Toys & Games'), 'description' => 'Toys, games, and puzzles for kids.']
        ];

        DB::table('categories')->insert($categories);
        }
        
        }
*/

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $filePath = base_path('database/data/google-categories.json');

        if (!file_exists($filePath)) {
            throw new \Exception("JSON file not found at: {$filePath}");
        }

        $categories = json_decode(file_get_contents($filePath), true);

        if (!$categories) {
            throw new \Exception("Invalid JSON format.");
        }

        DB::table('categories')->truncate();

        $this->storeCategories($categories);
    }

    private function storeCategories(array $categories, int $parentId = 0): void
    {
        foreach ($categories as $index => $category) {

            $title = trim($category['title']);

            $slug = $this->generateUniqueSlug($title);

            $id = DB::table('categories')->insertGetId([
                'parent_id' => $parentId,

                'title' => $title,
                'slug' => $slug,
                'description' => null,

                'thumbnail' => null,
                'banner' => null,
                'icon' => null,

                'meta_title' => $title,
                'meta_description' => null,
                'meta_keywords' => null,

                'show_banner' => true,
                'show_description' => true,
                'show_description_at' => 1,

                'sort_by' => $index,
                'is_active' => true,

                'created_at' => now(),
                'updated_at' => now(),
            ]);

            if (!empty($category['children'])) {
                $this->storeCategories($category['children'], $id);
            }
        }
    }

    private function generateUniqueSlug(string $title): string
    {
        $baseSlug = Str::slug($title);
        $slug = $baseSlug;
        $counter = 1;

        while (DB::table('categories')->where('slug', $slug)->exists()) {
            $slug = $baseSlug . '-' . $counter++;
        }

        return $slug;
    }
}