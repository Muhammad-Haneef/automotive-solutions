<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class NotificationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            'New Order Placed',
            'Order Shipped',
            'Order Delivered',
            'Order Cancelled',
            'New Customer Registered',
            'Low Stock Alert',
            'Product Back in Stock',
            'Promotional Offer',
            'Abandoned Cart Reminder',
            'Support Ticket Reply',
            'Password Reset',
            'System Update',
            'Admin Message',
            'Review Received',
            'Subscription Expiry Reminder',
        ];

        $now = Carbon::now();
        $data = [];

        foreach ($types as $index => $title) {
            $data[] = [
                'title' => $title,
                'slug' => Str::slug($title),
                'sort_by' => $index + 1,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        DB::table('notification_types')->insert($data);
    }
}
