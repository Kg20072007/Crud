<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\ProductOptionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailController;

Route::apiResource('products', ProductController::class);

Route::apiResource('options', OptionController::class);

Route::apiResource('product-options', ProductOptionController::class);

Route::apiResource('categories', CategoryController::class);

Route::apiResource('product-categories', ProductCategoryController::class);

Route::apiResource('customers', CustomerController::class);

Route::apiResource('orders', OrderController::class);

Route::apiResource('order-details', OrderDetailController::class);