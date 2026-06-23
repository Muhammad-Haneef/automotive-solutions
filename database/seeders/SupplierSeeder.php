<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();

        $suppliers = [
            [
                'title'          => 'Global Tech Distributors',
                'logo'           => 'mock/suppliers/global-tech-distributors.png',
                'email'          => 'info@globaltechdist.com',
                'about'          => 'Leading electronics distributor supplying cameras, smart devices, wearables, tablets, projectors, and accessories across South Asia.',
                'address'        => '14 Electronics Market, Saddar, Karachi, Pakistan',
                'contact_person' => 'Asif Mehmood',
                'contact_email'  => 'asif@globaltechdist.com',
                'contact_phone'  => '+92-21-3456-7890',
                'website'        => 'https://www.globaltechdist.com',
                'sort_by'        => 1,
            ],
            [
                'title'          => 'iZone Official Distributor',
                'logo'           => 'mock/suppliers/izone.png',
                'email'          => 'info@izone.pk',
                'about'          => 'Authorized Apple products distributor in Pakistan. Supplying genuine iPhones, iPads, MacBooks, and Apple accessories.',
                'address'        => 'Plot 7, Clifton Block 5, Karachi, Pakistan',
                'contact_person' => 'Saad Hussain',
                'contact_email'  => 'saad@izone.pk',
                'contact_phone'  => '+92-21-5678-9012',
                'website'        => 'https://www.izone.pk',
                'sort_by'        => 2,
            ],
            [
                'title'          => 'FashionHub Wholesale',
                'logo'           => 'mock/suppliers/fashionhub-wholesale.png',
                'email'          => 'info@fashionhubwholesale.com',
                'about'          => 'Wholesale women\'s fashion supplier providing dresses, sweaters, jackets, coats, and seasonal clothing for retail stores.',
                'address'        => '22 Garment District, Faisalabad, Pakistan',
                'contact_person' => 'Nadia Iqbal',
                'contact_email'  => 'nadia@fashionhubwholesale.com',
                'contact_phone'  => '+92-41-2345-6789',
                'website'        => 'https://www.fashionhubwholesale.com',
                'sort_by'        => 3,
            ],
            [
                'title'          => 'Metro Menswear Suppliers',
                'logo'           => 'mock/suppliers/metro-menswear.png',
                'email'          => 'info@metromenswear.com',
                'about'          => 'Premier men\'s fashion wholesaler supplying suits, jackets, shirts, cardigans, and formal wear to retailers across Pakistan.',
                'address'        => '8 Textile Colony, Lahore, Pakistan',
                'contact_person' => 'Usman Tariq',
                'contact_email'  => 'usman@metromenswear.com',
                'contact_phone'  => '+92-42-3456-7891',
                'website'        => 'https://www.metromenswear.com',
                'sort_by'        => 4,
            ],
            [
                'title'          => 'SoleMate Footwear Importers',
                'logo'           => 'mock/suppliers/solemate-footwear.png',
                'email'          => 'info@solematefootwear.com',
                'about'          => 'Footwear importer and distributor specializing in branded sneakers, high-tops, casual shoes, and sports footwear.',
                'address'        => '5 Shoe Market, Sialkot, Pakistan',
                'contact_person' => 'Bilal Chaudhry',
                'contact_email'  => 'bilal@solematefootwear.com',
                'contact_phone'  => '+92-52-4567-8901',
                'website'        => 'https://www.solematefootwear.com',
                'sort_by'        => 5,
            ],
            [
                'title'          => 'KiddoWorld Imports',
                'logo'           => 'mock/suppliers/kiddoworld-imports.png',
                'email'          => 'info@kiddoworldimports.com',
                'about'          => 'Trusted importer of baby toys, educational play sets, infant rattles, plush toys, and kids accessories. All products are BPA-free and safety certified.',
                'address'        => '19 Toy Market, Hafeez Centre, Lahore, Pakistan',
                'contact_person' => 'Sana Malik',
                'contact_email'  => 'sana@kiddoworldimports.com',
                'contact_phone'  => '+92-42-6789-0123',
                'website'        => 'https://www.kiddoworldimports.com',
                'sort_by'        => 6,
            ],
            [
                'title'          => 'ProShot Camera Supplies',
                'logo'           => 'mock/suppliers/proshot-camera.png',
                'email'          => 'info@proshotcamera.com',
                'about'          => 'Specialist supplier of professional cameras, DSLR bodies, lenses, tripods, camera bags, and photography accessories.',
                'address'        => '3 Electronics Plaza, Tariq Road, Karachi, Pakistan',
                'contact_person' => 'Fahad Mirza',
                'contact_email'  => 'fahad@proshotcamera.com',
                'contact_phone'  => '+92-21-7890-1234',
                'website'        => 'https://www.proshotcamera.com',
                'sort_by'        => 7,
            ],
            [
                'title'          => 'BagCraft Wholesale',
                'logo'           => 'mock/suppliers/bagcraft-wholesale.png',
                'email'          => 'info@bagcraftwholesale.com',
                'about'          => 'Wholesale supplier of hiking backpacks, camera sling bags, clutches, travel bags, and fashion accessories for men and women.',
                'address'        => '11 Leather Market, Kasur Road, Lahore, Pakistan',
                'contact_person' => 'Ayesha Khan',
                'contact_email'  => 'ayesha@bagcraftwholesale.com',
                'contact_phone'  => '+92-42-8901-2345',
                'website'        => 'https://www.bagcraftwholesale.com',
                'sort_by'        => 8,
            ],
            [
                'title'          => 'HomeDeco Furniture Supplies',
                'logo'           => 'mock/suppliers/homedeco-furniture.png',
                'email'          => 'info@homedecofsupplies.com',
                'about'          => 'Furniture and home decor supplier offering ottomans, console tables, chair covers, kitchen accessories, mugs, and oil dispensers.',
                'address'        => '27 Furniture Market, Gujranwala, Pakistan',
                'contact_person' => 'Tariq Anwar',
                'contact_email'  => 'tariq@homedecosupplies.com',
                'contact_phone'  => '+92-55-9012-3456',
                'website'        => 'https://www.homedecosupplies.com',
                'sort_by'        => 9,
            ],
            [
                'title'          => 'BeautyPro Distributors',
                'logo'           => 'mock/suppliers/beautypro-distributors.png',
                'email'          => 'info@beautyprodist.com',
                'about'          => 'Professional beauty and skincare product distributor. Supplying facial steamers, electric cleansing brushes, serums, and moisturizers.',
                'address'        => '6 Beauty Lane, Defence, Karachi, Pakistan',
                'contact_person' => 'Madiha Saleem',
                'contact_email'  => 'madiha@beautyprodist.com',
                'contact_phone'  => '+92-21-0123-4567',
                'website'        => 'https://www.beautyprodist.com',
                'sort_by'        => 10,
            ],
        ];

        foreach ($suppliers as $supplier) {
            DB::table('suppliers')->insert(array_merge($supplier, [
                'is_active'  => true,
                'created_at' => $now,
                'updated_at' => $now,
            ]));
        }
    }
}