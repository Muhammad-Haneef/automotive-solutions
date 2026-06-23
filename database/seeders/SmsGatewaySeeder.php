<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SmsGatewaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        $gateways = [
            // --- UAE Gateways ---
            [
                'title' => "Etisalat's SMS Marketing Solutions",
                'description' => "Etisalat offers a comprehensive SMS marketing platform that enables businesses to connect with customers through personalized messages, surveys, and detailed reports. https://www.etisalat.ae/",
            ],
            [
                'title' => "SMSala (UAE)",
                'description' => "Specializing in bulk SMS services, SMSala provides reliable APIs for sending promotional, transactional, and alert messages in the UAE. https://smsala.com/",
            ],
            [
                'title' => "Smart SMS (Dubai)",
                'description' => "Headquartered in Dubai, Smart SMS offers secure bulk messaging services for corporate companies across the MENA/GCC regions. https://smartsms.ae/",
            ],
            [
                'title' => "Precise Communications",
                'description' => "Bulk SMS gateway and marketing company in the Middle East offering direct connectivity to major UAE operators. https://tobeprecisesms.com/",
            ],
            [
                'title' => "Message Central",
                'description' => "SMS gateway provider in UAE offering promotional, transactional, and OTP SMS services.",
            ],

            // --- Pakistani Gateways ---
            [
                'title' => "Zong CMPak",
                'description' => "Zong's Business SMS solutions offer APIs and Web Portal for sending bulk SMS across Pakistan. https://www.zong.com.pk/",
            ],
            [
                'title' => "Jazz Business SMS",
                'description' => "Jazz provides bulk SMS and SMS API solutions tailored for enterprises and SMEs. https://www.jazz.com.pk/business/",
            ],
            [
                'title' => "Ufone Bulk SMS",
                'description' => "Ufone offers branded and non-branded SMS services, along with scheduling features. https://www.ufone.com/",
            ],
            [
                'title' => "Telenor Pakistan – Smart Messaging",
                'description' => "Bulk SMS and targeted messaging service by Telenor for enterprise communication. https://www.telenor.com.pk/",
            ],
            [
                'title' => "SendPK",
                'description' => "A popular Pakistani SMS gateway for promotional and transactional SMS. https://www.sendpk.com/",
            ],
            [
                'title' => "BrandedSMS.pk",
                'description' => "Reliable SMS platform for branded bulk messaging with campaign reporting. https://www.brandedsms.pk/",
            ],

            // --- International Gateways ---
            [
                'title' => "Twilio",
                'description' => "Global SMS, voice, and communication API provider supporting messaging in over 180 countries. https://www.twilio.com/",
            ],
            [
                'title' => "SMSGlobal",
                'description' => "A worldwide messaging platform with APIs, bulk SMS tools, and integrations. https://www.smsglobal.com/",
            ],
            [
                'title' => "Nexmo (Vonage API)",
                'description' => "Vonage’s Nexmo API platform offers robust global SMS and 2FA messaging services. https://www.vonage.com/",
            ],
            [
                'title' => "Infobip",
                'description' => "Omni-channel messaging platform used globally for SMS, email, and app notifications. https://www.infobip.com/",
            ],
            [
                'title' => "Textlocal",
                'description' => "Bulk SMS gateway with high deliverability and detailed analytics, used worldwide. https://www.textlocal.com/",
            ],
        ];

        foreach ($gateways as $index => $gateway) {
            DB::table('sms_gateways')->insert([
                'title' => $gateway['title'],
                'description' => $gateway['description'],
                'sort_by' => $index + 1,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }
    }
}
