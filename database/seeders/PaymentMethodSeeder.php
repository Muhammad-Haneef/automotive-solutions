<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        $methods = [
            // Pakistan
            ['title' => 'Cash on Delivery (PK)', 'description' => 'Pay cash upon delivery', 'group' => 'Pakistan'],
            ['title' => 'Easypaisa', 'description' => 'Pay using Easypaisa mobile wallet', 'group' => 'Pakistan'],
            ['title' => 'JazzCash', 'description' => 'Pay using JazzCash account', 'group' => 'Pakistan'],
            ['title' => 'Bank Transfer (PK)', 'description' => 'Transfer to Pakistani bank account', 'group' => 'Pakistan'],
            ['title' => 'Debit/Credit Card (PK)', 'description' => 'Use Visa/Mastercard in Pakistan', 'group' => 'Pakistan'],
            ['title' => 'SadaPay', 'description' => 'Pay through SadaPay wallet', 'group' => 'Pakistan'],
            ['title' => 'NayaPay', 'description' => 'Use NayaPay digital wallet', 'group' => 'Pakistan'],

            // International
            ['title' => 'PayPal', 'description' => 'Secure international payment', 'group' => 'International'],
            ['title' => 'Stripe', 'description' => 'Pay with international cards', 'group' => 'International'],
            ['title' => 'Wise (TransferWise)', 'description' => 'Send via international transfer', 'group' => 'International'],
            ['title' => 'Skrill', 'description' => 'Online wallet for international use', 'group' => 'International'],
            ['title' => 'Western Union', 'description' => 'Send via Western Union service', 'group' => 'International'],
            ['title' => 'Credit/Debit Card (Int.)', 'description' => 'Use international card gateways', 'group' => 'International'],
            ['title' => 'Revolut', 'description' => 'Pay with Revolut account', 'group' => 'International'],

            // UAE
            ['title' => 'Cash on Delivery (UAE)', 'description' => 'Pay cash on delivery in UAE', 'group' => 'UAE'],
            ['title' => 'Apple Pay (UAE)', 'description' => 'Use Apple Pay in UAE region', 'group' => 'UAE'],
            ['title' => 'Tabby', 'description' => 'Buy now, pay later option', 'group' => 'UAE'],
            ['title' => 'Tamara', 'description' => 'Split payments in UAE', 'group' => 'UAE'],
            ['title' => 'Credit Card (UAE)', 'description' => 'Pay using UAE credit card', 'group' => 'UAE'],
            ['title' => 'Bank Transfer (UAE)', 'description' => 'Transfer to UAE bank account', 'group' => 'UAE'],
            ['title' => 'Google Pay (UAE)', 'description' => 'Pay via Google Pay on Android', 'group' => 'UAE'],
        ];

        foreach ($methods as $index => $method) {
            DB::table('payment_methods')->insert([
                'payment_gateway_id' => 0,
                'title' => $method['title'],
                'description' => $method['description'],
                'sort_by' => $index + 1,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }
    }
}
