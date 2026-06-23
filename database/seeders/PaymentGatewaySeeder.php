<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentGatewaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gateways = [
            ['title' => 'Stripe', 'slug'=>'stripe', 'api_key' => 'your-stripe-key', 'secret_key' => 'your-stripe-secret'],
            ['title' => 'PayPal', 'slug'=>'paypal', 'api_key' => 'your-paypal-key', 'secret_key' => 'your-paypal-secret'],
            ['title' => 'Razorpay', 'slug'=>'razorpay', 'api_key' => 'your-razorpay-key', 'secret_key' => 'your-razorpay-secret'],
        ];

        foreach ($gateways as $gateway) {
            DB::table('payment_gateways')->insert([
                'title' => $gateway['title'],
                'slug' => $gateway['slug'],
                'api_key' => $gateway['api_key'],
                'secret_key' => $gateway['secret_key'],
            ]);
        }
    }
}
