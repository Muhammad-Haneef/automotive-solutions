<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [

        'category_id',
        'brand_id',
        'warehouse_id',
        'shipping_class_id',
        'title',
        'slug',
        'sku',
        'barcode',
        'model',
        'excerpt',
        'description',
        'details',
        'type',
        'thumbnail',
        'thumbnail2',
        'price',
        'sale_price',
        'cost',
        'stock_qty',
        'stock_status',
        'low_stock_alert',
        'backorderable',
        'batch_no',
        'expiration_date',
        'weight',
        'dimensions',
        'meta_title',
        'meta_keywords',
        'meta_description',
        'shipping_weight',
        'shipping_dimensions',
        'is_global',
        'return_policy',
        'warranty_period',
        'warranty_period_unit',
        'warranty_type',
        'return_able',
        'featured',
        'upsellable',
        'cross_sellable',
        'file',
        'min_purchase',
        'max_purchase',
        'license_type',
        'download_limit',
        'sort_by',
        'is_active',
    ];



    public function wishlists()
    {
        return $this->hasMany(Wishlist::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_categories');
    }

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }

    public function shippingClass()
    {
        return $this->belongsTo(ShippingClass::class);
    }

    public function attributes()
    {
        return $this->hasMany(ProductAttribute::class);
    }

    public function faqs()
    {
        return $this->hasMany(ProductFaq::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function reviews()
    {
        return $this->hasMany(ProductReview::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'product_tags');
    }

    public function videos()
    {
        return $this->hasMany(ProductVideo::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
    public function couponUsage()
    {
        return $this->hasOne(CouponUsage::class);
    }

     /**
     * A Product can have many video sections.
     */
    public function videoSections()
    {
        return $this->hasMany(ProductVideoSection::class, 'product_id');
    }

}
