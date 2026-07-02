<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

use App\Http\Controllers\Admin\SubscriberController;
use App\Http\Controllers\BlogController as FrontendBlogController;
use App\Http\Controllers\BrandController as FrontendBrandController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController as FrontendCategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\FaqController as FrontendFaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactUsController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web'])->group(function () {
    Route::get('/fresh-migrate', function (Request $request) {
        /*
        abort_unless(
            $request->query('key') === env('DEPLOY_KEY'),
            403
        );
        */
        Artisan::call('migrate:fresh', [
            '--seed' => true,
            '--force' => true,
        ]);

        return '<pre>' . Artisan::output() . '</pre>';
    });


    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/about-us', [HomeController::class, 'about'])->name('about-us');

    Route::get('/faqs', [FrontendFaqController::class, 'index'])->name('faqs');

    Route::get('/contact-us', [ContactUsController::class, 'create'])->name('contact-us');

    Route::get('/blogs', [FrontendBlogController::class, 'index'])->name('blogs');
    Route::get('/blogs/{slug}', [FrontendBlogController::class, 'show'])->name('blog-show');
    Route::get('/blogs/category/{slug}', [FrontendBlogController::class, 'index'])->name('blog-category-show');

    Route::get('/products', [ProductsController::class, 'index'])->name('products');
    Route::get('/products/{slug}', [ProductsController::class, 'show'])->name('product-show');

    Route::get('/brands', [FrontendBrandController::class, 'index'])->name('brands');
    Route::get('/brands/{slug}', [FrontendBrandController::class, 'show'])->name('brand-show');

    Route::get('/categories', [FrontendCategoryController::class, 'index'])->name('categories');
    Route::get('/categories/{slug}', [FrontendCategoryController::class, 'show'])->name('category-show');



    // Admin login (public)
    // Route::get('/admin/login',           fn() => view('admin.login'))->name('admin-login');
    Route::get('/admin/login', fn() => view('admin.login'))->name('login');
    Route::post('/admin/login', [App\Http\Controllers\LoginController::class, 'getAdminLogin'])->name('get-admin-login');
    Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
});
