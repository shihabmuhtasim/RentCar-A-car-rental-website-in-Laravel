<?php
use App\Http\Controllers\admin_content_controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminSignupController;
use App\Http\Controllers\admin_login_controller;
use App\Http\Controllers\UserSignupController;
use App\Http\Controllers\VendorSignupController;

//Prokriti

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

// Route::get("/product_details/{product_id}", [HomeController::class, "product_details"]);
// Route::get("/show_category/{catagory_id}", [HomeController::class, "catagory"]);
Route::get("/all_cars", [HomeController::class, "all_cars"]);

Route::post("/add_cart/{product_id}", [HomeController::class, "add_cart"]);

Route::get("/show_cart", [HomeController::class, "show_cart"]);
route::get('/remove_cart/{id}', [HomeController::class, 'remove_cart']);
route::get('/cash_order', [HomeController::class, 'cash_order']);
route::get('/all_catagories', [HomeController::class, 'all_catagories']);

route::get('/product_search', [HomeController::class, 'product_search']);

//Shihab

Route::get('/adminsignup', [AdminSignupController::class, 'index']);
Route::post('/adminsignup', [AdminSignupController::class, 'admin_data_store']);

Route::get('/adminlogin', [admin_login_controller::class, 'index']);
Route::post('/adminlogin', [admin_login_controller::class, 'admin_login']);


Route::get('/logout', function () {
    if (session()->has('admin')) {
        session()->pull('admin');
        return redirect('adminlogin');
    }

});




Route::middleware(['admin.auth'])->group(function () {
    Route::get('/admin_dashboard', [admin_content_controller::class, 'index']);

    Route::get('/add_catagory', [admin_content_controller::class, 'view_catagory']);
    Route::post('/add_catagory', [admin_content_controller::class, 'add_catagory']);
    Route::get('/delete_catagory/{id}', [admin_content_controller::class, 'delete_catagory']);

    Route::get('/add_brand', [admin_content_controller::class, 'view_brand']);
    Route::post('/add_brand', [admin_content_controller::class, 'add_brand']);
    Route::get('/delete_brand/{id}', [admin_content_controller::class, 'delete_brand']);

    Route::get('/view_product', [admin_content_controller::class, 'view_product']);
    Route::post('/add_product', [admin_content_controller::class, 'add_product']);
    Route::get('/show_products', [admin_content_controller::class, 'show_products']);
    // Add other routes handled by admin_content_controller here...
    Route::get('/edit_product/{product_id}', [admin_content_controller::class, 'edit_product']);
    Route::post('/update_product/{product_id}', [admin_content_controller::class, 'update_product']);
    Route::get('/delete_product/{product_id}', [admin_content_controller::class, 'delete_product']);


    Route::get('/show_vendors', [admin_content_controller::class, 'show_vendors']);
    Route::get('/delete_vendor/{id}', [admin_content_controller::class, 'delete_vendor']);
    Route::get('/approve_vendor/{id}', [admin_content_controller::class, 'approve_vendor']);
    Route::get('/final_vendors', [admin_content_controller::class, 'final_vendors']);
    Route::get('/delete_f_vendor/{id}', [admin_content_controller::class, 'delete_f_vendor']);



    Route::get('/Customer', [admin_content_controller::class, 'Customer']);
    Route::get('/delete_Customer/{cus_id}', [admin_content_controller::class, 'delete_Customer']);

});


Route::get('/usersignup', [UserSignupController::class, 'index']);
Route::post('/usersignup', [UserSignupController::class, 'user_data_store']);

Route::get('/userlogin', [UserSignupController::class, 'get_login']);
Route::post('/userlogin', [UserSignupController::class, 'user_login']);



//test auth user
Route::get("/product_details/{product_id}", [HomeController::class, "product_details"]);
Route::get("/show_category/{catagory_id}", [HomeController::class, "catagory"]);
Route::middleware(['user.auth'])->group(function () {


    Route::get('/test1', [admin_content_controller::class, 'view_test1']);

    Route::get('/', [HomeController::class, 'index']);


    Route::get("/book_product/{product_id}", [HomeController::class, 'book_product']);


});


Route::get('/userlogout', function () {
    if (session()->has('user')) {
        session()->pull('user');
        return redirect('userlogin');
    }

});



Route::get('/guestuser', [HomeController::class, 'index2']);


//m vendor Shihab
Route::get('/vendorsignup', [VendorSignupController::class, 'index']);
Route::post('/vendorsignup', [VendorSignupController::class, 'vendor_data_store']);

Route::get('/vendorlogin', [VendorSignupController::class, 'get_login']);
Route::post('/vendorlogin', [VendorSignupController::class, 'vendor_login']);

Route::middleware(['vendor.auth'])->group(function () {

    Route::get('/vendor_dashboard', [VendorSignupController::class, 'vendor_dashboard']);

    Route::view('welcome', 'welcome');

});

Route::get('/vendorlogout', function () {
    if (session()->has('vendor')) {
        session()->pull('vendor');
        return redirect('vendorlogin');
    }

});