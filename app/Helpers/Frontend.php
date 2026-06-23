<?php

use Illuminate\Support\Facades\DB;


if (!function_exists('getBannerByLocationId')) {
    function getBannerByLocationId($location_id = 0, $get_all = false)
    {
        if ($get_all) {
            return App\Models\Admin\Banner::where('banner_location_id', $location_id)
                ->with('images')
                ->get();
        } else {
            return App\Models\Admin\Banner::where('banner_location_id', $location_id)
                ->with('images')
                ->first();
        }
    }
}

if (!function_exists('getBannerById')) {
    function getBannerById($id = 0)
    {
        return App\Models\Admin\Banner::where('id', $id)
            ->with('images')
            ->first();
    }
}
if (!function_exists('getBannerImagesByBannerId')) {
    function getBannerImagesByBannerId($id = 0)
    {
        return App\Models\Admin\BannerImage::where('banner_id', $id)->get();
    }
}

// app/helpers.php

if (!function_exists('getWishlist')) {
    function getWishlist()
    {
        $wishlist = [];
        if (auth()->check()) {
            $wishlist = \App\Models\Admin\Wishlist::where('user_id', auth()->id())
                ->pluck('product_id')->toArray();
        }
        return $wishlist;
    }
}

if (!function_exists('getCompare')) {
    function getCompare()
    {
        $compare = [];
        if (auth()->check()) {
            $compare = \App\Models\Admin\Compare::where('user_id', auth()->id())
                ->pluck('product_id')->toArray();
        }
        return $compare;
    }
}

// app/helpers.php
if (!function_exists('cartCount')) {
    function cartCount()
    {
        return app(\App\Services\CartService::class)->getCount();
    }
}
