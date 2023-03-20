<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validate;
use App\Models\Shop;
use App\Models\Categories;
use App\Models\SubCategories;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();
class ShopController extends Controller
{
    public function index_shop(){
        return view('shop.index');
    }
    public function add_product(){
        $category= DB::table('categories')->orderby('id','desc')->get();
        return view('shop.add_product')->with(compact('category'));

    }
    public function select_category(Request $request){
        $data = $request->category_id;
        $subcategory = DB::table('subcategories')->where('category_id',$data)->get();
        return response()->json($subcategory);
        
    }
    public function shop_add_product(Request $request){
        #insert products
        $shop_id = Session::get('shop_id');
        $category_id = $request->category;
        $subcategory_id = $request->subcategory;
        $category = DB::table('categories')->where('id',$category_id)->first();
        $subcategory = DB::table('subcategories')->where('id',$subcategory_id)->first();
        $products = array(
            'shop_id' => $shop_id,
            'category_id' => $category_id,
            'subcategory_id' => $subcategory_id,
            'productName' =>$request->product_name,
            'price' => $request->product_price,
            'description' => $request->description,
            'categoryName' => $category->categoryName,
            'subCategoryName' => $subcategory->subCategoryName,
        );
        $product_id= DB::table('products')->insertGetId($products);

        #insert product_image
        $product_image = array(
            'product_id' => $product_id,
            'imageProduct' => $request->product_img,
        );
        $product_image1 = array(
            'product_id' => $product_id,
            'imageProduct' => $request->product_img1,
        );
        $product_image2 = array(
            'product_id' => $product_id,
            'imageProduct' => $request->product_img2,
        );
        $product_image3 = array(
            'product_id' => $product_id,
            'imageProduct' => $request->product_img3,
        );
        $product_image4 = array(
            'product_id' => $product_id,
            'imageProduct' => $request->product_img4,
        );
        
        if(isset($product_image['imageProduct'])){
            $product_image_id= DB::table('products_images')->insertGetId($product_image);
        }
        if(isset($product_image1['imageProduct'])){
            $product_image_id1= DB::table('products_images')->insertGetId($product_image1);
        }
        if(isset($product_image2['imageProduct'])){
            $product_image_id2= DB::table('products_images')->insertGetId($product_image2);
        }
        if(isset($product_image3['imageProduct'])){
            $product_image_id3= DB::table('products_images')->insertGetId($product_image3);
        }
        if(isset($product_image4['imageProduct'])){
            $product_image_id4= DB::table('products_images')->insertGetId($product_image4);
        }
        #insert product_variations
        $product_variation_option= array(
            'product_id' => $product_id,
            'variationName' => $request->variation_option,
        );
        if (isset($product_variation_option['variationName'])) {
            $product_variation_option_id= DB::table('products_variations_options')->insertGetId($product_variation_option);
           
            $product_variation_option_value= array(
                'products_variation_id' => $product_variation_option_id,
                'variationName' => $request->variation_option_name,
            );
            $product_variation_option_value1= array(
                'products_variation_id' => $product_variation_option_id,
                'variationName' => $request->variation_option_name1,
            );
            $product_variation_option_value2= array(
                'products_variation_id' => $product_variation_option_id,
                'variationName' => $request->variation_option_name2,
            );
            $product_variation_option_value3= array(
                'products_variation_id' => $product_variation_option_id,
                'variationName' => $request->variation_option_name3,
            );
            if(isset($product_variation_option_value['variationName'])){
                $product_variation_option_value_id= DB::table('products_variations_options_value')->insertGetId($product_variation_option_value);
            }
            if(isset($product_variation_option_value1['variationName'])){
                $product_variation_option_value_id1= DB::table('products_variations_options_value')->insertGetId($product_variation_option_value1);
            }
            
            if(isset($product_variation_option_value2['variationName'])){
                $product_variation_option_value_id2= DB::table('products_variations_options_value')->insertGetId($product_variation_option_value2);
            }
            if(isset($product_variation_option_value3['variationName'])){
                $product_variation_option_value_id3= DB::table('products_variations_options_value')->insertGetId($product_variation_option_value3);
            }
            
        }
        
        #insert product_variations 2
        $product_variations_options= array(
            'product_id' => $product_id,
            'variationName' => $request->variations_options,
        );
        if(isset($product_variations_options['variationName'])){
            $product_variations_options_id= DB::table('products_variations_options')->insertGetId($product_variations_options);
            $product_variations_options_value= array(
                'products_variation_id' => $product_variations_options_id,
                'variationName' => $request->variations_options_name,
            );
            $product_variations_options_value1= array(
                'products_variation_id' => $product_variations_options_id,
                'variationName' => $request->variations_options_name1,
            );
            $product_variations_options_value2= array(
                'products_variation_id' => $product_variations_options_id,
                'variationName' => $request->variations_options_name2,
            );
            $product_variations_options_value3= array(
                'products_variation_id' => $product_variations_options_id,
                'variationName' => $request->variations_options_name3,
            );
            if(isset($product_variations_options_value['variationName'])){
                $product_variations_options_value_id= DB::table('products_variations_options_value')->insertGetId($product_variations_options_value);
            }
            if(isset($product_variations_options_value1['variationName'])){
                $product_variations_options_value_id1= DB::table('products_variations_options_value')->insertGetId($product_variations_options_value1);
            }
            if(isset($product_variations_options_value2['variationName'])){
                $product_variations_option_svalue_id2= DB::table('products_variations_options_value')->insertGetId($product_variations_options_value2);
            }
            if(isset($product_variations_options_value3['variationName'])){
                $product_variations_options_value_id3= DB::table('products_variations_options_value')->insertGetId($product_variations_options_value3);
            }
        }
        
        return view('add_product_quantity')->with('product_id',$product_id);
        
    }

}
