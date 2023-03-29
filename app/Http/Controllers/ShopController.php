<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validate;
use App\Models\Shop;
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
    public function shop_add_products(){ 
        #insert products
        $shop_id = Session::get('shop_id');
        $category_id = request('category');
        $subcategory_id = request('subcategory');
        $category = DB::table('categories')->where('id',$category_id)->first();
        $subcategory = DB::table('subcategories')->where('id',$subcategory_id)->first();
        $products = array(
            'shop_id' => $shop_id,
            'category_id' => $category_id,
            'subcategory_id' => $subcategory_id,
            'productName' =>request('product_name'),
            'price' => request('product_price'),
            'description' => request('description'),
            'categoryName' => $category->categoryName,
            'subCategoryName' => $subcategory->subCategoryName,
            'status' => 1,
        );
        
        Session::put('products',$products);
        #insert product_variations
        $product_variation_option=request('variation_option');

        if (isset($product_variation_option)) {
            Session::put('variation_name', $product_variation_option);
            $product_combination= array();
            $product_variation_option_value= request('variation_option_name');    
            $product_variation_option_value1= request('variation_option_name1');
            $product_variation_option_value2= request('variation_option_name2');
            $product_variation_option_value3= request('variation_option_name3');
            if(isset($product_variation_option_value)){
                $product_combination[]= $product_variation_option_value;
                Session::put('variation_option', $product_variation_option_value);
            }
            if(isset($product_variation_option_value1)){
                $product_combination[]= $product_variation_option_value1;
                Session::put('variation_option1', $product_variation_option_value1);
            }
            if(isset($product_variation_option_value2)){
                $product_combination[]= $product_variation_option_value2;
                Session::put('variation_option2', $product_variation_option_value2);
            }
            if(isset($product_variation_option_value3)){
                $product_combination[]= $product_variation_option_value3;
                Session::put('variation_option3', $product_variation_option_value3);
            }
            
        }
        
        #insert product_variations 2
        $product_variations_options= request('variations_options');
        
        if(isset($product_variations_options)){
            Session::put('variations_name', $product_variations_options);
            $product_combinations= array();
            $product_variations_options_value= request('variations_options_name');
            $product_variations_options_value1= request('variations_options_name1');
            $product_variations_options_value2= request('variations_options_name2');
            $product_variations_options_value3= request('variations_options_name3');
            if(isset($product_variations_options_value)){
                $product_combinations[]= $product_variations_options_value;
                Session::put('variations_option', $product_variations_options_value);
            }
            if(isset($product_variations_options_value1)){
                $product_combinations[]= $product_variations_options_value1;
                Session::put('variations_option1', $product_variations_options_value1);       
            }
            if(isset($product_variations_options_value2)){
                $product_combinations[]= $product_variations_options_value2;
                Session::put('variations_option2', $product_variations_options_value2);
            }
            if(isset($product_variations_options_value3)){ 
                $product_combinations[]= $product_variations_options_value3;
                Session::put('variations_option3', $product_variations_options_value3);
            }
            
        } 
        if(isset($product_combination) && isset($product_combinations)){
            $i = $product_combination;
            $j = $product_combinations;
            foreach($i as $key => $value){
                foreach($j as $key1 => $value1){
                    $product_combination_string = $value.' '.$value1;
                    $combination_string[] = $product_combination_string;
                }
            }
            Session::put('combination_string', $combination_string);
            return redirect() ->route('add_product_quantity');
        }
        if(isset($product_combination) && !isset($product_combinations)){
            $combination_string = array();
            $i = $product_combination;
            foreach($i as $key => $value){
                $combination_string[] = $value;
            }
            Session::put('combination_string', $combination_string);
            return redirect() ->route('add_product_quantity');
        }
        if(isset($product_combinations) && !isset($product_combination)){
            $j = $product_combinations;
            $combination_string = array();
            foreach($j as $key1 => $value1){
                $combination_string[] = $value1;
            }
            Session::put('combination_string', $combination_string);
            return redirect() ->route('add_product_quantity');
        }
        else{
            $combination_string[]= '';
            Session::put('combination_string', $combination_string);
            return redirect() ->route('add_product_quantity');
            
        }
        
    }
    public function add_product_quantity (){
        return view('shop.add_product_quantity');
    }
    public function add_product_quantitys(Request $request){
        $products = Session::get('products');
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
            $images =$request->validate([
                'product_img' => 'required',
            ]);
            $image_id = new ProductsImages();
            $image_id ->product_id = $product_id;
            if($request->hasFile('product_img')){
                $product_images = $request->file('product_img')->store('images_product','public');
                $image_id->imageProduct = $product_images;
                DB::table('products')->where('id',$product_id)->update(['previewImage' => $product_images]);     
            }
            $image_id->save();
        }
        if(isset($product_image1['imageProduct'])){
            $images1 =$request->validate([
                'product_img1' => 'required',
            ]);
            $image_id1 = new ProductsImages();
            $image_id1 ->product_id = $product_id;
            if($request->hasFile('product_img1')){
                $product_images1 = $request->file('product_img1')->store('images_product','public');
                $image_id1->imageProduct = $product_images1;     
            }
            $image_id1->save();
        }
        if(isset($product_image2['imageProduct'])){
            $images2 =$request->validate([
                'product_img2' => 'required',
            ]);
            $image_id2 = new ProductsImages();
            $image_id2 ->product_id = $product_id;
            if($request->hasFile('product_img2')){
                $product_images2 = $request->file('product_img2')->store('images_product','public');
                $image_id2->imageProduct = $product_images2;     
            }
            $image_id2->save();
        }
        if(isset($product_image3['imageProduct'])){
            $images3 =$request->validate([
                'product_img3' => 'required',
            ]);
            $image_id3 = new ProductsImages();
            $image_id3 ->product_id = $product_id;
            if($request->hasFile('product_img3')){
                $product_images3 = $request->file('product_img3')->store('images_product','public');
                $image_id3->imageProduct = $product_images3;     
            }
            $image_id3->save();
        }
        if(isset($product_image4['imageProduct'])){
            $images4 =$request->validate([
                'product_img4' => 'required',
            ]);
            $image_id4 = new ProductsImages();
            $image_id4 ->product_id = $product_id;
            if($request->hasFile('product_img4')){
                $product_images4 = $request->file('product_img4')->store('images_product','public');
                $image_id4->imageProduct = $product_images4;     
            }
            $image_id4->save();
        }
        #insert product variation
        $varation_name = array(
            'product_id' => $product_id,
            'variationName' => Session::get('variation_name'),
        );
        if(isset($varation_name['variationName'])) {
            $varation_name_id= DB::table('products_variations_options')->insertGetId($varation_name);
            $product_variation_option= array(
                'products_variation_id' => $varation_name_id,
                'variationName' => Session::get('variation_option'),
            );
            $product_variation_option1= array(
                'products_variation_id' => $varation_name_id,
                'variationName' => Session::get('variation_option1'),
            );
            $product_variation_option2= array(
                'products_variation_id' => $varation_name_id,
                'variationName' => Session::get('variation_option2'),
            );
            $product_variation_option3= array(
                'products_variation_id' => $varation_name_id,
                'variationName' => Session::get('variation_option3'),
            );
            $product_combination= array();
            if(isset($product_variation_option['variationName'])){
                DB::table('products_variations_options_value')->insertGetId($product_variation_option);
            }
            if(isset($product_variation_option1['variationName'])){
                DB::table('products_variations_options_value')->insertGetId($product_variation_option1);
            }
            
            if(isset($product_variation_option2['variationName'])){
               DB::table('products_variations_options_value')->insertGetId($product_variation_option2);
            }
            if(isset($product_variation_option3['variationName'])){
                DB::table('products_variations_options_value')->insertGetId($product_variation_option3);
            }
        }
        $varations_names = array(
            'product_id' => $product_id,
            'variationName' => Session::get('variations_name'),
        );
        if(isset($varations_names['variationName'])) {
            $varations_names_id= DB::table('products_variations_options')->insertGetId($varations_names);
            $products_variations_option= array(
                'products_variation_id' => $varations_names_id,
                'variationName' => Session::get('variations_option'),
            );
            $products_variations_option1= array(
                'products_variation_id' => $varations_names_id,
                'variationName' => Session::get('variations_option1'),
            );
            $products_variations_option2= array(
                'products_variation_id' => $varations_names_id,
                'variationName' => Session::get('variations_option2'),
            );
            $products_variations_option3= array(
                'products_variation_id' => $varations_names_id,
                'variationName' => Session::get('variations_option3'),
            );
            if(isset($products_variations_option['variationName'])){
                DB::table('products_variations_options_value')->insertGetId($products_variations_option);
            }
            if(isset($products_variations_option1['variationName'])){
                DB::table('products_variations_options_value')->insertGetId($products_variations_option1);
            }
            
            if(isset($products_variations_option2['variationName'])){
                DB::table('products_variations_options_value')->insertGetId($products_variations_option2);
            }
            if(isset($products_variations_option3['variationName'])){
                DB::table('products_variations_options_value')->insertGetId($products_variations_option3);
            }
        }
        #insert product_combination
        $combination_string = Session::get('combination_string');
        $avaiable_stock=$request->avaiable_stock;
        foreach($avaiable_stock as $key => $value){
            $product_combinations[]= $value;
        }
        foreach($combination_string as $key => $value){
            $product_combination =new ProductCombination();
            $product_combination->product_id = $product_id;
            $product_combination->combination_string = $value;
            $product_combination->avaiable_stock = 0;
            $product_combination->save();
            DB::table('products_combinations')->where('id',$product_combination->id)->update(['avaiable_stock' => $product_combinations[$key]]);
        }
        Session::forget('products');
        Session::forget('variation_name');
        Session::forget('combination_string');
        Session::forget('variation_option');
        Session::forget('variation_option1');
        Session::forget('variation_option2');
        Session::forget('variation_option3');
        Session::forget('variations_name');
        Session::forget('variations_option');
        Session::forget('variations_option1');
        Session::forget('variations_option2');
        Session::forget('variations_option3');

        return redirect()->route('add_product')->with('success','Thêm sản phẩm thành công');
    }
}
 