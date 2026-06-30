<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_categories');
    }

    public function scopeInclude($query)
    {
        if (request()->has('include')) {
            $query->with(explode(',', request('include')));
        }

        return $query;
    }
}