<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController as FrontendCategoryController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\BlogController as FrontendBlogController;
use App\Http\Controllers\FaqController as FrontendFaqController;
use App\Http\Controllers\BrandController as FrontendBrandController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\SubscriberController;

Route::middleware(['web'])->group(function () {

    $routes = ['products', 'shop', 'specials', 'gifts', 'featured', 'new-arrivals'];
    foreach ($routes as $route) {
        Route::match(['get', 'post'], $route, [ProductsController::class, 'index'])->name($route);
    }
    Route::get('products/{slug}', [ProductsController::class, 'show'])->name('front-product');

    Route::post('products/wishlist-toggle', [ProductsController::class, 'wishlistToggle'])->name('front-wishlist-toggle');
    Route::post('products/compare-toggle', [ProductsController::class, 'compareToggle'])->name('front-compare-toggle');


    Route::controller(CartController::class)->group(function () {
        Route::get('/cart',              'index')->name('front-cart');
        Route::post('/cart/store',         'store')->name('front-cart-store');
        Route::post('/cart/update/{id}', 'update')->name('front-cart-update');
        Route::get('/cart/remove/{id}',  'remove')->name('front-cart-remove');
        Route::post('/cart/clear',       'clear')->name('front-cart-clear');
        Route::get('/cart/dropdown',    'dropdown')->name('front-cart-dropdown');
    });

    Route::get('/checkout',              [CheckoutController::class, 'checkout'])->name('front-checkout');
    Route::get('/cart',                  [CheckoutController::class, 'cart'])->name('front-cart');
























    Route::get('/',                      [HomeController::class, 'index'])->name('home');
    Route::get('/about',                 [HomeController::class, 'about'])->name('about');
    Route::get('/faqs',                  [FrontendFaqController::class, 'index'])->name('web-faqs');

    Route::get('/thank-you',             [CheckoutController::class, 'ThankYou'])->name('thank-you');

    Route::get('/contact',               [PagesController::class, 'contact'])->name('contact');
    Route::get('/affiliate',             [PagesController::class, 'affiliate'])->name('affiliate');
    Route::get('/delivery-information',  [PagesController::class, 'deliveryInformation'])->name('delivery-information');
    Route::get('/privacy-policy',        [PagesController::class, 'privacyPolicy'])->name('privacy-policy');
    Route::get('/terms-conditions',      [PagesController::class, 'termsConditions'])->name('terms-conditions');
    Route::get('/return-policy',         [PagesController::class, 'returnPolicy'])->name('return-policy');
    Route::get('/gift-wrap-policy',      [PagesController::class, 'giftWrapPolicy'])->name('gift-wrap-policy');
    Route::get('/gift-certificates',     [PagesController::class, 'giftCertificates'])->name('gift-certificates');
    Route::get('/site-map',              [PagesController::class, 'siteMap'])->name('site-map');
    Route::get('/affiliate-policy',      [PagesController::class, 'affiliatePolicy'])->name('affiliate-policy');

    Route::post('/subscribers/add',      [SubscriberController::class, 'store'])->name('save-subscriber');

    Route::get('/blog',                  [FrontendBlogController::class, 'index'])->name('blog');
    Route::get('/blog/{slug}',           [FrontendBlogController::class, 'show'])->name('blog-single');

    Route::get('/login',                 [ProfileController::class, 'login'])->name('user-login');
    Route::post('/login',                [ProfileController::class, 'getUserLogin'])->name('get-user-login');
    Route::get('/profile',               [ProfileController::class, 'profile'])->name('profile');

    Route::get('/categories',            [FrontendCategoryController::class, 'index'])->name('categories');
    Route::get('/categories/{slug}',     [FrontendCategoryController::class, 'show'])->name('category');

    Route::get('/brands',                [FrontendBrandController::class, 'index'])->name('brands');
    Route::get('/brands/{slug}',         [FrontendBrandController::class, 'show'])->name('brand-single');

    // Admin login (public)
    //Route::get('/admin/login',           fn() => view('admin.login'))->name('admin-login');
    Route::get('/admin/login',           fn() => view('admin.login'))->name('login');
    Route::post('/admin/login',          [App\Http\Controllers\LoginController::class, 'getAdminLogin'])->name('get-admin-login');
    Route::get('/logout',                [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
});
