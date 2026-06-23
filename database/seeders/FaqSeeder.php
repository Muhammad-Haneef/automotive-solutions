<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    public function run(): void
    {
        $faqs = [

            // 1. Ordering Process
            ['faq_category_id' => 1, 'q' => 'How do I place an order?', 'a' => 'Add items to your cart and proceed to checkout.'],
            ['faq_category_id' => 1, 'q' => 'Can I cancel an order?', 'a' => 'Orders can be cancelled within 1 hour of placement.'],
            ['faq_category_id' => 1, 'q' => 'Can I place an order without an account?', 'a' => 'Yes, guest checkout is available.'],
            ['faq_category_id' => 1, 'q' => 'Why was my order cancelled automatically?', 'a' => 'Orders may be cancelled if payment fails or stock runs out.'],
            ['faq_category_id' => 1, 'q' => 'Can I change the shipping address after ordering?', 'a' => 'Contact support within 1 hour to update address.'],
            ['faq_category_id' => 1, 'q' => 'What is the minimum order amount?', 'a' => 'There is no minimum order requirement.'],
            ['faq_category_id' => 1, 'q' => 'Will I receive a receipt or invoice?', 'a' => 'Yes, it will be sent via email after purchase.'],

            // 2. Payment & Billing
            ['faq_category_id' => 2, 'q' => 'What payment methods are accepted?', 'a' => 'We accept Visa, MasterCard, PayPal, and more.'],
            ['faq_category_id' => 2, 'q' => 'Is my payment information secure?', 'a' => 'Yes, we use SSL encryption for all transactions.'],
            ['faq_category_id' => 2, 'q' => 'Why was my payment declined?', 'a' => 'Check card details or try another method.'],
            ['faq_category_id' => 2, 'q' => 'Can I pay via bank transfer?', 'a' => 'Yes, bank transfer is available on request.'],
            ['faq_category_id' => 2, 'q' => 'How do I get a copy of my invoice?', 'a' => 'Invoices are available in your account or via email.'],
            ['faq_category_id' => 2, 'q' => 'Are there any hidden charges?', 'a' => 'No, all prices and fees are shown upfront.'],
            ['faq_category_id' => 2, 'q' => 'Do you accept cryptocurrency?', 'a' => 'Currently, we do not support crypto payments.'],

            // 3. Shipping & Delivery
            ['faq_category_id' => 3, 'q' => 'How much does shipping cost?', 'a' => 'Shipping costs vary based on location and weight.'],
            ['faq_category_id' => 3, 'q' => 'Can I choose my delivery date?', 'a' => 'Yes, you can select a preferred delivery date at checkout.'],
            ['faq_category_id' => 3, 'q' => 'What courier services do you use?', 'a' => 'We use reliable partners like DHL, FedEx, and Aramex.'],
            ['faq_category_id' => 3, 'q' => 'What if I miss the delivery?', 'a' => 'Courier will retry or contact you for rescheduling.'],
            ['faq_category_id' => 3, 'q' => 'Do you deliver on weekends?', 'a' => 'Weekend delivery depends on your area.'],
            ['faq_category_id' => 3, 'q' => 'Can I change my delivery address?', 'a' => 'Address can be changed before dispatch.'],
            ['faq_category_id' => 3, 'q' => 'Do you offer same-day delivery?', 'a' => 'Yes, in select cities and on eligible items.'],

            // 4. Returns & Refunds
            ['faq_category_id' => 4, 'q' => 'How do I return a product?', 'a' => 'Use the return request form in your account.'],
            ['faq_category_id' => 4, 'q' => 'Are return shipping fees covered?', 'a' => 'Return shipping is free for damaged items.'],
            ['faq_category_id' => 4, 'q' => 'When will I get my refund?', 'a' => 'Refunds are issued within 5–7 business days.'],
            ['faq_category_id' => 4, 'q' => 'Can I exchange an item?', 'a' => 'Exchanges are allowed for size and color issues.'],
            ['faq_category_id' => 4, 'q' => 'Do you accept partial returns?', 'a' => 'Yes, you can return part of your order.'],
            ['faq_category_id' => 4, 'q' => 'What items are non-returnable?', 'a' => 'Clearance and hygiene products are not returnable.'],
            ['faq_category_id' => 4, 'q' => 'How do I track my return?', 'a' => 'Tracking details will be shared after pickup.'],

            // 5. Account & Security
            ['faq_category_id' => 5, 'q' => 'How do I update my password?', 'a' => 'Go to account settings and click "Change Password".'],
            ['faq_category_id' => 5, 'q' => 'How do I delete my account?', 'a' => 'Contact customer support to request deletion.'],
            ['faq_category_id' => 5, 'q' => 'Is two-factor authentication available?', 'a' => 'Yes, enable it from security settings.'],
            ['faq_category_id' => 5, 'q' => 'Can I use my social media to sign in?', 'a' => 'Yes, Google and Facebook login are supported.'],
            ['faq_category_id' => 5, 'q' => 'Why was my account locked?', 'a' => 'Multiple failed login attempts may lock the account.'],
            ['faq_category_id' => 5, 'q' => 'How do I change my email address?', 'a' => 'You can update it from your profile settings.'],
            ['faq_category_id' => 5, 'q' => 'Are my personal details shared?', 'a' => 'No, we never share data without consent.'],

            // 6. Product Information
            ['faq_category_id' => 6, 'q' => 'Do your products come with warranty?', 'a' => 'Yes, warranty details are listed on product pages.'],
            ['faq_category_id' => 6, 'q' => 'Where are your products sourced from?', 'a' => 'We source directly from verified suppliers.'],
            ['faq_category_id' => 6, 'q' => 'Can I request a demo before buying?', 'a' => 'Demo videos are available on selected products.'],
            ['faq_category_id' => 6, 'q' => 'How do I find the right size?', 'a' => 'Use the sizing chart on the product page.'],
            ['faq_category_id' => 6, 'q' => 'Do you sell refurbished items?', 'a' => 'Only new items are sold unless stated.'],
            ['faq_category_id' => 6, 'q' => 'Can I suggest a product for listing?', 'a' => 'Yes, use our suggestion form.'],
            ['faq_category_id' => 6, 'q' => 'How often is stock updated?', 'a' => 'Stock is updated in real-time.'],

            // 7. Discounts & Promotions
            ['faq_category_id' => 7, 'q' => 'How do I apply a coupon?', 'a' => 'Enter the coupon code at checkout.'],
            ['faq_category_id' => 7, 'q' => 'Do you have referral bonuses?', 'a' => 'Yes, refer friends and earn rewards.'],
            ['faq_category_id' => 7, 'q' => 'Can I stack multiple discounts?', 'a' => 'Only one discount code is allowed per order.'],
            ['faq_category_id' => 7, 'q' => 'When do sales usually happen?', 'a' => 'Major sales are during holidays and seasons.'],
            ['faq_category_id' => 7, 'q' => 'How can I get early access to sales?', 'a' => 'Join our newsletter or loyalty program.'],
            ['faq_category_id' => 7, 'q' => 'Are discounts available for first-time buyers?', 'a' => 'Yes, check our homepage banners.'],
            ['faq_category_id' => 7, 'q' => 'Do you offer price matching?', 'a' => 'No, we do not currently offer price matching.'],

            // 8. Technical Support
            ['faq_category_id' => 8, 'q' => 'Why is my app not working?', 'a' => 'Ensure you have the latest version installed.'],
            ['faq_category_id' => 8, 'q' => 'How do I report a bug?', 'a' => 'Contact our technical team via the help center.'],
            ['faq_category_id' => 8, 'q' => 'Website is slow. What should I do?', 'a' => 'Clear cache or try a different browser.'],
            ['faq_category_id' => 8, 'q' => 'How do I reset the app settings?', 'a' => 'Uninstall and reinstall the app.'],
            ['faq_category_id' => 8, 'q' => 'Why can’t I add to cart?', 'a' => 'Check your internet or try refreshing the page.'],
            ['faq_category_id' => 8, 'q' => 'Login keeps failing. Why?', 'a' => 'Ensure correct credentials or reset password.'],
            ['faq_category_id' => 8, 'q' => 'Is there a chatbot available?', 'a' => 'Yes, use the chat widget on the site.'],

            // 9. Subscription Services
            ['faq_category_id' => 9, 'q' => 'What are the benefits of subscribing?', 'a' => 'Exclusive deals, early access, and loyalty points.'],
            ['faq_category_id' => 9, 'q' => 'How often will I receive emails?', 'a' => 'You can set your preferences in your account.'],
            ['faq_category_id' => 9, 'q' => 'Is subscription free?', 'a' => 'Yes, newsletter subscriptions are free.'],
            ['faq_category_id' => 9, 'q' => 'Can I pause my subscription?', 'a' => 'You can pause anytime in account settings.'],
            ['faq_category_id' => 9, 'q' => 'Will I lose data if I unsubscribe?', 'a' => 'No, your account remains intact.'],
            ['faq_category_id' => 9, 'q' => 'How do I change my email for newsletters?', 'a' => 'Update it under subscription settings.'],
            ['faq_category_id' => 9, 'q' => 'Can I get physical mailers?', 'a' => 'Currently, we only offer email subscriptions.'],

            // 10. Loyalty & Rewards
            ['faq_category_id' => 10, 'q' => 'How are reward points calculated?', 'a' => '1 point for every $1 spent.'],
            ['faq_category_id' => 10, 'q' => 'Do reward points expire?', 'a' => 'Yes, after 12 months of inactivity.'],
            ['faq_category_id' => 10, 'q' => 'Can I transfer points to someone else?', 'a' => 'Points are non-transferable.'],
            ['faq_category_id' => 10, 'q' => 'Where can I redeem points?', 'a' => 'Points can be used during checkout.'],
            ['faq_category_id' => 10, 'q' => 'Is there a loyalty program tier system?', 'a' => 'Yes, tiers unlock based on points earned.'],
            ['faq_category_id' => 10, 'q' => 'Will I earn points on discounted orders?', 'a' => 'Yes, points are based on total spend.'],
            ['faq_category_id' => 10, 'q' => 'Can I donate points?', 'a' => 'Yes, during certain campaigns.'],

            // 11. Gift Cards & Vouchers
            ['faq_category_id' => 11, 'q' => 'Can I send a gift card by email?', 'a' => 'Yes, digital gift cards are available.'],
            ['faq_category_id' => 11, 'q' => 'What denominations are available?', 'a' => 'Gift cards range from $10 to $500.'],
            ['faq_category_id' => 11, 'q' => 'Can I customize my gift card?', 'a' => 'You can add a personal message.'],
            ['faq_category_id' => 11, 'q' => 'Do gift cards expire?', 'a' => 'They are valid for 1 year from issue date.'],
            ['faq_category_id' => 11, 'q' => 'How do I redeem a voucher?', 'a' => 'Enter the code during checkout.'],
            ['faq_category_id' => 11, 'q' => 'Can I check my gift card balance?', 'a' => 'Yes, enter the card number on our balance page.'],
            ['faq_category_id' => 11, 'q' => 'Are gift cards refundable?', 'a' => 'No, gift cards are non-refundable.'],

            // 12. Privacy & Policies
            ['faq_category_id' => 12, 'q' => 'Where can I read your privacy policy?', 'a' => 'It’s available on our website footer.'],
            ['faq_category_id' => 12, 'q' => 'Do you share my information with third parties?', 'a' => 'No, we only share data with consent.'],
            ['faq_category_id' => 12, 'q' => 'How do you protect customer data?', 'a' => 'We use encryption and secure hosting.'],
            ['faq_category_id' => 12, 'q' => 'Can I request data deletion?', 'a' => 'Yes, submit a request via account settings.'],
            ['faq_category_id' => 12, 'q' => 'Is browsing history tracked?', 'a' => 'Only for enhancing your experience.'],
            ['faq_category_id' => 12, 'q' => 'Do you use cookies?', 'a' => 'Yes, for performance and analytics.'],
            ['faq_category_id' => 12, 'q' => 'How can I contact your Data Protection Officer?', 'a' => 'Use the contact form under Privacy Requests.'],

        ];

        DB::table('faqs')->insert($faqs);
    }
}
