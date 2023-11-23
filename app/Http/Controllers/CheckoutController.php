<?php

namespace App\Http\Controllers;
use Validate;
use App\Models\Shop;
use App\Models\Cart;
use App\Models\Products;
use App\Models\Categories;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Payment;
use App\Models\Shipping;
use App\Models\SubCategories;
use App\Models\ProductsImages;
use App\Models\ProductCombination;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{   
    public function checkout(){
        $user_id = Session::get('user_id');
        $shop_id = request('choice-shop');
        $shop = DB::table('shop')
            ->where('id', $shop_id)
            ->select( 'id', 'shopname', 'shopImg',)
            ->first();
        $product_cart = DB::table('cart')
            ->join('shop', 'cart.shop_id', '=', 'shop.id')
            ->where('user_id', $user_id)
            ->where('shop_id', $shop_id)
            ->select('shop_id', 'product_id', 'productName' ,'product_price', 'quantity', 'combination', 'product_image')
            ->get();
        $total_price = 0;
        foreach($product_cart as $key => $cart){
                $total_price += $cart->product_price * $cart->quantity;
            }
        // $total_price = number_format($total_price, 0, ',', '.');
        // dd($shop);
        return view('user.checkout', compact('shop', 'product_cart', 'total_price'));
    }
    public function order(Request $request){
        $user_id = Session::get('user_id');
        $shop_id = $request->shop_id;
        if ($request->ship_email == null) {
            $ship_email = "";
        } else {
            $ship_email = $request->ship_email;
        }
        if ($request->note == null) {
            $note = "";
        } else {
            $note = $request->note;
        }
        
        $pre_address = $request->pre_address;
        $detail_address = $request->detail_address;
        $ship_address = $pre_address . $detail_address;

        if ($request->payment_option==0) {
            // insert payment method
            $payment_data = array();
            $payment_data['payment_method'] = $request->payment_option;
            $payment_data['shop_id'] = $shop_id ;
            $payment_data['user_id'] = $user_id;
            $payment_data['payment_status'] = "0";
            $payment_id = Payment::insertGetId($payment_data);
            // insert shipping
            $shipping_data = array(
                'user_id' => $user_id,
                'shop_id' => $shop_id,
                'ship_name' => $request->ship_name,
                'ship_phonenumber' => $request->ship_phonenumber,
                'ship_email' => $ship_email,
                'ship_address' => $ship_address,
                'note' => $note,
                'total_price' => Session::get('total_price'),
                'ship_status' => "0",
            );
            $shipping_id = Shipping::insertGetId($shipping_data);

            // insert order
            $order_data = array();
            $order_data['user_id'] = $user_id;
            $order_data['shop_id'] = $shop_id;
            $order_data['payment_id'] = $payment_id;
            $order_data['shipping_id'] = $shipping_id;
            $order_data['order_total'] = Session::get('total_price');
            $order_data['order_status'] = "0";
            $order_data['created_at'] = now();
            $order_data['updated_at'] = now();
            $order_id = Order::insertGetId($order_data);
            // insert order detail
            $cart = Cart::where('user_id', $user_id)->where('shop_id', $shop_id)->get();
            foreach($cart as $key => $cart){
                $order_detail_data = array();
                $order_detail_data['order_id'] = $order_id;
                $order_detail_data['product_id'] = $cart->product_id;
                $order_detail_data['shop_id'] = $shop_id ;
                $order_detail_data['user_id'] = $user_id;
                $order_detail_data['product_name'] = $cart->productName;
                $order_detail_data['product_price'] = $cart->product_price;
                $order_detail_data['product_quantity'] = $cart->quantity;
                if ($cart->combination == null) {
                    $order_detail_data['product_combination'] = "";
                } else {
                    $order_detail_data['product_combination'] = $cart->combination;
                }
                $order_detail_data['created_at'] = now();
                $order_detail_data['updated_at'] = now();
                OrderDetail::insert($order_detail_data);
            }
            Cart::where('user_id', $user_id)->where('shop_id', $shop_id)->delete();
            $count_cart = DB::table('cart')
                ->where('user_id', $user_id)
                ->count();
            Session::put('count_cart',$count_cart);
            return Redirect()-> route('after_order');
        }
        
    }
    public function after_order(){
        return view('user.after_order');
    }
    public function review_order(){
        $user_id = Session::get('user_id');
        $order = DB::table('order')
            ->where('user_id', $user_id)
            ->select('order.*', 'shop.shopname')
            ->get();
        return view('user.order_history', compact('order'));
    }
    public function user_purchase(){
        $user_id = Session::get('user_id');
        $orders = DB::table('orders')
            ->join('shop', 'shop.id', '=', 'orders.shop_id')
            ->where('user_id', $user_id)
            ->select('orders.id','orders.shop_id','orders.user_id','orders.order_status','orders.order_total','shop.shopname','shop.shopImg')
            ->orderBy('orders.id', 'desc')
            ->get();
        $order_product = DB::table('order_detail')
            ->join('orders', 'orders.id', '=', 'order_detail.order_id')
            ->join('products','products.id', '=', 'order_detail.product_id')
            ->where('order_detail.user_id', $user_id)
            ->select('order_detail.*','orders.id','products.id','products.price','products.previewImage')
            ->get();
        foreach($orders as $key => $order){
            $orders[$key]->order_product = DB::table('order_detail')
                ->join('orders', 'orders.id', '=', 'order_detail.order_id')
                ->join('products','products.id', '=', 'order_detail.product_id')
                ->where('order_detail.user_id', $user_id)
                ->where('order_detail.order_id', $order->id)
                ->select('order_detail.*','orders.id','products.id','products.price','products.previewImage')
                ->get();
        }
        // dd($orders);
        return view('user.purchase', compact('orders','order_product'));
    }
}
