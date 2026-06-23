<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class DesignationSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();

        // Fetch all department titles with their IDs
        $departments = DB::table('departments')->pluck('id', 'title');

        $designations = [
            ['title' => 'Chief Executive Officer', 'department_id' => 1],
            ['title' => 'Chief Operating Officer', 'department_id' => 17],
            ['title' => 'Chief Technology Officer', 'department_id' => 8],
            ['title' => 'General Manager', 'department_id' => 1],
            ['title' => 'Logistic Operations Manager', 'department_id' => 5],
            ['title' => 'Finance Manager', 'department_id' => 6],
            ['title' => 'Marketing Manager', 'department_id' => 2],
            ['title' => 'Sales Manager', 'department_id' => 1],
            ['title' => 'HR Manager', 'department_id' => 7],
            ['title' => 'Customer Service Manager', 'department_id' => 3],
            ['title' => 'IT Manager', 'department_id' => 8],
            ['title' => 'Procurement Officer', 'department_id' => 9],
            ['title' => 'Business Analyst', 'department_id' => 10],
            ['title' => 'Software Engineer', 'department_id' => 8],
            ['title' => 'Frontend Developer', 'department_id' => 8],
            ['title' => 'Backend Developer', 'department_id' => 8],
            ['title' => 'Full Stack Developer', 'department_id' => 8],
            ['title' => 'Product Manager', 'department_id' => 10],
            ['title' => 'Warehouse Supervisor', 'department_id' => 11],
            ['title' => 'Logistics Coordinator', 'department_id' => 5],
            ['title' => 'Customer Support Executive', 'department_id' => 3],
            ['title' => 'Sales Executive', 'department_id' => 1],
            ['title' => 'Content Writer', 'department_id' => 2],
            ['title' => 'SEO Specialist', 'department_id' => 2],
            ['title' => 'Graphic Designer', 'department_id' => 2],
            ['title' => 'Accountant', 'department_id' => 6],
            ['title' => 'Data Entry Operator', 'department_id' => 8],
            ['title' => 'Intern', 'department_id' => 7],
        ];

        foreach ($designations as $index => $item) {
            DB::table('designations')->insert([
                'title' => $item['title'],
                'slug' => Str::slug($item['title']),
                'department_id' => $item['department_id'],
                'sort_by' => $index + 1,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }
    }
}
