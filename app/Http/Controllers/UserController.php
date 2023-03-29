<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validate;
use App\Models\Shop;
use App\Models\Products;
use App\Models\Categories;
use App\Models\SubCategories;
use App\Models\ProductsImages;
use App\Models\ProductCombination;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Support\Facades\Redirect;
use Session;

class UserController extends Controller
{
    public function index()
    {
        Session::forget('product_id');
        $products = DB::table('products')
            ->where('products.status', '=', 1)
            ->join('shop', 'products.shop_id', '=', 'shop.id')
            ->where('shop.status', '=', 1)
            ->select('products.*')
            ->orderBy('id', 'desc')-> paginate(54);
           
        return view('index', compact('products'));
    }
    public function detail_product($product_id)
    {
        $products = DB::table('products')
            ->where('id', $product_id)->first();
            
        $products_images = DB::table('products_images')
            ->where('product_id', $product_id)
            ->select('products_images.imageProduct')
            ->get();
        $shop = DB::table('shop')
            ->where('id', $products->shop_id)
            ->select('shop.id', 'shop.shopname','shop.shopImg','shop.email')
            ->first();
        
        $var_option= DB::table('products_variations_options')
            ->where('product_id', $product_id)
            ->select('products_variations_options.variationName')
            ->get();
        
        $combination_string = DB::table('products_combinations')
            ->where('product_id', $product_id)
            ->select('products_combinations.combination_string', 'products_combinations.avaiable_stock', 'products_combinations.id','products_combinations.product_id')
            ->get();
        // dd($combination_string[0]->combination_string);
        $sum_avaialbe = DB::table('products_combinations')
            ->where('product_id', $product_id)
            ->sum('avaiable_stock');

        Session::put('product_id', $product_id);
        
        return view('detail_product', compact('products', 'products_images', 'shop', 'var_option', 'combination_string', 'sum_avaialbe'));

    }
    public function add_cart_ajax(Request $request){
        $data=$request->all();
        $session_id=substr(md5(microtime()),rand(0,26),5);
        $user_id = Session::get('user_id');
        $cart = Session::get('cart');
        $product_id = Session::get('product_id');
        if ($data['quantity'] > $data['avaiable_stock']) {
            return response()->json([
                'message' => 'Số lượng sản phẩm trong kho không đủ',
                'status' => false
            ]);
        }
        if($data['avaiable_stock'] <= 0){
            return response()->json([
                'message' => 'Sản phẩm đã hết hàng. ',
                'status' => false,
            ]);
        }
        
        if($cart == true){
            $is_avaiable = 0;
            foreach($cart as $key => $val){
                if($val['product_id'] == $product_id && $val['combination'] ==  $data['combination'] ){
                    $quantity = $val['quantity'];
                    $quantity = $quantity + $data['quantity'];
                    if($quantity > $val['avaiable_stock']){
                        return response()->json([
                            'message' => 'Bạn đã có ' . $val['quantity'] . ' sản phẩm trong giỏ hàng. 
                            Không thể thêm số lượng đã chọn vào giỏ hàng vì sẽ vượt quá số lượng sản phẩm trong kho.',
                            'status' => false,
                        ]);
                    }else{
                        $cart[$key]['quantity'] = $quantity;
                        Session::put('cart',$cart);
                        $is_avaiable++;
                    }
                }
            }
            if($is_avaiable==0){
                $cart[] = array(
                    'session_id' => $session_id,
                    'product_id' => $data['id_'],
                    'user_id' => $user_id,
                    'shop_id' => $data['shop_id'],
                    'productName' => $data['productName'],
                    'product_price' => $data['price'],
                    'product_image' => $data['previewImage'],
                    'quantity' => $data['quantity'],
                    'avaiable_stock' => $data['avaiable_stock'],
                    'combination' => $data['combination'],
                );
                Session::put('cart',$cart);
            }
        }else{
            $cart[] =array(
                'session_id' => $session_id,
                'product_id' => $data['id_'],
                'user_id' => $user_id,
                'shop_id' => $data['shop_id'],
                'productName' => $data['productName'],
                'product_price' => $data['price'],
                'product_image' => $data['previewImage'],
                'quantity' => $data['quantity'],
                'avaiable_stock' => $data['avaiable_stock'],
                'combination' => $data['combination'],
            );
        }
        Session::put('cart',$cart);
        Session::save();
        $count_cart = count($cart);
        return response()->json([
            'message' => 'Thêm sản phẩm vào giỏ hàng thành công',
            'status' => true,
            'count_cart' => $count_cart
        ]);
    }
    public function show_cart_ajax(){
        $cart = Session::get('cart');
        $user_id = Session::get('user_id');
        dd($cart);
        return view('user.cart');
    }
    
}
// $cart = Session::get('cart');
//         if($cart == true){
//             $is_avaiable = 0;
//             foreach($cart as $key => $val){
//                 if($val['combination'] == $data['combination'] && $val['product_id'] == $data['id_']){
//                     $cart[$key]['quantity'] = $cart[$key]['quantity'] + $data['quantity'];
//                     $is_avaiable++;
//                 } 
//             }
//             if($is_avaiable==0){
//                 $cart[] = array(
//                     'session_id' => $session_id,
//                     'product_id' => $data['id_'],
//                     'shop_id' => $data['shop_id'],
//                     'productName' => $data['productName'],
//                     'product_price' => $data['price'],
//                     'product_image' => $data['previewImage'],
//                     'quantity' => $data['quantity'],
//                     'avaiable_stock' => $data['avaiable_stock'],
//                     'combination' => $data['combination'],
//                 );
//                 Session::put('cart',$cart);
//             }
//         }else{
//             $cart[] =array(
//                 'session_id' => $session_id,
//                 'product_id' => $data['id_'],
//                 'shop_id' => $data['shop_id'],
//                 'productName' => $data['productName'],
//                 'product_price' => $data['price'],
//                 'product_image' => $data['previewImage'],
//                 'quantity' => $data['quantity'],
//                 'avaiable_stock' => $data['avaiable_stock'],
//                 'combination' => $data['combination'],
//             );
//         }
//         Session::put('cart',$cart);
//         Session::save();