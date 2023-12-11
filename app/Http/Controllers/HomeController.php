<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\products;
use App\Models\Cart;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\UserSignup;
use App\Models\Catagories;
use App\Models\Order;
use App\Models\final_vendors;
use App\Models\Brands;

use Session;
use Stripe;
use PDF;
use App\Models\Comment;
use App\Models\Reply;

class HomeController extends Controller
{
    public function index()
    {

        $product_data = products::with('catagory')->get();
        $cat_data = Catagories::all();
        $cus_data = UserSignup::all();
        $vend_data = final_vendors::all();
        return view('home.userpage', compact('product_data', 'cat_data', 'cus_data', 'vend_data'));
    }

    public function index2()
    {
        $product_data = products::with('catagory')->get();
        $cat_data = Catagories::all();
        $cus_data = UserSignup::all();
        $vend_data = final_vendors::all();
        return view('home.guestuser', compact('product_data', 'cat_data', 'cus_data', 'vend_data'));
    }

    public function catagory($catagory_id)
    {
        $cars = products::where('catagory_id', $catagory_id)->get();
        $catagory = catagories::find($catagory_id);
        return view('home.show_category', compact('cars', 'catagory'));
    }
    public function all_catagories()
    {
        $cat_data = Catagories::all();
        return view('home.all_catagories', compact('cat_data'));
    }
    public function product_details($product_id)
    {
        $product = Products::with('brand')->find($product_id);
        return view('home.product_details', compact('product'));

    }
    public function product_search(Request $request)
    {
        $searchText = $request->search;

        $cartProductIds = Cart::pluck('product_id')->toArray();

        $products = products::with('catagory')
            ->where(function ($query) use ($searchText) {
                $query->where('product_title', 'like', '%' . $searchText . '%')
                    ->orWhereHas('catagory', function ($catQuery) use ($searchText) {
                        $catQuery->where('catagory_name', 'like', '%' . $searchText . '%');
                    });
            })
            ->whereNotIn('product_id', $cartProductIds)
            ->get();

        return view('home.all_product', compact('products'));
    }


    public function book_product($product_id)
    {
        $product = Products::with('brand')->find($product_id);
        return view('home.book_product', compact('product'));
    }
    public function all_cars()
    {
        $cartProductIds = Cart::pluck('product_id')->toArray();

        // Retrieve products that are not in the cart
        $products = products::with('catagory')->whereNotIn('product_id', $cartProductIds)->get();
        return view('home.all_product', compact('products'));
    }

    public function add_cart(Request $request, $product_id)
    {
        if (session('user')) {

            $store = session('user'); // Assuming $store holds the username
            $user = UserSignup::where('username', $store)->first();
            $product = products::find($product_id);
            $check = $request->days;
            $days = $product->days;

            $cart = new cart;
            $cart->name = $user->name;
            $cart->email = $user->email;
            $cart->phone = $user->phone;
            $cart->address = $user->address;
            $cart->user_id = $user->id;
            $cart->username = $user->username;

            $cart->product_title = $product->product_title;
            $cart->vendor_name = $product->vendor_name;
            $cart->product_id = $product->product_id;
            $cart->image = $product->image;

            // input day must be at least minimum days
            if ($check >= $days) {
                $cart->day = $check;
            } else {
                return view('home.showcart');

            }

            if ($product->discounted_price != null) {
                $cart->price = $product->discounted_price * $request->days;
            } else {
                $cart->price = $product->price * $request->days;
            }



            $cart->save();

            Alert::success('Product Added Successfully', 'We have added product to the cart');

            return redirect()->back()->with('message', 'Product Added Successfully. We have added product to the cart');
        } else {
            // User is not authenticated
            return redirect('userlogin');
        }
    }

    public function show_cart()
    {

        $store = session('user'); // Assuming $store holds the username
        $user = UserSignup::where('username', $store)->first();
        // $product = products::find($product_id);
        $user_id = $user->id;
        $cart = Cart::where('user_id', '=', $user_id)->get();

        return view('home.showcart', compact('cart'));
    }
    public function remove_cart($product_id)
    {
        $cart = cart::find($product_id);
        $cart->delete();
        return redirect()->back();
    }

    public function profile()
    {
        $username = session('user');
        $user = UserSignup::where('username', $username)->first();

        return view('home.profile', compact('user'));
    }
    public function profile_edit()
    {
        $username = session('user');
        $user = UserSignup::where('username', $username)->first();
        return view('home.profile_edit', compact('user'));
    }
    public function profile_update(Request $request, $id)
    {
        $username = session('user');
        $user = UserSignup::where('username', $username)->first();
        $user->username = $request->username;
        $user->name = $request->name;

        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->save();
        return redirect('profile');
    }

    public function show_order()
    {
        $username = session('user');
        $order = order::where('username', '=', $username)->get();
        return view('home.order', compact('order'));
    }
    public function cancel_order($id)
    {
        $order = order::find($id);
        $order->delivery_status = 'Your order have been canceled';
        $order->save();
        return redirect()->back();

    }
   
    public function cash_order()
    {
        $store = session('user'); // Assuming $store holds the username
        $data = cart::where('username', '=', $store)->get();

        foreach ($data as $data) {
            $order = new order;
            $order->name = $data->name;
            $order->email = $data->email;
            $order->phone = $data->phone;
            $order->address = $data->address;
            $order->user_id = $data->user_id;
            $order->username = $data->username;
            $order->product_title = $data->product_title;
            $order->price = $data->price;
            $order->day = $data->day;
            $order->image = $data->image;
            $order->product_id = $data->product_id;
            $order->vendor_name = $data->vendor_name;

            $order->payment_status = 'cash on delivery';
            $order->delivery_status = 'processing';
            $order->save();

            $cart_id = $data->id;
            $cart = cart::find($cart_id);
            $cart->delete();

        }

        return redirect()->back()->with('message', 'We have Received your Order. We will connect with you soon.....');
    }



    #payment gatewaya
    public function payment($totalprice)

    {   
        $store = session('user'); // Assuming $store holds the username
        $data = cart::where('username', '=', $store)->get();

        foreach ($data as $data) {
            $order = new order;
            $order->name = $data->name;
            $order->email = $data->email;
            $order->phone = $data->phone;
            $order->address = $data->address;
            $order->user_id = $data->user_id;
            $order->username = $data->username;
            $order->product_title = $data->product_title;
            $order->price = $data->price;
            $order->day = $data->day;
            $order->image = $data->image;
            $order->product_id = $data->product_id;
            $order->vendor_name = $data->vendor_name;

            $order->payment_status = 'cash on delivery';
            $order->delivery_status = 'processing';
            $order->save();

            $cart_id = $data->id;
            $cart = cart::find($cart_id);
            $cart->delete();

        }
        
        
        return view('home.payment',compact('totalprice','store'));
    }

    public function success()
    {   
        $store = session('user'); // Assuming $store holds the username
        //dd($store);

        return view('home.paysuccess');
    }
}