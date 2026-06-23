<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $groups = [
            ['title' => 'Retail Customers', 'description' => 'Regular customers who purchase items at retail prices.'],
            ['title' => 'Wholesale Buyers', 'description' => 'Bulk buyers who get special discounts on large orders.'],
            ['title' => 'VIP Customers', 'description' => 'High-value customers who receive exclusive offers and early access to new products.'],
            ['title' => 'Subscribers', 'description' => 'Customers who have subscribed to newsletters and promotional campaigns.'],
            ['title' => 'Loyalty Members', 'description' => 'Customers enrolled in a rewards program to earn points and benefits.'],
            ['title' => 'Corporate Clients', 'description' => 'Businesses that purchase in bulk for corporate use or resale.'],
            ['title' => 'Distributors', 'description' => 'Partners authorized to resell and distribute products.'],
            ['title' => 'Dealers', 'description' => 'Authorized dealers with access to special pricing and support.'],
            ['title' => 'Franchisees', 'description' => 'Independent entities operating under the brand name.'],
            ['title' => 'First-time Buyers', 'description' => 'New customers eligible for first-order promotions.'],
            ['title' => 'Returning Customers', 'description' => 'Repeat buyers with a history of multiple orders.'],
            ['title' => 'Inactive Users', 'description' => 'Users who haven’t interacted or purchased in a long time.'],
            ['title' => 'Beta Testers', 'description' => 'Customers invited to test upcoming features or products.'],
            ['title' => 'Internal Staff', 'description' => 'Employees or team members with access to staff-only pricing or features.'],
            ['title' => 'Marketplace Sellers', 'description' => 'Vendors registered on the multi-vendor platform.'],
        ];

        foreach ($groups as $group) {
            DB::table('user_groups')->insert([
                'title' => $group['title'],
                'description' => $group['description'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
