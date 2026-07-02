<?php

use Illuminate\Support\Facades\Route;

// import all admin controllers

Route::middleware(['auth:system'])
    ->prefix('admin')
    ->namespace('\App\Http\Controllers\Admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/dashboard', function () {
            $from = 'admin.';
            return view($from . 'dashboard');
        })->name('dashboard');

        Route::get('/vouchers', function () {
            $from = 'admin.';
            return view($from . 'dashboard');
        })->name('vouchers');

        Route::get('/menues', function () {
            $from = 'admin.';
            return view($from . 'dashboard');
        })->name('menues');

        Route::get('/site-maps', function () {
            $from = 'admin.';
            return view($from . 'dashboard');
        })->name('site-maps');

        // CUSTOMERS - starting
        Route::controller(UserTempController::class)->group(function () {
            Route::prefix('/temp-customers')->group(function () {
                $sn = 'temp-customer';
                Route::get('/', 'index')->name($sn . 's');
                Route::get('/profile', 'show')->name($sn . '-profile');
                Route::get('/add', 'create')->name('create-' . $sn);
                Route::post('/add', 'store')->name('store-' . $sn);
                Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);

                Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
            });
        });
        Route::controller(UserController::class)->group(function () {
            Route::prefix('/customers')->group(function () {
                $sn = 'customer';
                Route::get('/', 'index')->name($sn . 's');
                Route::get('/profile', 'show')->name($sn . '-profile');
                Route::get('/add', 'create')->name('create-' . $sn);
                Route::post('/add', 'store')->name('store-' . $sn);
                Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);

                Route::get('/view/{id}', 'show')->name('show-' . $sn);

                Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
            });
        });
        Route::controller(UserGroupController::class)->group(function () {
            Route::prefix('/customer-groups')->group(function () {
                $sn = 'customer-group';
                Route::get('/', 'index')->name($sn . 's');
                Route::get('/add', 'create')->name('create-' . $sn);
                Route::post('/add', 'store')->name('store-' . $sn);
                Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);

                Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
            });
        });

        Route::controller(WishlistController::class)->group(function () {
            Route::prefix('/wishlists')->group(function () {
                $sn = 'wishlist';
                Route::get('/', 'index')->name($sn . 's');
                Route::get('/add', 'create')->name('create-' . $sn);
                Route::post('/add', 'store')->name('store-' . $sn);
                Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);

                Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
            });
        });
        Route::controller(AddressTypeController::class)->group(function () {
            Route::prefix('/address-types')->group(function () {
                $sn = 'address-type';
                Route::get('/', 'index')->name($sn . 's');
                Route::get('/add', 'create')->name('create-' . $sn);
                Route::post('/add', 'store')->name('store-' . $sn);
                Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);

                Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
            });
        });
        // CUSTOMERS - ending

        // PRODUCTS - starting
        Route::controller(CategoryController::class)->group(function () {
            Route::prefix('/categories')->group(function () {
                $pn = 'categories';
                $sn = 'category';
                Route::get('/', 'index')->name($pn);
                Route::get('/add', 'create')->name('create-' . $sn);
                Route::post('/add', 'store')->name('store-' . $sn);
                Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);

                Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
            });
        });
        Route::controller(BrandController::class)->group(function () {
            Route::prefix('/brands')->group(function () {
                $sn = 'brand';
                Route::get('/', 'index')->name($sn . 's');
                Route::get('/add', 'create')->name('create-' . $sn);
                Route::post('/add', 'store')->name('store-' . $sn);
                Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);

                Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
            });
        });
        Route::controller(AttributeController::class)->group(function () {
            Route::prefix('/attributes')->group(function () {
                $sn = 'attribute';
                Route::get('/', 'index')->name($sn . 's');
                Route::get('/add', 'create')->name('create-' . $sn);
                Route::post('/add', 'store')->name('store-' . $sn);
                Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);

                Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
            });
        });
        Route::controller(AttributeValueController::class)->group(function () {
            Route::prefix('/attribute-values')->group(function () {
                $sn = 'attribute-value';
                Route::get('/', 'index')->name($sn . 's');
                Route::get('/add', 'create')->name('create-' . $sn);
                Route::post('/add', 'store')->name('store-' . $sn);
                Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);

                Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
            });
        });
        Route::controller(TagController::class)->group(function () {
            Route::prefix('/tags')->group(function () {
                $sn = 'tag';
                Route::get('/', 'index')->name($sn . 's');
                Route::get('/add', 'create')->name('create-' . $sn);
                Route::post('/add', 'store')->name('store-' . $sn);
                Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);

                Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
            });
        });

        Route::controller(ProductController::class)->group(function () {
            Route::prefix('/products')->group(function () {
                $sn = 'product';
                $pn = 'products';
                Route::get('/', 'index')->name($pn);
                Route::get('/add', 'create')->name('create-' . $sn);
                Route::post('/add', 'store')->name('store-' . $sn);
                Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);

                Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
            });
        });

        Route::controller(ProductImageController::class)->group(function () {
            Route::prefix('/products/edit/{pid}/product-catalog-size-chart')->group(function () {
                $sn = 'product-catalog-size-chart';
                Route::get('/', 'catalogSizeChart')->name($sn);
                Route::post('/', 'catalogSizeChart')->name('update-' . $sn);
            });

            Route::prefix('/products/edit/{pid}/product-images')->group(function () {
                $sn = 'product-image';
                Route::get('/', 'index')->name($sn . 's');

                Route::post('/update-title', 'updateImageTitle')->name('update-title-' . $sn);

                // Route::get('/add', 'create')->name('create-' . $sn);
                Route::post('/add', 'store')->name('store-' . $sn . 's');

                /*
                 * Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                 * Route::post('/edit/{id}', 'update')->name('update-' . $sn);
                 *
                 * Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                 * Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
                 */
                Route::get('/destroy/{id}', 'destroy')->name('destroy-' . $sn);
            });
        });

        Route::controller(ProductReviewController::class)->group(function () {
            Route::prefix('/products/edit/{pid}/product-reviews')->group(function () {
                $sn = 'product-review';
                Route::get('/', 'index')->name($sn . 's');

                /*
                 * Route::get('/add', 'create')->name('create-' . $sn);
                 * Route::post('/add', 'store')->name('store-' . $sn);
                 * Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                 */
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);
                // Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                // Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
            });
        });
        Route::controller(ProductReviewController::class)->group(function () {
            Route::prefix('/products/reviews')->group(function () {
                $sn = 'review';
                Route::get('/', 'index')->name($sn . 's');

                /*
                 * Route::get('/add', 'create')->name('create-' . $sn);
                 * Route::post('/add', 'store')->name('store-' . $sn);
                 * Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                 */
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);
                // Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                // Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
            });
        });
        Route::controller(ProductFaqController::class)->group(function () {
            Route::prefix('/products/edit/{pid}/product-faqs')->group(function () {
                $sn = 'product-faq';

                Route::get('/', 'index')->name($sn . 's');

                Route::get('/add', 'create')->name('create-' . $sn);
                Route::post('/add', 'store')->name('store-' . $sn);
                Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);

                Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
                Route::get('/destroy/{id}', 'destroy')->name('destroy-' . $sn);
            });
        });
        Route::controller(ProductVideoSectionController::class)->group(function () {
            Route::prefix('/products/edit/{pid}/product-video-sections')->group(function () {
                $sn = 'product-video-section';
                Route::get('/', 'index')->name($sn . 's');
                Route::get('/add', 'create')->name('create-' . $sn);
                Route::post('/add', 'store')->name('store-' . $sn);
                Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);

                Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
                Route::get('/destroy/{id}', 'destroy')->name('destroy-' . $sn);
            });
        });
        Route::controller(ProductVideoController::class)->group(function () {
            Route::prefix('/products/edit/{pid}/product-videos')->group(function () {
                $sn = 'product-video';
                Route::get('/', 'index')->name($sn . 's');
                Route::get('/add', 'create')->name('create-' . $sn);
                Route::post('/add', 'store')->name('store-' . $sn);
                Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);

                Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
                Route::get('/destroy/{id}', 'destroy')->name('destroy-' . $sn);
            });
        });
        Route::controller(ProductVariationController::class)->group(function () {
            Route::prefix('/products/edit/{pid}/product-variations')->group(function () {
                $sn = 'product-variation';
                Route::get('/', 'index')->name($sn . 's');
                Route::get('/add', 'create')->name('create-' . $sn);
                Route::post('/add', 'store')->name('store-' . $sn);
                Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);

                Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
                Route::get('/destroy/{id}', 'destroy')->name('destroy-' . $sn);
            });
        });

        Route::controller(WarehouseController::class)->group(function () {
            Route::prefix('/warehouses')->group(function () {
                $sn = 'warehouse';
                Route::get('/', 'index')->name($sn . 's');
                Route::get('/add', 'create')->name('create-' . $sn);
                Route::post('/add', 'store')->name('store-' . $sn);
                Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);

                Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
            });
        });
        // PRODUCTS - ending

        // ORDER - starting

        Route::controller(OrderStatusController::class)->group(function () {
            Route::prefix('/order-statuses')->group(function () {
                $sn = 'order-status';
                Route::get('/', 'index')->name($sn . 'es');
                Route::get('/add', 'create')->name('create-' . $sn);
                Route::post('/add', 'store')->name('store-' . $sn);
                Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);

                Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
            });
        });
        Route::controller(OrderSourceController::class)->group(function () {
            Route::prefix('/order-sources')->group(function () {
                $sn = 'order-source';
                Route::get('/', 'index')->name($sn . 's');
                Route::get('/add', 'create')->name('create-' . $sn);
                Route::post('/add', 'store')->name('store-' . $sn);
                Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);

                Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
            });
        });

        Route::controller(OrderController::class)->group(function () {
            Route::prefix('/orders')->group(function () {
                $sn = 'order';
                Route::get('/', 'index')->name($sn . 's');
                Route::get('/add', 'create')->name('create-' . $sn);
                Route::post('/add', 'store')->name('store-' . $sn);
                Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);

                Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
            });
        });
        Route::controller(OrderStatusLogController::class)->group(function () {
            Route::prefix('/order-status-logs')->group(function () {
                $sn = 'order-status-log';
                Route::get('/', 'index')->name($sn . 's');
                Route::get('/add', 'create')->name('create-' . $sn);
                Route::post('/add', 'store')->name('store-' . $sn);
                Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);

                Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
            });
        });

        // ORDER - ending


        // MARKETING - starting
        Route::controller(BlogCategoryController::class)->group(function () {
            Route::prefix('/blog-categories')->group(function () {
                $pn = 'blog-categories';
                $sn = 'blog-category';
                Route::get('/', 'index')->name($pn);
                Route::get('/add', 'create')->name('create-' . $sn);
                Route::post('/add', 'store')->name('store-' . $sn);
                Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);

                Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
            });
        });
        Route::controller(BlogController::class)->group(function () {
            Route::prefix('/blogs')->group(function () {
                $sn = 'blog';
                Route::get('/', 'index')->name($sn . 's');
                Route::get('/add', 'create')->name('create-' . $sn);
                Route::post('/add', 'store')->name('store-' . $sn);
                Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);

                Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
            });
        });

        Route::controller(SubscriberController::class)->group(function () {
            Route::prefix('/subscribers')->group(function () {
                $sn = 'subscriber';
                Route::get('/', 'index')->name($sn . 's');
                Route::get('/add', 'create')->name('create-' . $sn);
                Route::post('/add', 'store')->name('store-' . $sn);
                Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);

                Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
            });
        });
        Route::controller(NotificationTypeController::class)->group(function () {
            Route::prefix('/notification-types')->group(function () {
                $sn = 'notification-type';
                Route::get('/', 'index')->name($sn . 's');
                Route::get('/add', 'create')->name('create-' . $sn);
                Route::post('/add', 'store')->name('store-' . $sn);
                Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);

                Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
            });
        });
        Route::controller(NotificationController::class)->group(function () {
            Route::prefix('/notifications')->group(function () {
                $sn = 'notification';
                Route::get('/', 'index')->name($sn . 's');
                Route::get('/add', 'create')->name('create-' . $sn);
                Route::post('/add', 'store')->name('store-' . $sn);
                Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);

                Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
            });
        });
        Route::controller(EmailCampaignController::class)->group(function () {
            Route::prefix('/email-campaigns')->group(function () {
                $sn = 'email-campaign';
                Route::get('/', 'index')->name($sn . 's');
                Route::get('/add', 'create')->name('create-' . $sn);
                Route::post('/add', 'store')->name('store-' . $sn);
                Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);

                Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
            });
        });

        Route::controller(PopupController::class)->group(function () {
            Route::prefix('/popups')->group(function () {
                $sn = 'popup';
                Route::get('/', 'index')->name($sn . 's');
                Route::get('/add', 'create')->name('create-' . $sn);
                Route::post('/add', 'store')->name('store-' . $sn);
                Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);

                Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
            });
        });
        // MARKETING - ending

        // SUPPORT - starting
        Route::controller(CallBackRequestController::class)->group(function () {
            Route::prefix('/callback-requests')->group(function () {
                $sn = 'callback-request';
                Route::get('/', 'index')->name($sn . 's');
                Route::get('/add', 'create')->name('create-' . $sn);
                Route::post('/add', 'store')->name('store-' . $sn);
                Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);

                Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
            });
        });
        Route::controller(FaqCategoryController::class)->group(function () {
            Route::prefix('/faq-categories')->group(function () {
                $pn = 'faq-categories';
                $sn = 'faq-category';
                Route::get('/', 'index')->name($pn);
                Route::get('/add', 'create')->name('create-' . $sn);
                Route::post('/add', 'store')->name('store-' . $sn);
                Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);

                Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
            });
        });
        Route::controller(SupportTypeController::class)->group(function () {
            Route::prefix('/support-types')->group(function () {
                $sn = 'support-type';
                Route::get('/', 'index')->name($sn . 's');
                Route::get('/add', 'create')->name('create-' . $sn);
                Route::post('/add', 'store')->name('store-' . $sn);
                Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);

                Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
            });
        });
        Route::controller(SupportStatusController::class)->group(function () {
            Route::prefix('/support-statuses')->group(function () {
                $sn = 'support-status';
                Route::get('/', 'index')->name($sn . 'es');
                Route::get('/add', 'create')->name('create-' . $sn);
                Route::post('/add', 'store')->name('store-' . $sn);
                Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);

                Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
            });
        });
        Route::controller(FaqController::class)->group(function () {
            Route::prefix('/faqs')->group(function () {
                $sn = 'faq';
                Route::get('/', 'index')->name($sn . 's');
                Route::get('/add', 'create')->name('create-' . $sn);
                Route::post('/add', 'store')->name('store-' . $sn);
                Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);

                Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
            });
        });
        Route::controller(InquiryController::class)->group(function () {
            Route::prefix('/inquiries')->group(function () {
                $sn = 'inquiry';
                $pn = 'inquiries';
                Route::get('/', 'index')->name($pn);
                Route::get('/add', 'create')->name('create-' . $sn);
                Route::post('/add', 'store')->name('store-' . $sn);
                Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);

                Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
            });
        });
        Route::controller(SupportCommentController::class)->group(function () {
            Route::prefix('/support-comments')->group(function () {
                $sn = 'support-comment';
                $pn = 'support-comments';
                Route::get('/', 'index')->name($sn . 's');
                Route::get('/add', 'create')->name('create-' . $sn);
                Route::post('/add', 'store')->name('store-' . $sn);
                Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);

                Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
            });
        });
        Route::controller(SupportController::class)->group(function () {
            Route::prefix('/supports')->group(function () {
                $sn = 'support';
                Route::get('/', 'index')->name($sn . 's');
                Route::get('/add', 'create')->name('create-' . $sn);
                Route::post('/add', 'store')->name('store-' . $sn);
                Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);

                Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
            });
        });
        // SUPPORT - ending

        // SEO - starting
        Route::controller(SitemapController::class)->group(function () {
            Route::prefix('sitemap')->group(function () {
                $sn = 'sitemap';
                Route::get('/generate', 'generate')->name('generate-' . $sn);
                Route::post('/download', 'download')->name('download-' . $sn);
            });
        });
        // SEO - ending

        // SYSTEM USERS - starting
        Route::controller(SystemUserRoleController::class)->group(function () {
            Route::prefix('/system-user-roles')->group(function () {
                $sn = 'system-user-role';
                Route::get('/', 'index')->name($sn . 's');
                Route::get('/add', 'create')->name('create-' . $sn);
                Route::post('/add', 'store')->name('store-' . $sn);
                Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);

                Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
            });
        });
        Route::controller(SystemUserController::class)->group(function () {
            Route::prefix('/system-users')->group(function () {
                $sn = 'system-user';
                Route::get('/', 'index')->name($sn . 's');
                Route::get('/add', 'create')->name('create-' . $sn);
                Route::post('/add', 'store')->name('store-' . $sn);
                Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);

                Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
            });
        });
        Route::controller(PrivilegeGroupController::class)->group(function () {
            Route::prefix('/privilege-groups')->group(function () {
                $sn = 'privilege-group';
                Route::get('/', 'index')->name($sn . 's');
                Route::get('/add', 'create')->name('create-' . $sn);
                Route::post('/add', 'store')->name('store-' . $sn);
                Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);

                Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
            });
        });
        Route::controller(PrivilegeController::class)->group(function () {
            Route::prefix('/privileges')->group(function () {
                $sn = 'privilege';
                Route::get('/', 'index')->name($sn . 's');
                Route::get('/add', 'create')->name('create-' . $sn);
                Route::post('/add', 'store')->name('store-' . $sn);
                Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);

                Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
            });
        });

        // SYSTEM USERS - ending

        // HR & PAYROLL - starting
        Route::controller(DepartmentController::class)->group(function () {
            Route::prefix('/departments')->group(function () {
                $sn = 'department';
                Route::get('/', 'index')->name($sn . 's');
                Route::get('/add', 'create')->name('create-' . $sn);
                Route::post('/add', 'store')->name('store-' . $sn);
                Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);

                Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
            });
        });
        Route::controller(DesignationController::class)->group(function () {
            Route::prefix('/designations')->group(function () {
                $sn = 'designation';
                Route::get('/', 'index')->name($sn . 's');
                Route::get('/add', 'create')->name('create-' . $sn);
                Route::post('/add', 'store')->name('store-' . $sn);
                Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);

                Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
            });
        });
        // HR & PAYROLL - ending

        // CMS - starting
        Route::controller(BannerController::class)->group(function () {
            Route::prefix('/banners')->group(function () {
                $sn = 'banner';
                Route::get('/', 'index')->name($sn . 's');
                Route::get('/add', 'create')->name('create-' . $sn);
                Route::post('/add', 'store')->name('store-' . $sn);
                Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);

                Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
            });
        });
        Route::controller(BannerLocationController::class)->group(function () {
            Route::prefix('/banner-locations')->group(function () {
                $sn = 'banner-location';
                Route::get('/', 'index')->name($sn . 's');
                Route::get('/add', 'create')->name('create-' . $sn);
                Route::post('/add', 'store')->name('store-' . $sn);
                Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);

                Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
            });
        });
        Route::controller(PageController::class)->group(function () {
            Route::prefix('/pages')->group(function () {
                $sn = 'page';
                Route::get('/', 'index')->name($sn . 's');
                Route::get('/add', 'create')->name('create-' . $sn);
                Route::post('/add', 'store')->name('store-' . $sn);
                Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);

                Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
            });
        });
        Route::controller(VendorController::class)->group(function () {
            Route::prefix('/vendors')->group(function () {
                $sn = 'vendor';
                Route::get('/', 'index')->name($sn . 's');
                Route::get('/add', 'create')->name('create-' . $sn);
                Route::post('/add', 'store')->name('store-' . $sn);
                Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);

                Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
                Route::get('/destroy/{id}', 'destroy')->name('destroy-' . $sn);
            });
        });
        Route::controller(AssociatedFaqController::class)->group(function () {
            Route::prefix('/associated-faqs')->group(function () {
                $sn = 'associated-faq';
                Route::get('/', 'index')->name($sn . 's');
                Route::get('/add', 'create')->name('create-' . $sn);
                Route::post('/add', 'store')->name('store-' . $sn);
                Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);

                Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
            });
        });
        // CMS - ending

        // GENERAL - starting
        Route::controller(CountryController::class)->group(function () {
            Route::prefix('/countries')->group(function () {
                $pn = 'countries';
                $sn = 'country';
                Route::get('/', 'index')->name($pn);
                Route::get('/add', 'create')->name('create-' . $sn);
                Route::post('/add', 'store')->name('store-' . $sn);
                Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);

                Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
            });
        });
        Route::controller(CityController::class)->group(function () {
            Route::prefix('/cities')->group(function () {
                $pn = 'cities';
                $sn = 'city';
                Route::get('/', 'index')->name($pn);
                Route::get('/add', 'create')->name('create-' . $sn);
                Route::post('/add', 'store')->name('store-' . $sn);
                Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);

                Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
            });
        });
        // GENERAL - ending

        // SETTINGS - starting

        Route::controller(SettingController::class)->group(function () {
            Route::prefix('/settings')->group(function () {
                $sn = 'setting';
                Route::get('/', 'index')->name($sn . 's');
                Route::get('/add', 'create')->name('create-' . $sn);
                Route::post('/add', 'store')->name('store-' . $sn);
                Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);

                Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
            });
        });
        Route::controller(ShipperController::class)->group(function () {
            Route::prefix('/shippers')->group(function () {
                $sn = 'shipper';
                Route::get('/', 'index')->name($sn . 's');
                Route::get('/add', 'create')->name('create-' . $sn);
                Route::post('/add', 'store')->name('store-' . $sn);
                Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);

                Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
            });
        });
        Route::controller(SupplierController::class)->group(function () {
            Route::prefix('/suppliers')->group(function () {
                $sn = 'supplier';
                Route::get('/', 'index')->name($sn . 's');
                Route::get('/add', 'create')->name('create-' . $sn);
                Route::post('/add', 'store')->name('store-' . $sn);
                Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);

                Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
            });
        });
        Route::controller(SystemUserRolePrivilegeController::class)->group(function () {
            Route::prefix('/system-user-role-privileges')->group(function () {
                $sn = 'system-user-role-privilege';
                Route::get('/', 'index')->name($sn . 's');
                Route::get('/add', 'create')->name('create-' . $sn);
                Route::post('/add', 'store')->name('store-' . $sn);
                Route::get('/edit/{id}', 'edit')->name('edit-' . $sn);
                Route::post('/edit/{id}', 'update')->name('update-' . $sn);

                Route::get('/trash/{id}', 'trash')->name('trash-' . $sn);
                Route::get('/restore/{id}', 'restore')->name('restore-' . $sn);
            });
        });
        // SETTINGS - ending
    });
