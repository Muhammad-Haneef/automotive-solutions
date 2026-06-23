<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductFaqSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();

        $faqPool = [
            [
                'q' => 'Is this product covered under warranty?',
                'a' => 'Yes, this product comes with a manufacturer warranty. Please refer to the warranty card included in the box for details.',
            ],
            [
                'q' => 'How long does delivery take?',
                'a' => 'Standard delivery takes 3-5 business days. Express delivery options are available at checkout.',
            ],
            [
                'q' => 'Can I return this product if I am not satisfied?',
                'a' => 'Yes, we offer a hassle-free return policy. You can return the product within the specified return window in its original condition.',
            ],
            [
                'q' => 'Is the product available in other colors or sizes?',
                'a' => 'Yes, this product is available in multiple variants. Please check the product page for all available options.',
            ],
            [
                'q' => 'Is this product original and authentic?',
                'a' => 'Absolutely. All products listed on our platform are 100% original and sourced directly from authorized distributors.',
            ],
            [
                'q' => 'What payment methods are accepted?',
                'a' => 'We accept all major credit/debit cards, bank transfers, JazzCash, EasyPaisa, and cash on delivery.',
            ],
            [
                'q' => 'Can I track my order after placing it?',
                'a' => 'Yes, once your order is dispatched you will receive a tracking number via SMS and email to monitor your delivery.',
            ],
            [
                'q' => 'Is cash on delivery available for this product?',
                'a' => 'Yes, cash on delivery is available for this product in most cities across Pakistan.',
            ],
            [
                'q' => 'How do I clean or maintain this product?',
                'a' => 'Please refer to the care instructions included in the packaging. Generally, wipe with a soft dry cloth and avoid harsh chemicals.',
            ],
            [
                'q' => 'Can I cancel my order after placing it?',
                'a' => 'Orders can be cancelled within 24 hours of placement. After dispatch, cancellation is not possible but returns are accepted.',
            ],
            [
                'q' => 'Is this product suitable as a gift?',
                'a' => 'Yes, this product makes an excellent gift. We also offer gift wrapping services at a small additional charge.',
            ],
            [
                'q' => 'What should I do if I receive a damaged product?',
                'a' => 'Please contact our support team within 48 hours of delivery with photos of the damaged item and we will arrange a replacement.',
            ],
            [
                'q' => 'Does the product require any assembly?',
                'a' => 'Minor assembly may be required. A detailed instruction manual is included inside the box to guide you through the process.',
            ],
            [
                'q' => 'Is this product safe for children?',
                'a' => 'This product is designed for adults unless specifically stated otherwise. Please check the age recommendation on the product label.',
            ],
            [
                'q' => 'What is the weight and dimension of this product?',
                'a' => 'The exact weight and dimensions are listed in the product specifications section on the product detail page.',
            ],
            [
                'q' => 'Do you offer bulk or wholesale pricing?',
                'a' => 'Yes, we offer special pricing for bulk orders. Please contact our sales team for a custom quote.',
            ],
            [
                'q' => 'Will I receive an invoice with my order?',
                'a' => 'Yes, a printed invoice is included with every order. A digital copy is also sent to your registered email address.',
            ],
            [
                'q' => 'Is the product energy efficient?',
                'a' => 'Yes, this product is designed with energy efficiency in mind. Please refer to the product specifications for detailed energy ratings.',
            ],
            [
                'q' => 'Can this product be used internationally?',
                'a' => 'This product is designed for local use. For international compatibility, please check the voltage and plug type specifications.',
            ],
            [
                'q' => 'How do I contact support if I have an issue?',
                'a' => 'You can reach our customer support team via live chat, email, or phone. Support is available Monday to Saturday, 9am to 6pm.',
            ],
            [
                'q' => 'Is the product waterproof or water resistant?',
                'a' => 'Please refer to the product specifications section. Waterproof or water resistance ratings are listed where applicable.',
            ],
            [
                'q' => 'Does this product come with accessories or extras?',
                'a' => 'All items included in the box are listed in the "What\'s in the Box" section on the product page.',
            ],
            [
                'q' => 'How do I know if this product is compatible with my existing setup?',
                'a' => 'Compatibility details are listed in the product specifications. If unsure, feel free to contact our support team before purchasing.',
            ],
            [
                'q' => 'Can I exchange this product for a different variant?',
                'a' => 'Yes, exchanges are allowed within the return window. The product must be unused and in original packaging.',
            ],
            [
                'q' => 'Is there a physical store where I can see this product?',
                'a' => 'Yes, you can visit our nearest retail outlet. Store locations and timings are available on our website under the Contact Us page.',
            ],
        ];

        for ($productId = 1; $productId <= 63; $productId++) {
            $shuffled  = array_values(array_map(null, array_keys($faqPool), $faqPool));
            shuffle($faqPool);
            $selected  = array_slice($faqPool, 0, rand(3, 7));

            foreach ($selected as $index => $faq) {
                DB::table('product_faqs')->insert([
                    'product_id' => $productId,
                    'q'          => $faq['q'],
                    'a'          => $faq['a'],
                    'sort_by'    => $index + 1,
                    'is_active'  => true,
                    'created_at' => $now,
                    'updated_at' => $now,
                ]);
            }
        }
    }
}