<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OrderStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        $statuses = [
            ['title' => 'Pending', 'description' => 'Order placed but not yet processed.'],
            ['title' => 'Confirmed', 'description' => 'Order has been confirmed by the seller.'],
            ['title' => 'Processing', 'description' => 'Order is being packed or prepared.'],
            ['title' => 'Shipped', 'description' => 'Order has been dispatched from the warehouse.'],
            ['title' => 'Out for Delivery', 'description' => 'Courier is delivering the order.'],
            ['title' => 'Delivered', 'description' => 'Order has been successfully delivered to the customer.'],
            ['title' => 'Completed', 'description' => 'Order cycle completed. No further action required.'],
            ['title' => 'Cancelled', 'description' => 'Order was cancelled before fulfillment.'],
            ['title' => 'Returned', 'description' => 'Order was returned by the customer.'],
            ['title' => 'Refunded', 'description' => 'Payment was refunded after cancellation or return.'],
            ['title' => 'Failed', 'description' => 'Order failed due to payment or system issues.'],
            ['title' => 'On Hold', 'description' => 'Order is paused due to inventory or customer issue.'],
        ];

        $data = [];
        foreach ($statuses as $index => $status) {
            $data[] = [
                'title' => $status['title'],
                'description' => $status['description'],
                'sort_by' => $index + 1,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        DB::table('order_statuses')->insert($data);
    }
}
