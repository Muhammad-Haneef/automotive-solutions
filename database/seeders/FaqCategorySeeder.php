<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FaqCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        $faqCategories = [
            ['title' => 'Ordering Process', 'description' => 'Questions about placing orders on the platform.'],
            ['title' => 'Payment & Billing', 'description' => 'Payment methods, invoices, and billing concerns.'],
            ['title' => 'Shipping & Delivery', 'description' => 'Delivery times, shipping partners, and tracking.'],
            ['title' => 'Returns & Refunds', 'description' => 'Policies and steps for returning or refunding items.'],
            ['title' => 'Account & Security', 'description' => 'Managing your account and keeping it secure.'],
            ['title' => 'Product Information', 'description' => 'Details about products, specs, and availability.'],
            ['title' => 'Discounts & Promotions', 'description' => 'How to apply coupons, find deals, and more.'],
            ['title' => 'Technical Support', 'description' => 'Issues related to website or mobile app functionality.'],
            ['title' => 'Subscription Services', 'description' => 'Recurring orders, subscriptions, and management.'],
            ['title' => 'Loyalty & Rewards', 'description' => 'Earning and redeeming loyalty points.'],
            ['title' => 'Gift Cards & Vouchers', 'description' => 'Using and sending gift cards or promo codes.'],
            ['title' => 'Privacy & Policies', 'description' => 'Data use, privacy policies, and legal concerns.'],

            // Additional Categories
            ['title' => 'Order Cancellation', 'description' => 'Guidelines on how to cancel your orders.'],
            ['title' => 'Pre-orders', 'description' => 'How pre-orders work and expected delivery.'],
            ['title' => 'Out of Stock Items', 'description' => 'What to do when an item is unavailable.'],
            ['title' => 'International Shipping', 'description' => 'FAQs about orders delivered outside the country.'],
            ['title' => 'Customs & Duties', 'description' => 'Taxes or duties applicable to international orders.'],
            ['title' => 'Corporate & Bulk Orders', 'description' => 'Special handling for large or business orders.'],
            ['title' => 'Contacting Support', 'description' => 'How to get in touch with our support team.'],
            ['title' => 'Mobile App Support', 'description' => 'FAQs related to using the mobile application.'],
            ['title' => 'Live Chat & Chatbot', 'description' => 'How to use live support chat features.'],
            ['title' => 'Order Status Updates', 'description' => 'Understanding what each status means.'],
        ];

        foreach ($faqCategories as $index => $category) {
            DB::table('faq_categories')->insert([
                'title' => $category['title'],
                'description' => $category['description'],
                'sort_by' => $index + 1,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }
    }
}
