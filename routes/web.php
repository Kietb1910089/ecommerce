<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistersController;
use App\Http\Controllers\RegistersShopController;
use App\Http\Controllers\ShopController;
use App\Http\Middleware\CheckingShopLogin;

#dang ky dap nhap user
Route::get('/', [RegistersController::class, 'index'])->name('index');
Route::get('login', [RegistersController::class, 'login'])->name('login');
Route::get('registers', [RegistersController::class, 'registers'])->name('registers');
Route::post('registers_user', [RegistersController::class, 'registers_user'])->name('registers_user');
Route::post('login_user', [RegistersController::class, 'login_user'])->name('login_user');

#dang ky dang nhap ban hang
Route::get('register_shop', [RegistersShopController::class, 'register_shop'])->name('register_shop');
Route::get('login_shop', [RegistersShopController::class, 'login_shop'])->name('login_shop');
Route::POST('registers_shop', [RegistersShopController::class, 'registers_shop'])->name('registers_shop');
Route::POST('logins_shop', [RegistersShopController::class, 'logins_shop'])->name('logins_shop');
# trang ban hang
Route::group([
    'middleware' => CheckingShopLogin::class],function(){
        Route::get('index_shop', [ShopController::class, 'index_shop'])->name('index_shop');
        Route::get('add_product', [ShopController::class, 'add_product'])->name('add_product');
        Route::get('select_category', [ShopController::class, 'select_category'])->name('select_category');
        Route::post('shop_add_product', [ShopController::class, 'shop_add_product'])->name('shop_add_product');
        Route::post('add_product_quantity', [ShopController::class, 'add_product_quantity'])->name('add_product_quantity');

}); 

