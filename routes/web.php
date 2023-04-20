<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistersController;
use App\Http\Controllers\RegistersShopController;
use App\Http\Controllers\ShopController;
use App\Http\Middleware\CheckingShopLogin;
use App\Http\Middleware\CheckingUserLogin;
use App\Http\Middleware\CheckingAdminLogin;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;

#dang ky dap nhap user
Route::get('login', [RegistersController::class, 'login'])->name('login');
Route::get('registers', [RegistersController::class, 'registers'])->name('registers');
Route::post('registers_user', [RegistersController::class, 'registers_user'])->name('registers_user');
Route::post('login_user', [RegistersController::class, 'login_user'])->name('login_user');
Route::get('logout_user', [RegistersController::class, 'logout_user'])->name('logout_user');

Route::get('/', [UserController::class, 'index'])->name('index');
Route::get('/detail_product/{product_id}',[UserController::class, 'detail_product'])->name('detail_product');
Route::get('view_shop/{shop_id}',[UserController::class, 'view_shop'])->name('view_shop');
Route::get('choose_subcategory',[UserController::class, 'choose_subcategory'])-> name('choose_subcategory');
Route::get('choose_popular',[UserController::class, 'choose_popular'])-> name('choose_popular');
Route::get('choose_newest',[UserController::class, 'choose_newest'])-> name('choose_newest');
Route::get('choose_best_sell',[UserController::class, 'choose_best_sell'])-> name('choose_best_sell');
Route::get('choose_high_low',[UserController::class, 'choose_high_low'])-> name('choose_high_low');
Route::get('choose_low_high',[UserController::class, 'choose_low_high'])-> name('choose_low_high');
Route::GET('search',[UserController::class, 'search'])-> name('search');

#dang ky dang nhap ban hang
Route::get('register_shop', [RegistersShopController::class, 'register_shop'])->name('register_shop');
Route::get('login_shop', [RegistersShopController::class, 'login_shop'])->name('login_shop');
Route::POST('registers_shop', [RegistersShopController::class, 'registers_shop'])->name('registers_shop');
Route::POST('logins_shop', [RegistersShopController::class, 'logins_shop'])->name('logins_shop');

# trang ban hang
Route::group([
    'middleware' => CheckingShopLogin::class],function(){
        Route::get('logout_shop', [RegistersShopController::class, 'logout_shop'])->name('logout_shop');
        Route::get('index_shop', [ShopController::class, 'index_shop'])->name('index_shop');
        Route::get('add_product', [ShopController::class, 'add_product'])->name('add_product');
        Route::get('select_category', [ShopController::class, 'select_category'])->name('select_category');
        // Route::post('shop_add_product', [ShopController::class, 'shop_add_product'])->name('shop_add_product');
        Route::get('shop_add_products', [ShopController::class, 'shop_add_products'])->name('shop_add_products');
        Route::get('add_product_quantity', [ShopController::class, 'add_product_quantity'])->name('add_product_quantity');
        Route::get('manage_product', [ShopController::class, 'manage_product'])->name('manage_product');
        Route::post('add_product_quantitys', [ShopController::class, 'add_product_quantitys'])->name('add_product_quantitys');
        Route::post('/stop_product_ajax',[ShopController::class, 'stop_product_ajax'])-> name('stop_product_ajax');
        Route::post('/start_product_ajax',[ShopController::class, 'start_product_ajax'])-> name('start_product_ajax');
        Route::get('edit_product/{product_id}', [ShopController::class, 'edit_product'])->name('edit_product');
        Route::post('/update_product',[ShopController::class, 'update_product'])-> name('update_product');
        Route::get('manage_order', [ShopController::class, 'manage_order'])->name('manage_order');
        Route::get('manage_order_cancel', [ShopController::class, 'manage_order_cancel'])->name('manage_order_cancel');
        Route::post('/accept_order',[ShopController::class, 'accept_order'])-> name('accept_order');
        Route::post('/cancel_order',[ShopController::class, 'cancel_order'])-> name('cancel_order');
        Route::get('view_order_detail/{order_id}', [ShopController::class, 'view_order_detail'])->name('view_order_detail');

}); 
Route::group([
    'middleware' => CheckingUserLogin::class],function(){
        //Trang giỏ hàng
        Route::post('/add_cart_ajax',[UserController::class, 'add_cart_ajax'])-> name('add_cart_ajax');
        Route::get('/show_cart_ajax',[UserController::class, 'show_cart_ajax'])-> name('show_cart_ajax');
        Route::post('/plus_cart_ajax',[CartController::class, 'plus_cart_ajax'])-> name('plus_cart_ajax');
        Route::post('/minus_cart_ajax',[CartController::class, 'minus_cart_ajax'])-> name('minus_cart_ajax');
        Route::post('/update_cart_ajax',[CartController::class, 'update_cart_ajax'])-> name('update_cart_ajax');
        Route::post('/delete_cart_ajax',[CartController::class, 'delete_cart_ajax'])-> name('delete_cart_ajax');
        Route::get('/choose_shop',[CartController::class, 'choose_shop'])-> name('choose_shop');
        //Trang thanh toán
        Route::get('/checkout',[CheckoutController::class, 'checkout'])-> name('checkout');
        Route::POST('/order',[CheckoutController::class, 'order'])-> name('order');
        Route::get('/after_order',[CheckoutController::class, 'after_order'])-> name('after_order');
        Route::get('/review_order',[CheckoutController::class, 'review_order'])-> name('review_order');
}); 
Route::group([
    'middleware' => CheckingAdminLogin::class],function(){
        

}); 