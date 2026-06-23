<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SmsCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        $categories = [
            [
                'title' => 'Transactional SMS (Order & Delivery Updates)',
                'description' => 'Provides real-time updates about order confirmations, shipping, and delivery statuses.',
            ],
            [
                'title' => 'Promotional SMS (Marketing & Sales)',
                'description' => 'Boosts customer engagement through offers, discounts, seasonal promotions, and product launches.',
            ],
            [
                'title' => 'Cart Abandonment & Reminder SMS',
                'description' => 'Reminds users of pending carts or incomplete checkouts, nudging them to complete purchases.',
            ],
            [
                'title' => 'Feedback & Review SMS',
                'description' => 'Encourages users to share feedback, testimonials, and rate products or services.',
            ],
            [
                'title' => 'Payment Notifications',
                'description' => 'Informs users about successful payments, failed attempts, or pending dues.',
            ],
            [
                'title' => 'Account & Security Alerts',
                'description' => 'Sends alerts for login attempts, password changes, and suspicious account activity.',
            ],
            [
                'title' => 'Loyalty & Rewards SMS',
                'description' => 'Updates about loyalty points, referral bonuses, and exclusive rewards.',
            ],
            [
                'title' => 'Personalized & Location-Based SMS',
                'description' => 'Tailored messages based on browsing history, preferences, and geolocation.',
            ],
            [
                'title' => 'Event & Appointment Reminders',
                'description' => 'Reminds users of scheduled events, appointments, or reservations.',
            ],
            [
                'title' => 'Subscription & Renewal Reminders',
                'description' => 'Notifies users about upcoming renewals, expirations, or plan changes.',
            ],
            [
                'title' => 'OTP & Verification SMS',
                'description' => 'Delivers one-time passwords and verification codes for secure logins and transactions.',
            ],
        ];

        foreach ($categories as $index => $category) {
            DB::table('sms_categories')->insert([
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
