<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\products;
use App\Models\Cart;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\UserSignup;
use App\Models\Catagory;
use App\Models\Order;
use Session;
use Stripe;
use PDF;
use App\Models\Comment;
use App\Models\Reply;
class HomeController extends Controller
{
    public function index()
    {   
        
        
        return view('home.userpage');
    }

    public function index2()
    {   
        
        
        return view('home.guestuser');
    }


    
    



}

