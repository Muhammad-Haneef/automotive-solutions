<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SystemUserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        $roles = [
            ['title' => 'Super Admin', 'description' => 'Has unrestricted access to all modules and settings across the platform.'],
            ['title' => 'Admin', 'description' => 'Manages users, system settings, configurations, and core data.'],
            ['title' => 'Operations Manager', 'description' => 'Oversees orders, logistics, and fulfillment workflows.'],
            ['title' => 'Warehouse Supervisor', 'description' => 'Responsible for stock management, packing, and dispatch operations.'],
            ['title' => 'Vendor Manager', 'description' => 'Manages seller onboarding, performance, and compliance.'],
            ['title' => 'Customer Support', 'description' => 'Handles customer inquiries, complaints, and support tickets.'],
            ['title' => 'Sales Representative', 'description' => 'Drives sales initiatives, handles lead generation, and customer acquisition.'],
            ['title' => 'Finance Officer', 'description' => 'Manages payouts, invoicing, refunds, and financial reconciliation.'],
            ['title' => 'Marketing Specialist', 'description' => 'Runs campaigns, promotions, email marketing, and ad strategy.'],
            ['title' => 'Content Manager', 'description' => 'Manages product descriptions, banners, CMS pages, and visual assets.'],
            ['title' => 'Product Manager', 'description' => 'Responsible for product listings, inventory, and categorization.'],
            ['title' => 'Delivery Agent', 'description' => 'Assigned to handle last-mile delivery and customer drop-offs.'],
            ['title' => 'IT Support', 'description' => 'Provides technical assistance, bug reporting, and platform maintenance.'],
            ['title' => 'Security Auditor', 'description' => 'Audits system logs, permissions, and data security policies.'],
            ['title' => 'Vendor', 'description' => 'Access to manage their own store, products, and order processing.'],
            ['title' => 'Affiliate Partner', 'description' => 'Promotes products through referral links and earns commission.'],
            ['title' => 'Logistics Partner', 'description' => 'Third-party courier partner managing deliveries and pickups.'],
            ['title' => 'Customer', 'description' => 'End-user with access to storefront and personal account features.'],
        ];

        foreach ($roles as $index => $role) {
            DB::table('system_user_roles')->insert([
                'title' => $role['title'],
                'description' => $role['description'],
                'sort_by' => $index + 1,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }
    }
}
