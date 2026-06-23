<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeaveTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $leaveTypes = [
            [
                'title' => 'Annual Leave',
                'description' => 'Annual paid vacation leave',
                'max_days' => 30,
                'sort_by' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Sick Leave',
                'description' => 'Leave for illness or health recovery',
                'max_days' => 10,
                'sort_by' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'Casual Leave',
                'description' => 'Short leave for urgent personal matters',
                'max_days' => 7,
                'sort_by' => 3,
                'is_active' => true,
            ],
            [
                'title' => 'Maternity Leave',
                'description' => 'Leave for childbirth and recovery (female)',
                'max_days' => 90,
                'sort_by' => 4,
                'is_active' => true,
            ],
            [
                'title' => 'Paternity Leave',
                'description' => 'Leave for fathers after childbirth',
                'max_days' => 7,
                'sort_by' => 5,
                'is_active' => true,
            ],
            [
                'title' => 'Unpaid Leave',
                'description' => 'Leave without pay, usually on request',
                'max_days' => 30,
                'sort_by' => 6,
                'is_active' => true,
            ],
            [
                'title' => 'Bereavement Leave',
                'description' => 'Leave due to a family member\'s death',
                'max_days' => 3,
                'sort_by' => 7,
                'is_active' => true,
            ],
            [
                'title' => 'Marriage Leave',
                'description' => 'Leave for one\'s own marriage',
                'max_days' => 5,
                'sort_by' => 8,
                'is_active' => true,
            ],
            [
                'title' => 'Study Leave',
                'description' => 'Leave for exams or educational purposes',
                'max_days' => 15,
                'sort_by' => 9,
                'is_active' => true,
            ],
            [
                'title' => 'Compensatory Off',
                'description' => 'Leave in lieu of overtime/holiday work',
                'max_days' => 5,
                'sort_by' => 10,
                'is_active' => true,
            ],
            [
                'title' => 'Religious Leave',
                'description' => 'Leave for religious ceremonies or obligations',
                'max_days' => 3,
                'sort_by' => 11,
                'is_active' => true,
            ],
            [
                'title' => 'Quarantine Leave',
                'description' => 'Leave for isolation due to illness exposure',
                'max_days' => 14,
                'sort_by' => 12,
                'is_active' => true,
            ],
        ];

        DB::table('leave_types')->insert($leaveTypes);
    }
}
