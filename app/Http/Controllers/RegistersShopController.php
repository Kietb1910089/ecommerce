<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validate;
use App\Models\Shop;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Support\Facades\Redirect;

use Session;
session_start();

class RegistersShopController extends Controller
{
    public function register_shop(){
        return view('shop.register_shop');
    }
    public function login_shop(){
        return view('shop.login_shop');
    }
    public function registers_shop(Request $request){
        $data=$request->validate([
            'shopname' => 'required|max:50',
            'email' => 'required|unique:shop,email',
            'password' => 'required',
            'password_confirm' => 'required|same:password',
            'shopImg' => 'required',
        ]);
        $shop = new Shop();
        $shop->shopname = $request->shopname;
        $shop->email = $request->email;
        $shop->password = Hash::make($request->password);
        if($request->hasFile('shopImg')){
            $shop_img = $request->file('shopImg')->store('logo_shop','public');
            $shop->shopImg = $shop_img;
        }
        $shop->role_id =1;
        $shop->status = 1;
        $shop->save();
        return redirect()->route('login_shop')->with('success','Đăng ký thành công');
    }
    public function logins_shop(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        
        $result= DB::table('shop')->where('email',$email)->first();      

        if(Hash::check($password, $result->password ) ){
            Session:: put('shop_id',$result->id);
            Session:: put('shop_name',$result->shopname);
            Session:: put('shop_email',$result->email);
            return redirect()->route('index_shop');
        }else{
            return redirect()->route('register_shop')->with('error','Đăng nhập thất bại');
        }
    }
}
