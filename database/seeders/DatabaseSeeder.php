<?php

namespace Database\Seeders;

use App\Models\Admin\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /*
        // User::factory(10)->create();
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        */
        $this->call([
            // SYSTEM & SETTINGS
            //SettingSeeder::class,
            //SitemapSeeder::class,
        
            // LOCATIONS
            AddressTypeSeeder::class,
            CountrySeeder::class,
            CitySeeder::class,  //only for UAE
        
            // USERS & ROLES
            UserGroupSeeder::class,
            UserSeeder::class,
            //UserTempSeeder::class,
            SystemUserRoleSeeder::class,
            SystemUserSeeder::class,
            //SystemUserRolePrivilegeSeeder::class,
            //PrivilegeGroupSeeder::class,
            //PrivilegeSeeder::class,
        
            // INQUIRIES & SUPPORT
            //InquirySeeder::class,
            SupportTypeSeeder::class,
            SupportStatusSeeder::class,
            //SupportSeeder::class,
            //SupportCommentSeeder::class,
            //CallBackRequestSeeder::class,
        
            // FAQ
            FaqCategorySeeder::class,
            FaqSeeder::class,
            ProductFaqSeeder::class,
        
            // BLOG
            BlogCategorySeeder::class,
            BlogSeeder::class,
        
            // NOTIFICATIONS
            NotificationTypeSeeder::class,
            //NotificationSeeder::class,
            PopupSeeder::class,
        
            // ORDERS & PAYMENTS
            OrderStatusSeeder::class,
            OrderSourceSeeder::class,
            //OrderSeeder::class,
            //OrderStatusLogSeeder::class,
            //OrderItemSeeder::class,
            //OrderItemOptionSeeder::class,
            PaymentGatewaySeeder::class,
            PaymentMethodSeeder::class,
        
            // SHIPPING & COURIERS
            ShippingClassSeeder::class,
            ShipperSeeder::class,
            CourierServiceSeeder::class,
            //CourierServiceIntegrationSeeder::class,
        
            // WALLET & TRANSACTIONS
            //WalletSeeder::class,
            //WalletTransactionSeeder::class,
            //WalletPayoutRequestSeeder::class,
        
            // SMS & EMAIL
            SmsGatewaySeeder::class,
            SmsCategorySeeder::class,
            //SmsSeeder::class,
            DefaultSmsSeeder::class,
            //SmsApiIntegrationSeeder::class,
            //EmailCampaignSeeder::class,
        
        
            // ATTRIBUTES
            AttributeSeeder::class,
            AttributeValueSeeder::class,

                    
            // WISHLIST & MISCELLANEOUS
            //WishlistSeeder::class,
            //CompareSeeder::class,
            TagSeeder::class,

            // PRODUCTS & CATEGORIES
            CategorySeeder::class,
            BrandSeeder::class,
            WarehouseSeeder::class,
            SupplierSeeder::class,
            ProductSeeder::class,
            ProductCategorySeeder::class,
            ProductTagSeeder::class,
            ProductImageSeeder::class,
            ProductReviewSeeder::class,
            ProductVideoSectionSeeder::class,
            ProductVideoSeeder::class,
            ProductVariationSeeder::class,

        
            // COUPONS & DISCOUNTS
            //CouponSeeder::class,
            //CouponUsageSeeder::class,
        
            // BANNERS & PAGES
            BannerLocationSeeder::class,
            //BannerImageSeeder::class,
            BannerSeeder::class,
            PageSeeder::class,
        
            // SUBSCRIPTIONS & REFERRALS
            //SubscriberSeeder::class,
            //ReferralSeeder::class,
        
            // HR & PAYROLL
            DepartmentSeeder::class,
            DesignationSeeder::class,
            LeaveTypeSeeder::class,
        ]);
        
        

    }
}
