<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\productController;
use App\Http\Controllers\userController;
use App\Http\Controllers\salesController;


// Home Page
Route::get('/', [homeController::class, 'home']);

// Product Routes
Route::get('/category/food-beverage', [productController::class, 'foodBeverage']);
Route::get('/category/beauty-health', [productController::class, 'beautyHealth']);
Route::get('/category/home-care', [productController::class, 'homeCare']);
Route::get('/category/baby-kid', [productController::class, 'babyKid']);

// User Page
Route::get('/user/{id}/name/{name}', [userController::class, 'display']);

// Sales Page
Route::get('/sales', [salesController::class, 'sales']);
