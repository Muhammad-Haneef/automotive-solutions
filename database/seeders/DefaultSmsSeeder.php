<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DefaultSmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
    }
}


DB::table('default_sms')->insert([
    // Transactional SMS (Order & Delivery Updates)
    [
        'sms_category_id' => 1,
        'title' => 'Order Confirmation',
        'sms' => 'Hi {{name}}, your order #{{order_id}} has been confirmed! 🎉 Estimated delivery: {{delivery_date}}. Track: {{tracking_link}}'
    ],
    [
        'sms_category_id' => 1,
        'title' => 'Order Dispatched',
        'sms' => 'Your order #{{order_id}} has been shipped via {{courier_name}}. 📦 Track here: {{tracking_link}}'
    ],
    [
        'sms_category_id' => 1,
        'title' => 'Out for Delivery',
        'sms' => '🚚 Your order is out for delivery today. Expect delivery between {{delivery_time}}. Call your rider: {{rider_contact}}'
    ],
    [
        'sms_category_id' => 1,
        'title' => 'Order Delivered',
        'sms' => 'Your order has been delivered successfully! ✅ Need assistance? Contact support: {{support_link}}'
    ],
    [
        'sms_category_id' => 1,
        'title' => 'Order Cancelled',
        'sms' => 'Dear {{name}}, your order #{{order_id}} has been canceled. Refund (if applicable) will be processed soon.'
    ],
    [
        'sms_category_id' => 1,
        'title' => 'Refund Processed',
        'sms' => 'Your refund for order #{{order_id}} has been processed. Expect credit within 3-5 days.'
    ],

    // Promotional SMS (Marketing & Sales)
    [
        'sms_category_id' => 2,
        'title' => 'Flash Sale Alert',
        'sms' => '⚡ 50% OFF on all products for 24 hours! Hurry, shop now: {{link}} Use code: SALE50'
    ],
    [
        'sms_category_id' => 2,
        'title' => 'New Arrivals Announcement',
        'sms' => '🚀 Just launched! Explore our latest summer collection now: {{link}}'
    ],
    [
        'sms_category_id' => 2,
        'title' => 'Exclusive Coupon Code',
        'sms' => '🎁 Special for you! Use code WELCOME10 to get 10% OFF your first purchase. Shop now: {{link}}'
    ],
    [
        'sms_category_id' => 2,
        'title' => 'Limited Stock Alert',
        'sms' => '⏳ Your favorite product is almost sold out! Grab yours now before it’s gone: {{link}}'
    ],
    [
        'sms_category_id' => 2,
        'title' => 'Discount Offer',
        'sms' => 'Exclusive offer for you, {{name}}! Get {{discount}}% off on your next order. Use code {{coupon_code}}.'
    ],
    [
        'sms_category_id' => 2,
        'title' => 'Festival & Holiday Sales',
        'sms' => '🎊 Eid Sale is LIVE! Get Buy 1 Get 1 FREE on all fashion items. Limited time only: {{link}}'
    ],

    // Cart Abandonment & Reminder SMS
    [
        'sms_category_id' => 3,
        'title' => 'Cart Abandonment Reminder',
        'sms' => '👀 Your cart is waiting! Complete your purchase before your items sell out. Checkout now: {{link}}'
    ],
    [
        'sms_category_id' => 3,
        'title' => 'Price Drop Alert',
        'sms' => '📉 Great news! The price of the item in your cart has dropped. Don’t miss out! {{link}}'
    ],
    [
        'sms_category_id' => 3,
        'title' => 'Low Stock Warning',
        'sms' => '🚨 Almost gone! The product in your cart is about to sell out. Grab it before it’s too late! {{link}}'
    ],
    [
        'sms_category_id' => 3,
        'title' => 'Free Shipping Incentive',
        'sms' => '🎁 Complete your order now and enjoy FREE shipping for today only! {{link}}'
    ],

    // Customer Engagement Feedback & Review SMS
    [
        'sms_category_id' => 4,
        'title' => 'Review Request',
        'sms' => 'Hi {{name}}, we hope you loved your purchase! 🌟 Leave a review & get 10% OFF your next order: {{review_link}}'
    ],
    [
        'sms_category_id' => 4,
        'title' => 'Feedbak Request',
        'sms' => 'Thank you for your purchase, {{name}}! We’d love to hear your feedback. Share your review here: {{review_link}}'
    ],
    [
        'sms_category_id' => 4,
        'title' => 'Customer Satisfaction Survey',
        'sms' => 'Help us improve! Take a 1-minute survey and get a special discount on your next order: {{link}}'
    ],
    [
        'sms_category_id' => 4,
        'title' => 'Referral Program',
        'sms' => 'Invite a friend & earn $10 credit when they shop! Start referring now: {{link}}'
    ],

    // Payment Notifications
    [
        'sms_category_id' => 5,
        'title' => 'Payment Confirmation',
        'sms' => 'Payment of {{amount}} for order #{{order_id}} has been received. Thank you for shopping with us!'
    ],
    [
        'sms_category_id' => 5,
        'title' => 'Payment Failed',
        'sms' => 'Your payment for order #{{order_id}} has failed. Please update your payment method and try again.'
    ],

    // Account & Security Alerts
    [
        'sms_category_id' => 5,
        'title' => 'OTP Verification',
        'sms' => 'Your one-time password (OTP) is {{otp_code}}. Do not share this with anyone!'
    ],
    [
        'sms_category_id' => 5,
        'title' => 'Password Reset Request',
        'sms' => 'Click here to reset your password: {{reset_link}}. If this wasn’t you, contact support.'
    ],
    [
        'sms_category_id' => 5,
        'title' => 'Unusual Login Alert',
        'sms' => '⚠️ We detected a login from a new device. If this wasn’t you, change your password immediately.'
    ],
    [
        'sms_category_id' => 5,
        'title' => 'Subscription Confirmation',
        'sms' => 'Welcome to our premium membership! 🎉 Enjoy exclusive benefits. Explore now: {{link}}'
    ],

    // Loyalty & Rewards SMS
    [
        'sms_category_id' => 6,
        'title' => 'Loyalty Points Update',
        'sms' => 'You’ve earned 200 new loyalty points! 🎉 Redeem them for rewards: {{link}}'
    ],
    [
        'sms_category_id' => 6,
        'title' => 'VIP Access',
        'sms' => '🌟 Exclusive for VIP members: Early access to our new collection. Shop now before everyone else: {{link}}'
    ],
    [
        'sms_category_id' => 6,
        'title' => 'Birthday Discount',
        'sms' => '🎂 Happy Birthday {{name}}! Enjoy a 20% OFF gift from us. Use code: BDAY20. Valid for 48 hours! {{link}}'
    ],
    [
        'sms_category_id' => 6,
        'title' => 'Special Offer for Returning Customers',
        'sms' => 'We miss you! 💙 Here’s 15% OFF to welcome you back. Use code: WELCOME15 at checkout. {{link}}'
    ],

    // Personalized & Location-Based SMS
    [
        'sms_category_id' => 7,
        'title' => 'Location-Based Offer',
        'sms' => '📍 Shopping near Dubai Mall? Visit our store today & get an exclusive 15% OFF. Show this SMS at checkout!',
    ],
    [
        'sms_category_id' => 7,
        'title' => 'Personalized Product Recommendations',
        'sms' => 'Hi {{name}}, based on your recent purchase, you might love our new arrivals. Check them out: {{link}}',
    ],
    [
        'sms_category_id' => 7,
        'title' => 'Back-in-Stock Notification',
        'sms' => 'Good news! Your favorite item is back in stock. Order now before it sells out again! {{link}}',
    ],
    [
        'sms_category_id' => 7,
        'title' => 'Weather-Based Promotion',
        'sms' => '☀️ Summer is here! Stay cool with our latest collection of breathable fabrics. Shop now: {{link}}',
    ],
]);
