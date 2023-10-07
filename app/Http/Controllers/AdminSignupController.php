<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminSignup;
use Crypt;
use Session;

class AdminSignupController extends Controller
{
    public function index(){
        return view('adminpanel\adminsigup');
    }

    public function admin_data_store(Request $request){
        
        if (Adminsignup::where('username',$request['username'])->exists()){
            return redirect()->back()->with('message','Username Taken');
        }
        elseif  ($request['password'] != $request['cpassword']) {
            return redirect()->back()->with('message','Password Did not match'); 
        }
        elseif  (Adminsignup::where('reference_code',$request['ref_code'])->doesntExist()) {
            return redirect()->back()->with('message','Reference code Did not match'); 
        }
        
        else{
        $admin_info= new AdminSignup;
        $admin_info->name= $request['Name'];
        $admin_info->phone= $request['phone_number'];
        $admin_info->username= $request['username'];
        $admin_info->email= $request['email'];
        $admin_info->password= Crypt::encrypt($request['password']);
        $admin_info->reference_code= $request['ref_code_gen'];
        $admin_info->save();
        
        $request->session()->put('admin_info',$request['username']);


        return redirect('adminlogin');}

        



}

    }
