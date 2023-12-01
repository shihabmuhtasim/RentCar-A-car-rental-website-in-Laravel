<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\VendorSignup;
use App\Models\final_vendors;
use App\Models\temp_products;
use App\Models\products;
use App\Models\UserSignup;
use App\Models\Order;
use Crypt;
use Session;

class VendorSignupController extends Controller
{
    public function index(){
        return view('vendor\vendorsignup');
    }

    public function vendor_data_store(Request $request){
        
        
        if (Vendorsignup::where('username',$request['username'])->exists()){
            return redirect()->back()->with('message','username Taken');
        }
        elseif  ($request['password'] != $request['cpassword']) {
            return redirect()->back()->with('message','Password Did not match'); 
        }
        
        else{
            $vendor_info= new vendorSignup;
            $vendor_info->name= $request['Name'];
            $vendor_info->phone= $request['phone_number'];
            $vendor_info->username= $request['username'];
            $vendor_info->email= $request['email'];
            $vendor_info->password= Crypt::encrypt($request['password']);
            $vendor_info->address= $request['address'];
            $vendor_info->buisness_lisence_no= $request['buisness_lisence'];
            $vendor_info->buisness_name= $request['b_name'];

            $vendor_info->save();
            
            $request->session()->put('vendor_info',$request['username']);
    
    
            return redirect('vendorsignup')->with('message','Account submitted for approval successfully');
        }
}

public function get_login(){
    return view('vendor.vendorlogin');
    }



    public function vendor_login(Request $request){
        //print_r($request->all());

        //dd($request->all());
        
        if (final_vendors::where('username',$request['username'])->doesntExist()){
            return redirect()->back()->with('message','Wrong username'); 
        
        }
        else{
            $vendor= final_vendors::where ("username", $request->input('username'))->get();
        
            $decrepted= Crypt::decrypt($vendor[0]->password); 
        
            if ($decrepted==$request['password']){
            
        
                $request->session()->put('vendor',$request['username']);
        
                return redirect('vendor_dashboard');
            }
            else{
                
                return redirect()->back()->with('message','Password did not match'); 
        
            }
        
        }
        
        
        
        
        
        }
//vendor works:
public function vendor_dashboard(){
    

    $log = session('vendor');
    $row = final_vendors::where('username', $log)->first();

    if ($row) {
        $vendorName = $row->buisness_name;
    }
    $product_data= products:: where('vendor_name', $vendorName)->get();
    $order_data= Order:: where('vendor_name', $vendorName)->get();
    $prodCount=temp_products:: where('vendor_name', $vendorName)->get();
      
    return view('vendor.vendor_dashboard',compact('order_data', 'product_data','prodCount'));
    
}




}
