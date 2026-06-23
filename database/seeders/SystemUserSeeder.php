<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class SystemUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        $users = [
            [
                'name' => 'Super Admin',
                'email' => 'admin@venta.com',
                'password' => Hash::make('Polo@1234'),
                'system_user_role_id' => 1, // Assuming role ID 1 = Super Admin
            ],
            [
                'name' => 'Customer Support',
                'email' => 'support@venta.com',
                'password' => Hash::make('Polo@1234'),
                'system_user_role_id' => 4, // Assuming role ID 4 = Customer Support
            ],
            [
                'name' => 'Vendor Manager',
                'email' => 'vendor@venta.com',
                'password' => Hash::make('Polo@1234'),
                'system_user_role_id' => 5, // Assuming role ID 5 = Vendor Manager
            ],
        ];

        foreach ($users as $index => $user) {
            DB::table('system_users')->insert([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => $user['password'],
                'system_user_role_id' => $user['system_user_role_id'],
                'sort_by' => $index + 1,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }
    }
}
