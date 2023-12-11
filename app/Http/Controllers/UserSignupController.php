<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserSignup;
use Crypt;
use Session;

class UserSignupController extends Controller
{
    public function index(){
        return view('user\usersignup');
    }
    
    public function user_data_store(Request $request){
        
        
        if (Usersignup::where('username',$request['username'])->exists()){
            return redirect()->back()->with('message','Username Taken');
        }
        elseif  ($request['password'] != $request['cpassword']) {
            return redirect()->back()->with('message','Password Did not match'); 
        }
        
        else{
            $user_info= new UserSignup;
            $user_info->name= $request['Name'];
            $user_info->phone= $request['phone_number'];
            $user_info->username= $request['username'];
            $user_info->email= $request['email'];
            $user_info->password= Crypt::encrypt($request['password']);
            $user_info->address= $request['address'];
            $user_info->save();
            
            $request->session()->put('user_info',$request['username']);
    
    
            return redirect('userlogin')->with('message','Account created successfully');
        }
}




public function get_login(){
    return view('user.userlogin');
    }



    public function user_login(Request $request){
        //print_r($request->all());

        //dd($request->all());
        
        if (Usersignup::where('username',$request['username'])->doesntExist()){
            return redirect()->back()->with('message','Wrong username'); 
        
        }
        else{
            $user= UserSignup::where ("username", $request->input('username'))->get();
        
            $decrepted= Crypt::decrypt($user[0]->password); 
        
            if ($decrepted==$request['password']){
            
        
                $request->session()->put('user',$request['username']);
        
                return redirect('userpage');
            }
            else{
                
                return redirect()->back()->with('message','Password did not match'); 
        
            }
        
        }
        
        
        
        
        
        }
}
