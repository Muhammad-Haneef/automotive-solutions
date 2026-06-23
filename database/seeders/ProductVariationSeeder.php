<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ProductVariationSeeder extends Seeder
{
    /**
     * Attribute IDs (based on AttributeSeeder insertion order)
     *
     *  1 => Color
     *  2 => Size
     *  3 => Storage
     *  4 => RAM
     *  5 => Material
     *  6 => Weight
     *  7 => Shoe Size
     *  8 => Screen Size
     */

    /**
     * Attribute Value IDs (based on AttributeValueSeeder insertion order)
     *
     * Color (attr_id=1):
     *   1=Red, 2=Blue, 3=Green, 4=Black, 5=White, 6=Yellow, 7=Purple, 8=Orange, 9=Gray, 10=Pink
     *
     * Size (attr_id=2):
     *   11=XS, 12=S, 13=M, 14=L, 15=XL, 16=XXL, 17=3XL
     *
     * Storage (attr_id=3):
     *   18=32GB, 19=64GB, 20=128GB, 21=256GB, 22=512GB, 23=1TB
     *
     * RAM (attr_id=4):
     *   24=2GB, 25=4GB, 26=6GB, 27=8GB, 28=12GB, 29=16GB, 30=32GB
     *
     * Material (attr_id=5):
     *   31=Cotton, 32=Polyester, 33=Leather, 34=Wool, 35=Silk, 36=Denim, 37=Linen, 38=Synthetic
     *
     * Weight (attr_id=6):
     *   39=0.5kg, 40=1kg, 41=1.5kg, 42=2kg, 43=5kg, 44=10kg
     *
     * Shoe Size (attr_id=7):
     *   45=36, 46=37, 47=38, 48=39, 49=40, 50=41, 51=42, 52=43, 53=44, 54=45
     *
     * Screen Size (attr_id=8):
     *   55=5.5", 56=6.1", 57=6.4", 58=6.7", 59=13.3", 60=15.6", 61=17"
     */

    public function run(): void
    {
        $now = Carbon::now();

        // ------------------------------------------------------------------
        // Resolve IDs dynamically so the seeder works regardless of whether
        // IDs start at 1 or the tables already have rows.
        // ------------------------------------------------------------------

        // --- Attributes ---
        $attrs = DB::table('attributes')->pluck('id', 'title');
        $attrColor     = $attrs['Color']       ?? null;
        $attrSize      = $attrs['Size']        ?? null;
        $attrStorage   = $attrs['Storage']     ?? null;
        $attrRAM       = $attrs['RAM']         ?? null;
        $attrMaterial  = $attrs['Material']    ?? null;
        $attrShoeSize  = $attrs['Shoe Size']   ?? null;
        $attrScreen    = $attrs['Screen Size'] ?? null;

        // --- Attribute values (keyed by attribute_id + title) ---
        $avRows = DB::table('attribute_values')->get(['id', 'attribute_id', 'title']);

        // Build a nested lookup:  $av[$attrId][$valueTitle] = $valueId
        $av = [];
        foreach ($avRows as $row) {
            $av[$row->attribute_id][$row->title] = $row->id;
        }

        // Helper: safe lookup with a fallback of null
        $val = fn($attrId, $title) => $av[$attrId][$title] ?? null;

        // --- Products (keyed by thumbnail for easy lookup) ---
        $products = DB::table('products')->get(['id', 'thumbnail', 'price', 'sale_price']);
        $p = [];   // $p[$thumbnail] = product row
        foreach ($products as $prod) {
            $p[$prod->thumbnail] = $prod;
        }

        // Helper: get product by its thumbnail mock path
        $prod = fn(string $thumb) => $p["mock/products/{$thumb}"] ?? null;

        // Helper: build a variation row
        $row = function (
            $product,
            int    $attrId,
            int    $valueId,
            string $imageSuffix,
            float  $priceAdj   = 0.0,   // price modifier relative to product price
            float  $saleAdj    = 0.0,   // sale_price modifier
            int    $sort       = 1
        ) use ($now): ?array {
            if (!$product) {
                return null;
            }

            $price     = round($product->price     + $priceAdj, 2);
            $salePrice = round(($product->sale_price ?? $product->price) + $saleAdj, 2);
            $cost      = intval(round($salePrice * 0.60));

            return [
                'product_id'         => $product->id,
                'attribute_id'       => $attrId,
                'attribute_value_id' => $valueId,
                'sku'                => 'VAR-' . strtoupper(Str::random(8)),
                'image'              => "mock/products/{$imageSuffix}",
                'cost'               => $cost,
                'price'              => $price,
                'sale_price'         => $salePrice,
                'sort_by'            => $sort,
                'is_active'          => true,
                'created_at'         => $now,
                'updated_at'         => $now,
            ];
        };

        $variations = [];

        // ==================================================================
        // ELECTRONICS (category_id = 1)
        // ==================================================================

        // --- Product 1: Outdoor Bullet Security Camera (1.jpg) ---
        // Variations: Color (Black, White)
        $cam = $prod('1.jpg');
        foreach ([
            [$attrColor, $val($attrColor, 'Black'), '1.jpg',   0,    0,    1],
            [$attrColor, $val($attrColor, 'White'), '1_1.jpg', 0,    0,    2],
        ] as [$aId, $vId, $img, $pAdj, $sAdj, $sort]) {
            if ($vId) $variations[] = $row($cam, $aId, $vId, $img, $pAdj, $sAdj, $sort);
        }

        // --- Product 19: Smart Fitness Band (19.jpg) ---
        // Variations: Color (Black, Blue, Pink)
        $band = $prod('19.jpg');
        foreach ([
            [$attrColor, $val($attrColor, 'Black'), '19.jpg',   0,   0,   1],
            [$attrColor, $val($attrColor, 'Blue'),  '19_1.jpg', 0,   0,   2],
            [$attrColor, $val($attrColor, 'Pink'),  '19_1.jpg', 0,   0,   3],
        ] as [$aId, $vId, $img, $pAdj, $sAdj, $sort]) {
            if ($vId) $variations[] = $row($band, $aId, $vId, $img, $pAdj, $sAdj, $sort);
        }

        // --- Product 20: 20000mAh Power Bank (20.jpg) ---
        // Variations: Color (Black, White)
        $pb = $prod('20.jpg');
        foreach ([
            [$attrColor, $val($attrColor, 'Black'), '20.jpg',   0,  0,  1],
            [$attrColor, $val($attrColor, 'White'), '20_1.jpg', 0,  0,  2],
        ] as [$aId, $vId, $img, $pAdj, $sAdj, $sort]) {
            if ($vId) $variations[] = $row($pb, $aId, $vId, $img, $pAdj, $sAdj, $sort);
        }

        // --- Product 22: Apple iPad Mini 4 128GB (22.jpg) ---
        // Variations: Storage
        $ipadMini = $prod('22.jpg');
        foreach ([
            [$attrStorage, $val($attrStorage, '64GB'),  '22.jpg',   -5000, -4000, 1],
            [$attrStorage, $val($attrStorage, '128GB'), '22.jpg',    0,     0,    2],
            [$attrStorage, $val($attrStorage, '256GB'), '22_1.jpg',  8000,  6000, 3],
        ] as [$aId, $vId, $img, $pAdj, $sAdj, $sort]) {
            if ($vId) $variations[] = $row($ipadMini, $aId, $vId, $img, $pAdj, $sAdj, $sort);
        }

        // --- Product 23: Apple iPad Pro 64GB (23.jpg) ---
        // Variations: Storage
        $ipadPro = $prod('23.jpg');
        foreach ([
            [$attrStorage, $val($attrStorage, '64GB'),  '23.jpg',    0,     0,    1],
            [$attrStorage, $val($attrStorage, '128GB'), '23.jpg',   10000,  8000, 2],
            [$attrStorage, $val($attrStorage, '256GB'), '23_1.jpg', 20000, 16000, 3],
        ] as [$aId, $vId, $img, $pAdj, $sAdj, $sort]) {
            if ($vId) $variations[] = $row($ipadPro, $aId, $vId, $img, $pAdj, $sAdj, $sort);
        }

        // --- Product 24: Mini Portable Projector (24.jpg) ---
        // Variations: Color (Black, White)
        $proj = $prod('24.jpg');
        foreach ([
            [$attrColor, $val($attrColor, 'Black'), '24.jpg',   0,  0,  1],
            [$attrColor, $val($attrColor, 'White'), '24_1.jpg', 0,  0,  2],
        ] as [$aId, $vId, $img, $pAdj, $sAdj, $sort]) {
            if ($vId) $variations[] = $row($proj, $aId, $vId, $img, $pAdj, $sAdj, $sort);
        }

        // --- Product 25: Professional DSLR Camera (25.jpg) ---
        // Variations: Color (Black)
        $dslr = $prod('25.jpg');
        if ($val($attrColor, 'Black')) {
            $variations[] = $row($dslr, $attrColor, $val($attrColor, 'Black'), '25.jpg', 0, 0, 1);
        }

        // --- Product 26: Mini Wearable Clip-On Camera (26.jpg) ---
        // Variations: Color (Black, White)
        $clipCam = $prod('26.jpg');
        foreach ([
            [$attrColor, $val($attrColor, 'Black'), '26.jpg',   0,  0,  1],
            [$attrColor, $val($attrColor, 'White'), '26_1.jpg', 0,  0,  2],
        ] as [$aId, $vId, $img, $pAdj, $sAdj, $sort]) {
            if ($vId) $variations[] = $row($clipCam, $aId, $vId, $img, $pAdj, $sAdj, $sort);
        }

        // --- Product 29: Digital Sports Watch (29.jpg) ---
        // Variations: Color (Black, Blue, Red)
        $watch1 = $prod('29.jpg');
        foreach ([
            [$attrColor, $val($attrColor, 'Black'), '29.jpg',   0,  0,  1],
            [$attrColor, $val($attrColor, 'Blue'),  '29_1.jpg', 0,  0,  2],
            [$attrColor, $val($attrColor, 'Red'),   '29_1.jpg', 0,  0,  3],
        ] as [$aId, $vId, $img, $pAdj, $sAdj, $sort]) {
            if ($vId) $variations[] = $row($watch1, $aId, $vId, $img, $pAdj, $sAdj, $sort);
        }

        // --- Product 30: Smartwatch SIM (30.jpg) ---
        // Variations: Color (Black, White)
        $watch2 = $prod('30.jpg');
        foreach ([
            [$attrColor, $val($attrColor, 'White'), '30.jpg',   0,  0,  1],
            [$attrColor, $val($attrColor, 'Black'), '30_1.jpg', 0,  0,  2],
        ] as [$aId, $vId, $img, $pAdj, $sAdj, $sort]) {
            if ($vId) $variations[] = $row($watch2, $aId, $vId, $img, $pAdj, $sAdj, $sort);
        }

        // --- Product 45: TWS Earbuds (45.jpg) ---
        // Variations: Color (Black, White)
        $earbuds = $prod('45.jpg');
        foreach ([
            [$attrColor, $val($attrColor, 'Black'), '45.jpg',   0,  0,  1],
            [$attrColor, $val($attrColor, 'White'), '45_1.jpg', 0,  0,  2],
        ] as [$aId, $vId, $img, $pAdj, $sAdj, $sort]) {
            if ($vId) $variations[] = $row($earbuds, $aId, $vId, $img, $pAdj, $sAdj, $sort);
        }

        // ==================================================================
        // WOMEN'S FASHION (category_id = 2)
        // ==================================================================

        // Clothing items share a pattern: Color + Size variations
        $womenClothing = [
            // [thumbnail, colors[], sizes[]]
            ['2.jpg',  ['Purple', 'Black'],          ['S', 'M', 'L', 'XL']],
            ['3.jpg',  ['Pink', 'Black', 'Green'],   ['S', 'M', 'L', 'XL']],
            ['4.jpg',  ['Black', 'Red'],             ['S', 'M', 'L']],
            ['5.jpg',  ['Black', 'Gray'],            ['S', 'M', 'L']],
            ['6.jpg',  ['Pink', 'Black'],            ['XS', 'S', 'M', 'L', 'XL', 'XXL']],
            ['7.jpg',  ['Pink', 'Gray', 'Blue'],     ['XS', 'S', 'M', 'L', 'XL']],
            ['8.jpg',  ['Red', 'Black', 'Blue'],     ['S', 'M', 'L', 'XL']],
            ['9.jpg',  ['Blue', 'White'],            ['S', 'M', 'L']],
            ['10.jpg', ['White', 'Black'],           ['S', 'M', 'L', 'XL']],
            ['11.jpg', ['Orange', 'Black'],          ['S', 'M', 'L', 'XL']],
            ['12.jpg', ['Black', 'White'],           ['S', 'M', 'L', 'XL']],
            ['13.jpg', ['Black', 'Gray'],            ['S', 'M', 'L']],
            ['41.jpg', ['Black', 'White', 'Gray'],   ['XS', 'S', 'M', 'L']],
            ['51.jpg', ['Yellow', 'Black', 'White'], ['XS', 'S', 'M', 'L']],
            ['52.jpg', ['Pink', 'Black'],            ['XS', 'S', 'M', 'L']],
            ['53.jpg', ['Green', 'Black'],           ['S', 'M', 'L', 'XL']],
            ['56.jpg', ['White', 'Yellow'],          ['S', 'M', 'L', 'XL']],
            ['60.jpg', ['Yellow', 'Black'],          ['XS', 'S', 'M', 'L']],
            ['61.jpg', ['White', 'Black'],           ['XS', 'S', 'M', 'L']],
            ['62.jpg', ['Gray', 'Black', 'White'],   ['XS', 'S', 'M', 'L', 'XL']],
        ];

        foreach ($womenClothing as [$thumb, $colors, $sizes]) {
            $product = $prod($thumb);
            if (!$product) continue;

            // Color variations
            $sort = 1;
            foreach ($colors as $colorName) {
                $vId = $val($attrColor, $colorName);
                if ($vId) {
                    $variations[] = $row($product, $attrColor, $vId, $thumb, 0, 0, $sort++);
                }
            }

            // Size variations
            $sort = 1;
            foreach ($sizes as $sizeName) {
                $vId = $val($attrSize, $sizeName);
                if ($vId) {
                    $variations[] = $row($product, $attrSize, $vId, $thumb, 0, 0, $sort++);
                }
            }
        }

        // ==================================================================
        // MEN'S FASHION (category_id = 3)
        // ==================================================================

        $menClothing = [
            ['14.jpg', ['Black', 'Gray'],            ['S', 'M', 'L', 'XL']],
            ['16.jpg', ['Gray', 'Blue', 'Yellow'],   ['S', 'M', 'L', 'XL', 'XXL']],
            ['17.jpg', ['Black', 'Gray'],            ['S', 'M', 'L', 'XL']],
            ['18.jpg', ['Black', 'Gray'],            ['S', 'M', 'L', 'XL']],
            ['48.jpg', ['Green', 'Black', 'Blue'],   ['S', 'M', 'L', 'XL', 'XXL']],
            ['49.jpg', ['Green', 'Blue', 'Black'],   ['S', 'M', 'L', 'XL']],
            ['50.jpg', ['Yellow', 'Black', 'Gray'],  ['S', 'M', 'L', 'XL', 'XXL']],
            ['58.jpg', ['Green', 'Black', 'Blue'],   ['S', 'M', 'L', 'XL', 'XXL']],
        ];

        foreach ($menClothing as [$thumb, $colors, $sizes]) {
            $product = $prod($thumb);
            if (!$product) continue;

            $sort = 1;
            foreach ($colors as $colorName) {
                $vId = $val($attrColor, $colorName);
                if ($vId) {
                    $variations[] = $row($product, $attrColor, $vId, $thumb, 0, 0, $sort++);
                }
            }

            $sort = 1;
            foreach ($sizes as $sizeName) {
                $vId = $val($attrSize, $sizeName);
                if ($vId) {
                    $variations[] = $row($product, $attrSize, $vId, $thumb, 0, 0, $sort++);
                }
            }
        }

        // ==================================================================
        // ACCESSORIES (category_id = 3 — scarves, hats, caps shared there)
        // ==================================================================

        // Scarves: Color only
        $scarves = [
            ['15.jpg', ['White', 'Gray', 'Black', 'Pink']],   // Cashmere Ivory Scarf
            ['34.jpg', ['White', 'Gray', 'Black', 'Pink']],   // Cashmere White Wrap Scarf
            ['54.jpg', ['Gray', 'Black', 'Blue']],            // Cable Knit Scarf
        ];
        foreach ($scarves as [$thumb, $colors]) {
            $product = $prod($thumb);
            if (!$product) continue;
            $sort = 1;
            foreach ($colors as $colorName) {
                $vId = $val($attrColor, $colorName);
                if ($vId) $variations[] = $row($product, $attrColor, $vId, $thumb, 0, 0, $sort++);
            }
        }

        // Baseball Cap: Color only
        $cap = $prod('55.jpg');
        foreach ([
            [$attrColor, $val($attrColor, 'Yellow'), '55.jpg',   0, 0, 1],
            [$attrColor, $val($attrColor, 'Black'),  '55_1.jpg', 0, 0, 2],
            [$attrColor, $val($attrColor, 'Red'),    '55_1.jpg', 0, 0, 3],
        ] as [$aId, $vId, $img, $pAdj, $sAdj, $sort]) {
            if ($vId) $variations[] = $row($cap, $aId, $vId, $img, $pAdj, $sAdj, $sort);
        }

        // Men's Cardigan: Color + Size
        $cardigan = $prod('16.jpg');
        // already handled in $menClothing above

        // ==================================================================
        // BEAUTY (category_id = 4)
        // ==================================================================

        // Facial Steamer: Color (White only)
        $steamer = $prod('35.jpg');
        if ($val($attrColor, 'White')) {
            $variations[] = $row($steamer, $attrColor, $val($attrColor, 'White'), '35.jpg', 0, 0, 1);
        }

        // Electric Face Brush: Color (White, Pink)
        $faceBrush = $prod('36.jpg');
        foreach ([
            [$attrColor, $val($attrColor, 'White'), '36.jpg',   0, 0, 1],
            [$attrColor, $val($attrColor, 'Pink'),  '36_1.jpg', 0, 0, 2],
        ] as [$aId, $vId, $img, $pAdj, $sAdj, $sort]) {
            if ($vId) $variations[] = $row($faceBrush, $aId, $vId, $img, $pAdj, $sAdj, $sort);
        }

        // ==================================================================
        // BABY & TODDLER (category_id = 5)
        // ==================================================================

        // Baby Musical Drum: Color (Red, Blue)
        $drum = $prod('21.jpg');
        foreach ([
            [$attrColor, $val($attrColor, 'Red'),  '21.jpg',   0, 0, 1],
            [$attrColor, $val($attrColor, 'Blue'), '21_1.jpg', 0, 0, 2],
        ] as [$aId, $vId, $img, $pAdj, $sAdj, $sort]) {
            if ($vId) $variations[] = $row($drum, $aId, $vId, $img, $pAdj, $sAdj, $sort);
        }

        // Baby Bunny Rattle: Color (Blue, Pink)
        $rattle = $prod('38.jpg');
        foreach ([
            [$attrColor, $val($attrColor, 'Blue'), '38.jpg',   0, 0, 1],
            [$attrColor, $val($attrColor, 'Pink'), '38_1.jpg', 0, 0, 2],
        ] as [$aId, $vId, $img, $pAdj, $sAdj, $sort]) {
            if ($vId) $variations[] = $row($rattle, $aId, $vId, $img, $pAdj, $sAdj, $sort);
        }

        // Baby Teether Ball: Color (Red, Blue, Yellow, Green)
        $teether = $prod('40.jpg');
        foreach ([
            [$attrColor, $val($attrColor, 'Red'),    '40.jpg',   0, 0, 1],
            [$attrColor, $val($attrColor, 'Blue'),   '40_1.jpg', 0, 0, 2],
            [$attrColor, $val($attrColor, 'Yellow'), '40_1.jpg', 0, 0, 3],
        ] as [$aId, $vId, $img, $pAdj, $sAdj, $sort]) {
            if ($vId) $variations[] = $row($teether, $aId, $vId, $img, $pAdj, $sAdj, $sort);
        }

        // Penguin Night Light: Color (Pink, Gray)
        $penguin = $prod('42.jpg');
        foreach ([
            [$attrColor, $val($attrColor, 'Pink'), '42.jpg',   0, 0, 1],
            [$attrColor, $val($attrColor, 'Gray'), '42_1.jpg', 0, 0, 2],
        ] as [$aId, $vId, $img, $pAdj, $sAdj, $sort]) {
            if ($vId) $variations[] = $row($penguin, $aId, $vId, $img, $pAdj, $sAdj, $sort);
        }

        // Kids Ice Cream Cart: Color (Pink, Blue)
        $iceCream = $prod('43.jpg');
        foreach ([
            [$attrColor, $val($attrColor, 'Pink'), '43.jpg',   0, 0, 1],
            [$attrColor, $val($attrColor, 'Blue'), '43_1.jpg', 0, 0, 2],
        ] as [$aId, $vId, $img, $pAdj, $sAdj, $sort]) {
            if ($vId) $variations[] = $row($iceCream, $aId, $vId, $img, $pAdj, $sAdj, $sort);
        }

        // Kids Drum Kit: Color (Red, Blue)
        $kidsDrum = $prod('44.jpg');
        foreach ([
            [$attrColor, $val($attrColor, 'Red'),  '44.jpg',   0, 0, 1],
            [$attrColor, $val($attrColor, 'Blue'), '44_1.jpg', 0, 0, 2],
        ] as [$aId, $vId, $img, $pAdj, $sAdj, $sort]) {
            if ($vId) $variations[] = $row($kidsDrum, $aId, $vId, $img, $pAdj, $sAdj, $sort);
        }

        // ==================================================================
        // FURNITURE (category_id = 6)
        // ==================================================================

        // Ottoman: Color (Beige/White, Gray)
        $ottoman = $prod('31.jpg');
        foreach ([
            [$attrColor, $val($attrColor, 'White'), '31.jpg',   0, 0, 1],
            [$attrColor, $val($attrColor, 'Gray'),  '31_1.jpg', 0, 0, 2],
        ] as [$aId, $vId, $img, $pAdj, $sAdj, $sort]) {
            if ($vId) $variations[] = $row($ottoman, $aId, $vId, $img, $pAdj, $sAdj, $sort);
        }

        // Console Table: Color (Black only — high-gloss black lacquer)
        $console = $prod('33.jpg');
        if ($val($attrColor, 'Black')) {
            $variations[] = $row($console, $attrColor, $val($attrColor, 'Black'), '33.jpg', 0, 0, 1);
        }

        // ==================================================================
        // HOME & KITCHEN (category_id = 7)
        // ==================================================================

        // Chair Slipcover: Color (Gray, Black)
        $chairCover = $prod('32.jpg');
        foreach ([
            [$attrColor, $val($attrColor, 'Gray'),  '32.jpg',   0, 0, 1],
            [$attrColor, $val($attrColor, 'Black'), '32_1.jpg', 0, 0, 2],
        ] as [$aId, $vId, $img, $pAdj, $sAdj, $sort]) {
            if ($vId) $variations[] = $row($chairCover, $aId, $vId, $img, $pAdj, $sAdj, $sort);
        }

        // Glass Travel Mug: Color (Clear/White, Black)
        $mug = $prod('37.jpg');
        foreach ([
            [$attrColor, $val($attrColor, 'White'), '37.jpg',   0, 0, 1],
            [$attrColor, $val($attrColor, 'Black'), '37_1.jpg', 0, 0, 2],
        ] as [$aId, $vId, $img, $pAdj, $sAdj, $sort]) {
            if ($vId) $variations[] = $row($mug, $aId, $vId, $img, $pAdj, $sAdj, $sort);
        }

        // Ceramic Oil Dispenser: Color (Blue, White)
        $oilDispenser = $prod('39.jpg');
        foreach ([
            [$attrColor, $val($attrColor, 'Blue'),  '39.jpg',   0, 0, 1],
            [$attrColor, $val($attrColor, 'White'), '39_1.jpg', 0, 0, 2],
        ] as [$aId, $vId, $img, $pAdj, $sAdj, $sort]) {
            if ($vId) $variations[] = $row($oilDispenser, $aId, $vId, $img, $pAdj, $sAdj, $sort);
        }

        // ==================================================================
        // BAGS (category_id = 8)
        // ==================================================================

        // Camera Sling Bag: Color (Orange, Black)
        $camBag = $prod('27.jpg');
        foreach ([
            [$attrColor, $val($attrColor, 'Orange'), '27.jpg',   0, 0, 1],
            [$attrColor, $val($attrColor, 'Black'),  '27_1.jpg', 0, 0, 2],
        ] as [$aId, $vId, $img, $pAdj, $sAdj, $sort]) {
            if ($vId) $variations[] = $row($camBag, $aId, $vId, $img, $pAdj, $sAdj, $sort);
        }

        // Flexible Tripod: Color (Black)
        $tripod = $prod('28.jpg');
        if ($val($attrColor, 'Black')) {
            $variations[] = $row($tripod, $attrColor, $val($attrColor, 'Black'), '28.jpg', 0, 0, 1);
        }

        // Hiking Backpack 40L: Color (Yellow, Black)
        $hike40 = $prod('46.jpg');
        foreach ([
            [$attrColor, $val($attrColor, 'Yellow'), '46.jpg',   0, 0, 1],
            [$attrColor, $val($attrColor, 'Black'),  '46_1.jpg', 0, 0, 2],
        ] as [$aId, $vId, $img, $pAdj, $sAdj, $sort]) {
            if ($vId) $variations[] = $row($hike40, $aId, $vId, $img, $pAdj, $sAdj, $sort);
        }

        // Hiking Backpack 45L: Color (Yellow, Black)
        $hike45 = $prod('57.jpg');
        foreach ([
            [$attrColor, $val($attrColor, 'Yellow'), '57.jpg',   0, 0, 1],
            [$attrColor, $val($attrColor, 'Black'),  '57_1.jpg', 0, 0, 2],
        ] as [$aId, $vId, $img, $pAdj, $sAdj, $sort]) {
            if ($vId) $variations[] = $row($hike45, $aId, $vId, $img, $pAdj, $sAdj, $sort);
        }

        // Pearl Beaded Clutch: Color (White, Black)
        $clutch = $prod('63.jpg');
        foreach ([
            [$attrColor, $val($attrColor, 'White'), '63.jpg',   0, 0, 1],
            [$attrColor, $val($attrColor, 'Black'), '63_1.jpg', 0, 0, 2],
        ] as [$aId, $vId, $img, $pAdj, $sAdj, $sort]) {
            if ($vId) $variations[] = $row($clutch, $aId, $vId, $img, $pAdj, $sAdj, $sort);
        }

        // ==================================================================
        // FOOTWEAR (category_id = 9)
        // ==================================================================

        // High-Top Sneakers Yellow (47.jpg) — Shoe Size + Color variations
        $sneaker1 = $prod('47.jpg');
        $sneaker1Sizes = ['36', '37', '38', '39', '40', '41', '42', '43', '44', '45'];
        $sort = 1;
        foreach ($sneaker1Sizes as $sz) {
            $vId = $val($attrShoeSize, $sz);
            if ($vId) $variations[] = $row($sneaker1, $attrShoeSize, $vId, '47.jpg', 0, 0, $sort++);
        }
        // Color: Yellow, Red, Black, White
        $sort = 1;
        foreach (['Yellow', 'Red', 'Black', 'White'] as $colorName) {
            $vId = $val($attrColor, $colorName);
            if ($vId) $variations[] = $row($sneaker1, $attrColor, $vId, '47.jpg', 0, 0, $sort++);
        }

        // High-Top Sneakers (59.jpg — alternate view of same shoe, treat as same product)
        $sneaker2 = $prod('59.jpg');
        $sort = 1;
        foreach ($sneaker1Sizes as $sz) {
            $vId = $val($attrShoeSize, $sz);
            if ($vId) $variations[] = $row($sneaker2, $attrShoeSize, $vId, '59.jpg', 0, 0, $sort++);
        }
        $sort = 1;
        foreach (['Yellow', 'Red', 'Black', 'White'] as $colorName) {
            $vId = $val($attrColor, $colorName);
            if ($vId) $variations[] = $row($sneaker2, $attrColor, $vId, '59.jpg', 0, 0, $sort++);
        }

        // ==================================================================
        // Filter out any null rows (missing attribute/value IDs)
        // and bulk-insert
        // ==================================================================

        $variations = array_filter($variations, fn($v) => $v !== null);

        foreach (array_chunk($variations, 500) as $chunk) {
            DB::table('product_variations')->insert($chunk);
        }

        $this->command->info('ProductVariationSeeder: ' . count($variations) . ' variations inserted.');
    }
}