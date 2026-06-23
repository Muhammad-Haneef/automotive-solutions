<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class BrandSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();

        $brands = [
            [
                'title'                     => 'TechPro',
                'logo'                      => 'mock/brands/techpro.png',
                'email'                     => 'info@techpro.com',
                'address'                   => '12 Tech Avenue, Silicon Valley, CA, USA',
                'about'                     => 'Quality electronics and smart accessories for everyday use including cameras, power banks, fitness bands, and more.',
                'contact_person'            => 'James Carter',
                'contact_email'             => 'support@techpro.com',
                'contact_phone'             => '+1-800-123-4567',
                'website'                   => 'https://www.techpro.com',
                'show_on_front'             => true,
                'show_description_on_front' => true,
                'sort_by'                   => 1,
            ],
            [
                'title'                     => 'Apple',
                'logo'                      => 'mock/brands/apple.png',
                'email'                     => 'info@apple.com',
                'address'                   => 'One Apple Park Way, Cupertino, CA 95014, USA',
                'about'                     => 'Apple designs and sells consumer electronics, software, and online services including iPhone, iPad, Mac, and Apple Watch.',
                'contact_person'            => 'Apple Support',
                'contact_email'             => 'support@apple.com',
                'contact_phone'             => '+1-800-275-2273',
                'website'                   => 'https://www.apple.com',
                'show_on_front'             => true,
                'show_description_on_front' => true,
                'sort_by'                   => 2,
            ],
            [
                'title'                     => 'Luxe Fashion',
                'logo'                      => 'mock/brands/luxe-fashion.png',
                'email'                     => 'info@luxefashion.com',
                'address'                   => '88 Fashion Street, Paris, France',
                'about'                     => 'Premium designer fashion house specializing in formal wear, evening gowns, and luxury co-ord sets.',
                'contact_person'            => 'Sophie Laurent',
                'contact_email'             => 'orders@luxefashion.com',
                'contact_phone'             => '+33-1-23-45-67-89',
                'website'                   => 'https://www.luxefashion.com',
                'show_on_front'             => true,
                'show_description_on_front' => true,
                'sort_by'                   => 3,
            ],
            [
                'title'                     => 'Urban Style',
                'logo'                      => 'mock/brands/urban-style.png',
                'email'                     => 'info@urbanstyle.com',
                'address'                   => '45 Mode Boulevard, Milan, Italy',
                'about'                     => 'Contemporary men\'s fashion brand offering jackets, shirts, knitwear, scarves, caps, and winter accessories.',
                'contact_person'            => 'Marco Ricci',
                'contact_email'             => 'support@urbanstyle.com',
                'contact_phone'             => '+39-02-1234-5678',
                'website'                   => 'https://www.urbanstyle.com',
                'show_on_front'             => true,
                'show_description_on_front' => false,
                'sort_by'                   => 4,
            ],
            [
                'title'                     => 'StepUp',
                'logo'                      => 'mock/brands/stepup.png',
                'email'                     => 'info@stepup.com',
                'address'                   => '22 Sole Street, London, UK',
                'about'                     => 'Classic and contemporary footwear and formal suits. Specializing in retro sneakers, high-tops, and tailored menswear.',
                'contact_person'            => 'David Hughes',
                'contact_email'             => 'orders@stepup.com',
                'contact_phone'             => '+44-20-7946-0958',
                'website'                   => 'https://www.stepup.com',
                'show_on_front'             => true,
                'show_description_on_front' => false,
                'sort_by'                   => 5,
            ],
            [
                'title'                     => 'TinyJoy',
                'logo'                      => 'mock/brands/tinyjoy.png',
                'email'                     => 'info@tinyjoy.com',
                'address'                   => '9 Nursery Lane, Toronto, Canada',
                'about'                     => 'Trusted baby and kids brand providing safe, BPA-free toys, rattles, plush night lights, and educational play sets.',
                'contact_person'            => 'Emily Ross',
                'contact_email'             => 'support@tinyjoy.com',
                'contact_phone'             => '+1-416-555-0199',
                'website'                   => 'https://www.tinyjoy.com',
                'show_on_front'             => true,
                'show_description_on_front' => true,
                'sort_by'                   => 6,
            ],
            [
                'title'                     => 'OptiLens',
                'logo'                      => 'mock/brands/optilens.png',
                'email'                     => 'info@optilens.com',
                'address'                   => '5 Shutter Road, Tokyo, Japan',
                'about'                     => 'Professional camera brand offering DSLR bodies, lenses, and imaging accessories for enthusiasts and professionals.',
                'contact_person'            => 'Kenji Tanaka',
                'contact_email'             => 'pro@optilens.com',
                'contact_phone'             => '+81-3-1234-5678',
                'website'                   => 'https://www.optilens.com',
                'show_on_front'             => true,
                'show_description_on_front' => true,
                'sort_by'                   => 7,
            ],
            [
                'title'                     => 'CarryOn',
                'logo'                      => 'mock/brands/carryon.png',
                'email'                     => 'info@carryon.com',
                'address'                   => '17 Traveller\'s Way, Amsterdam, Netherlands',
                'about'                     => 'Durable and stylish bags, hiking backpacks, camera sling bags, clutches, and travel accessories for every journey.',
                'contact_person'            => 'Anna Visser',
                'contact_email'             => 'orders@carryon.com',
                'contact_phone'             => '+31-20-555-0123',
                'website'                   => 'https://www.carryon.com',
                'show_on_front'             => true,
                'show_description_on_front' => false,
                'sort_by'                   => 8,
            ],
            [
                'title'                     => 'HomeVibe',
                'logo'                      => 'mock/brands/homevibe.png',
                'email'                     => 'info@homevibe.com',
                'address'                   => '33 Interior Drive, Stockholm, Sweden',
                'about'                     => 'Modern furniture and home lifestyle brand offering ottomans, console tables, chair covers, kitchen accessories, and travel mugs.',
                'contact_person'            => 'Lena Karlsson',
                'contact_email'             => 'support@homevibe.com',
                'contact_phone'             => '+46-8-555-0177',
                'website'                   => 'https://www.homevibe.com',
                'show_on_front'             => true,
                'show_description_on_front' => true,
                'sort_by'                   => 9,
            ],
            [
                'title'                     => 'GlowUp',
                'logo'                      => 'mock/brands/glowup.png',
                'email'                     => 'info@glowup.com',
                'address'                   => '7 Beauty Boulevard, Seoul, South Korea',
                'about'                     => 'Professional beauty and skincare brand featuring facial steamers, electric cleansing brushes, and advanced skin care tools.',
                'contact_person'            => 'Ji-yeon Park',
                'contact_email'             => 'care@glowup.com',
                'contact_phone'             => '+82-2-555-0188',
                'website'                   => 'https://www.glowup.com',
                'show_on_front'             => true,
                'show_description_on_front' => true,
                'sort_by'                   => 10,
            ],
        ];

        foreach ($brands as $brand) {
            DB::table('brands')->insert(array_merge($brand, [
                'slug'       => Str::slug($brand['title']),
                'is_active'  => true,
                'created_at' => $now,
                'updated_at' => $now,
            ]));
        }
    }
}