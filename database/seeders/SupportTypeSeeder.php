<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SupportTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        $supportTypes = [
            ['title' => 'Technical Support', 'description' => 'Issues related to website, mobile app, or user interface bugs.'],
            ['title' => 'Order Support', 'description' => 'Assistance with tracking, modifying, or canceling orders.'],
            ['title' => 'Payment Support', 'description' => 'Help with payment failures, billing issues, and refunds.'],
            ['title' => 'Account Support', 'description' => 'Login issues, account verification, or profile updates.'],
            ['title' => 'Returns & Refunds', 'description' => 'Help with returns, replacements, and refund policies.'],
            ['title' => 'Shipping & Delivery', 'description' => 'Issues related to delivery status, delays, and shipping options.'],
            ['title' => 'Product Inquiry', 'description' => 'Questions about product specifications, features, or usage.'],
            ['title' => 'General Inquiry', 'description' => 'Any other general support query.'],
            ['title' => 'Order Not Received', 'description' => 'Order was marked delivered but not received by the customer.'],
            ['title' => 'Damaged Product', 'description' => 'Product arrived damaged or defective.'],
            ['title' => 'Wrong Product Delivered', 'description' => 'Received the wrong item or variant.'],
            ['title' => 'Stock Availability', 'description' => 'Check if product is available or out of stock.'],
            ['title' => 'Bulk Order Inquiry', 'description' => 'Support for placing bulk or wholesale orders.'],
            ['title' => 'Promotions & Coupons', 'description' => 'Help with discount codes, vouchers, or offers.'],
            ['title' => 'Loyalty & Rewards', 'description' => 'Issues with reward points, loyalty programs, or redemptions.'],
            ['title' => 'Subscription Management', 'description' => 'Managing product subscriptions, renewals, or cancellations.'],
            ['title' => 'Seller Support', 'description' => 'Dedicated support for marketplace sellers.'],
            ['title' => 'Complaint / Feedback', 'description' => 'Customer complaints or experience feedback.'],
            ['title' => 'Invoice Request', 'description' => 'Need a digital or physical invoice.'],
            ['title' => 'KYC / Verification', 'description' => 'Know Your Customer document verification.'],
            ['title' => 'Technical API Support', 'description' => 'Support related to API integration for partners or sellers.'],
            ['title' => 'Legal Inquiry', 'description' => 'Support regarding terms of service, privacy, or legal concerns.'],
            ['title' => 'Privacy & Data', 'description' => 'Help with GDPR, data requests, or account deletion.'],
            ['title' => 'Warehouse Pickup', 'description' => 'Inquiry about local pickup or click-and-collect service.'],
            ['title' => 'Product Customization', 'description' => 'Questions about engraving, packaging, or special requests.'],
            ['title' => 'Chatbot Support Issue', 'description' => 'Issues with automated chatbot or virtual assistant.'],
            ['title' => 'Mobile App Support', 'description' => 'Bug reports or help related to iOS or Android apps.'],
            ['title' => 'Third-Party Courier Issue', 'description' => 'Delays or mishandling by external delivery services.'],
            ['title' => 'Product Installation', 'description' => 'Support for assembling or installing delivered products.'],
            ['title' => 'Payment Gateway Error', 'description' => 'Failed transaction or gateway malfunction during checkout.'],
        ];

        foreach ($supportTypes as $index => $type) {
            DB::table('support_types')->insert([
                'title' => $type['title'],
                'description' => $type['description'],
                'sort_by' => $index + 1,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }
    }
}
