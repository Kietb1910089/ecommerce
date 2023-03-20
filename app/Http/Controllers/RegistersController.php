<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validate;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Console\View\Components\Alert;
use Session;
session_start();

class RegistersController extends Controller
{
    public function index(){
        return view('index');
    }
    public function Registers(){
        return view('user.registers');
    }
    public function registers_user(Request $request){
        $data=$request->validate([
            'firstname' => 'required|max:50',
            'lastname' => 'required|max:50',
            'email' => 'required|unique:users,email',
            'password' => 'required',
            'password_confirm' => 'required|same:password',
        ]);
        $user = new Users();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role_id = 2;
        $user->status = 1;
        $user->save();
        return redirect()->route('login')->with('success','Đăng ký thành công');
    }
    
    public function login(){
        return view('user.login');
    }
    public function login_user(Request $request){
        $email= $request->email;
        $password=$request->password;
        $result= DB::table('users')->where('email',$email)->first();      

        if(Hash::check($password, $result->password )){
            Session:: put('user_id',$result->id);
            Session:: put('user_name',$result->lastname);
            Session:: put('user_email',$result->email);
            return redirect()->route('index');
        }else{
            return redirect()->route('login')->with('error','Đăng nhập thất bại');
        }
        
    }
}
