<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attribute extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\AttributeFactory> */
    use HasFactory, SoftDeletes;



    protected $fillable = [
        'input_type',
        'title',
        'description',
        'sort_by',
        'is_active',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function attributeValues()
    {
        return $this->hasMany(AttributeValue::class);
    }
    public function orderItemOptions()
    {
        return $this->hasMany(OrderItemOption::class);
    }

/*
    public static function getAttributeWithValue() {
        $output=[];
        $attributes = Attribute::all();
        if($attributes){
            foreach($attributes as $a){
                $output[$a->id]=$a;
            }
        }
    }
    */
}
