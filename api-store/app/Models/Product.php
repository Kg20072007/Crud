<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'sku',
        'name',
        'price',
        'weight',
        'descriptions',
        'thumbnail',
        'image',
        'create_date',
        'stock'
    ];

    public function options()
    {
        return $this->belongsToMany(Option::class, 'product_options');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_categories');
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function scopeInclude($query)
    {
        if (request()->has('include')) {
            $query->with(explode(',', request('include')));
        }

        return $query;
    }
}