<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        $departments = [
            'Sales', // 1
            'Marketing', // 2
            'Customer Support', // 3
            'Technical Support', // 4
            'Logistics', // 5
            'Finance', // 6
            'Human Resources', // 7
            'IT Department', // 8
            'Procurement', // 9
            'Product Management', // 10
            'Warehouse', // 11
            'Returns & Refunds', // 12
            'Legal', // 13
            'Quality Assurance', // 14
            'Vendor Relations', // 15
            'Security', // 16
            'Operations', // 17
        ];

        foreach ($departments as $index => $title) {
            DB::table('departments')->insert([
                'title' => $title,
                'slug' => Str::slug($title),
                'sort_by' => $index + 1,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }
    }
}
