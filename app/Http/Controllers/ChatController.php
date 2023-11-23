<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validate;
use App\Models\Shop;
use App\Models\Messages;
use App\Models\Users;
use App\Models\Cart;
use App\Models\Products;
use App\Models\Categories;
use App\Models\SubCategories;
use App\Models\OrderDetail;
use App\Models\Payment;
use App\Models\Shipping;
use App\Models\Order;
use App\Models\ProductsImages;
use App\Models\ProductCombination;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Support\Facades\Redirect;
use Pusher\Pusher;
use App\Events\SendMessageUser;

use Session;

class ChatController extends Controller
{
    public function show_chat($shop_id){
        $user_id = Session::get('user_id');
        $user_img = Session::get('user_img');
        $shop_chat = DB::table('shop')
        ->select('id', 'shopname', 'shopImg')
        ->where('id', $shop_id)
        ->first();
        // dd($shop_chat);
        $shop_list = DB::table('shop')
        ->join('messages', 'shop.id', '=', 'messages.shop_id')
        ->select('shop.id', 'shop.shopname', 'shop.shopImg', DB::raw('count(messages.status) as unread'))
        ->where('user_id', $user_id)
        // ->where('messages.sender', '=', 1)
        ->groupBy('shop.id', 'shop.shopname', 'shop.shopImg')
        ->get();
        $messages = DB::table('messages')        
        ->select('id', 'user_id', 'shop_id', 'sender', 'message', 'status', 'created_at')
        ->where('shop_id', $shop_id)
        ->where('user_id', $user_id)
        ->get();
        // $user = Users::find($user_id);
        // dd($user->id);
        return view('chat.show_chat_user' , compact('shop_chat', 'shop_list', 'messages', 'user_img', 'user_id'));
    }
    public function send_messages_user(Request $request){
        $request->validate([
            'message' => 'required',
        ]);
        $message = $request->message;
        $user_id = $request->user_id;
        $shop_id = $request->shop_id;
        $sender = 2; // 1 là shop, 2 là user

        $data = array();
        $data['user_id'] = $user_id;
        $data['shop_id'] = $shop_id;
        $data['sender'] = 2; // 1 là shop, 2 là user
        $data['message'] = $message;
        $data['status'] = 0;
        $data['created_at'] = now();
        // dd($data);
        DB::table('messages')->insert($data);

        broadcast(new SendMessageUser($message, $user_id, $shop_id, $sender))->toOthers();
        // event(new SendMessageUser($message, $user_id, $shop_id, $sender));
       
        return response()->json([
            'status' => true,
        ]);
    }
    public function send_messages_shop(Request $request){
        $request->validate([
            'message' => 'required',
        ]);
        $message = $request->message;
        $user_id = $request->user_id;
        $shop_id = $request->shop_id;
        $sender = 1; // 1 là shop, 2 là user
        
        event(new SendMessageUser($message, $user_id, $shop_id, $sender))->toOthers();
        // event(new ReceivedMessageUser($message, $user_id, $shop_id, $sender));
        $data = array();
        $data['user_id'] = $user_id;
        $data['shop_id'] = $shop_id;
        $data['sender'] = 1; // 1 là shop, 2 là user
        $data['message'] = $message;
        $data['status'] = 0;
        $data['created_at'] = now();
        // dd($data);
        DB::table('messages')->insert($data);

        broadcast(new SendMessageUser($message, $user_id, $shop_id, $sender))->toOthers();

        return response()->json([
            'status' => true,
        ]);
    }

    public function chat_shop(){
        $shop_id = Session::get('shop_id');
        
        $user_list = DB::table('users')
        ->join('messages', 'users.id', '=', 'messages.user_id')
        ->select('users.id', 'users.firstname','users.lastname', 'users.userImg', DB::raw('count(messages.status) as unread'))
        ->where('shop_id', $shop_id)
        ->where('messages.sender', '=', 2)
        ->groupBy('users.id', 'users.firstname','users.lastname', 'users.userImg')
        ->get();
        // dd($user_list);
        return view('chat.chat_shop', compact('user_list'));
    }
    public function show_chat_shop($user_id){
        $shop_id = Session::get('shop_id');
        $shop_img = Session::get('shopImg');
        
        $user_chat = DB::table('users')
        ->select('id', 'firstname','lastname', 'userImg')
        ->where('id', $user_id)
        ->first();
        // dd($user_chat);
        $user_list = DB::table('users')
        ->join('messages', 'users.id', '=', 'messages.user_id')
        ->select('users.id', 'users.firstname','users.lastname', 'users.userImg', DB::raw('count(messages.status) as unread'))
        ->where('shop_id', $shop_id)
        ->where('messages.sender', '=', 2)
        ->groupBy('users.id', 'users.firstname','users.lastname', 'users.userImg')
        ->get();
        $messages = DB::table('messages')        
        ->select('id', 'user_id', 'shop_id', 'sender', 'message', 'status', 'created_at')
        ->where('shop_id', $shop_id)
        ->where('user_id', $user_id)
        ->get();
        // dd($shop_list);
        return view('chat.show_chat_shop' , compact('user_chat', 'user_list', 'messages', 'shop_img', 'shop_id'));
    }
}
