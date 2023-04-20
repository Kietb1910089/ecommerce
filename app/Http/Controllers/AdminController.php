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
class AdminController extends Controller
{
    public function login_admin()
    {
        return view('admin.login_admin');
    }
    public function login_admin_post(Request $request)
    {
        $data = $request->all();
        $admin = Shop::where('email', $data['email'])->first();
        if ($admin) {
            if (Hash::check($data['password'], $admin->password)) {
                Session::put('admin_id', $admin->id);
                Session::put('admin_name', $admin->name);
                return redirect()->route('dashboard');
            } else {
                return redirect()->back()->with('message', 'Mật khẩu không đúng');
            }
        } else {
            return redirect()->back()->with('message', 'Tài khoản không tồn tại');
        }
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function logout_admin()
    {
        Session::flush();
        return redirect()->route('login_admin');
    }
}
