<?php
use App\Http\Controllers\admin_content_controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminSignupController;
use App\Http\Controllers\admin_login_controller;
use App\Http\Controllers\UserSignupController;
use App\Http\Controllers\VendorSignupController;

//Nusaiba 

use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




//Shihab

Route :: get('/adminsignup',[AdminSignupController::class,'index']);
Route :: post('/adminsignup',[AdminSignupController::class,'admin_data_store']);

Route :: get('/adminlogin',[admin_login_controller::class,'index']);
Route :: post('/adminlogin',[admin_login_controller::class,'admin_login']);


Route :: get('/logout', function(){
    if (session()->has('admin')) {
        session()->pull('admin');
        return redirect('adminlogin');
    }
    
});




Route::middleware(['admin.auth'])->group(function () {
    Route::get('/admin_dashboard', [admin_content_controller::class, 'index']);
    // Add other routes handled by admin_content_controller here...
    

    
    Route :: get('/show_vendors',[admin_content_controller::class,'show_vendors']);
    Route :: get('/delete_vendor/{id}',[admin_content_controller::class,'delete_vendor']);
    Route :: get('/approve_vendor/{id}',[admin_content_controller::class,'approve_vendor']);
    Route :: get('/final_vendors',[admin_content_controller::class,'final_vendors']);
    Route :: get('/delete_f_vendor/{id}',[admin_content_controller::class,'delete_f_vendor']);
   
    
   
    Route :: get('/Customer',[admin_content_controller::class,'Customer']);
    Route :: get('/delete_Customer/{cus_id}',[admin_content_controller::class,'delete_Customer']);

});


Route :: get('/usersignup',[UserSignupController::class,'index']);
Route :: post('/usersignup',[UserSignupController::class,'user_data_store']);

Route :: get('/userlogin',[UserSignupController::class,'get_login']);
Route :: post('/userlogin',[UserSignupController::class,'user_login']);



//test auth user

Route::middleware(['user.auth'])->group(function () {

    
    Route :: get('/test1',[admin_content_controller::class,'view_test1']);
   
    Route::get('/', [HomeController::class, 'index']);
   
    });


Route :: get('/userlogout', function(){
    if (session()->has('user')) {
        session()->pull('user');
        return redirect('userlogin');
    }

});


//Nusaiba Module 2
Route::get('/guestuser', [HomeController::class, 'index2']);


//m vendor Shihab
Route :: get('/vendorsignup',[VendorSignupController::class,'index']);
Route :: post('/vendorsignup',[VendorSignupController::class,'vendor_data_store']);

Route :: get('/vendorlogin',[VendorSignupController::class,'get_login']);
Route :: post('/vendorlogin',[VendorSignupController::class,'vendor_login']);

Route::middleware(['vendor.auth'])->group(function () {

    Route :: get('/vendor_dashboard',[VendorSignupController::class,'vendor_dashboard']);

    Route :: view('welcome','welcome');
   
    });

    Route :: get('/vendorlogout', function(){
        if (session()->has('vendor')) {
            session()->pull('vendor');
            return redirect('vendorlogin');
        }
    
    });

