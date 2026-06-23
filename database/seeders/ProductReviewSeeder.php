<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductReviewSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();

        $reviews = [
            "Absolutely love this product! Exceeded my expectations.",
            "Great quality for the price. Highly recommend.",
            "Fast delivery and product is exactly as described.",
            "Good product overall, minor packaging issue but product is fine.",
            "Excellent build quality. Will definitely buy again.",
            "Very satisfied with this purchase. Works perfectly.",
            "Decent product but took a bit longer to arrive.",
            "Amazing value for money. Highly impressed.",
            "Product looks and feels premium. Very happy.",
            "Works as expected. No complaints so far.",
            "Not bad but expected a bit better quality.",
            "Perfect gift item. Recipient loved it.",
            "Solid product. Does exactly what it claims.",
            "A little smaller than expected but works great.",
            "Five stars! Will recommend to friends and family.",
            "Good quality but the color was slightly different from photos.",
            "Very happy with this purchase. Quick delivery too.",
            "Superb quality. Packaging was also very secure.",
            "Bought this as a replacement and it's even better than the original.",
            "Okay product. Gets the job done.",
            "Impressed with the quality at this price point.",
            "Had some doubts but this product really delivered.",
            "Comfortable and well-made. Totally worth it.",
            "Exactly what I was looking for. No issues at all.",
            "Great product but customer support could be better.",
            "Looks even better in person than in the photos.",
            "Very durable and well-built. Happy with the purchase.",
            "Slightly overpriced but quality is undeniable.",
            "Perfect for everyday use. Lightweight and sturdy.",
            "Good product. Would buy from this seller again.",

            "Received in perfect condition. Very well packaged.",
            "Couldn't be happier with this purchase. Top quality.",
            "Exactly as shown in the pictures. No surprises.",
            "The material feels very premium. Great buy.",
            "Prompt delivery and excellent product quality.",
            "This is my second purchase and still impressed.",
            "Fits perfectly and looks great. Very pleased.",
            "Wasn't sure at first but now I'm a huge fan.",
            "Sturdy and reliable. Just what I needed.",
            "Good value. I've recommended it to several friends.",
            "Everything about this product is top notch.",
            "Arrived earlier than expected. Product is fantastic.",
            "Well worth the money. No regrets at all.",
            "High quality finish. Looks much more expensive than it is.",
            "Simple to use and works flawlessly every time.",
            "I was skeptical but this really impressed me.",
            "Clean design and very functional. Love it.",
            "Super fast shipping and product is excellent.",
            "The quality is consistent with the product description.",
            "Really happy with this item. Would order again.",
            "Outstanding product. Delivery was on time too.",
            "Very well made. You can tell it's built to last.",
            "Decent quality for the price. Satisfied overall.",
            "Arrived safely and works like a charm.",
            "I use it daily and it's holding up really well.",
            "Looks great and feels solid. Great purchase.",
            "Nice product. Packaging could be improved though.",
            "Genuinely one of the best purchases I've made.",
            "Product quality is better than I expected.",
            "Very lightweight yet sturdy. Impressed.",

            "Smooth transaction and product is as described.",
            "Perfect size and great quality. Very happy.",
            "Ordered two and both were in perfect condition.",
            "Highly durable. Already survived rough daily use.",
            "Amazing product at an unbeatable price.",
            "No issues whatsoever. Smooth and easy purchase.",
            "Delivery was fast and the item is well made.",
            "This product is a great addition to my collection.",
            "Love the design and build quality. Recommended.",
            "Works better than expected. Very impressed.",
            "Comfortable to use and very practical.",
            "Good craftsmanship. I'm pleased with the purchase.",
            "Very sleek and modern design. Looks premium.",
            "It's exactly what I needed. Will order more.",
            "Quality matches the price point perfectly.",
            "Arrived on time and in great condition.",
            "One of the better products I've purchased online.",
            "Well packaged and exactly as advertised.",
            "Does the job perfectly. No complaints at all.",
            "Solid construction and great attention to detail.",
            "Value for money is excellent. Highly satisfied.",
            "Shipped quickly and product was undamaged.",
            "Really good quality. Better than similar products.",
            "I'm very picky but this met all my standards.",
            "Excellent product. I'll be buying more from this store.",
            "Nice finish and feels premium in hand.",
            "Practical and efficient. Exactly what I wanted.",
            "Product description was accurate. Happy with it.",
            "Feels robust and well engineered. Great buy.",
            "Fantastic product. Fast shipping. Five stars.",
        ];

        for ($productId = 1; $productId <= 63; $productId++) {
            $reviewCount = rand(5, 20);
            $userPool    = range(1, 10);
            shuffle($userPool);
            $userIds     = array_slice($userPool, 0, min($reviewCount, 10));

            foreach ($userIds as $userId) {
                DB::table('product_reviews')->insert([
                    'user_id'        => $userId,
                    'product_id'     => $productId,
                    'review'         => $reviews[array_rand($reviews)],
                    'quality_rating' => rand(1, 5),
                    'price_rating'   => rand(1, 5),
                    'sort_by'        => 0,
                    'is_active'      => true,
                    'created_at'     => $now,
                    'updated_at'     => $now,
                ]);
            }
        }
    }
}
