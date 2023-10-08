<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catagory;
use App\Models\Apparel;
use App\Models\products;
use App\Models\UserSignup;
use App\Models\Order;
use App\Models\VendorSignup;
use App\Models\final_vendors;
use App\Models\Temp_product;

class admin_content_controller extends Controller
{

    public function index()
    {

        $cus_data = UserSignup::all();


        return view('adminpanel.admin_dashboard', compact('cus_data'));

    }







    public function Customer()
    {

        $cus_data = UserSignup::all();


        return view('adminpanel.Customer', compact('cus_data'));
    }
    public function delete_Customer($cus_id)
    {

        $data = UserSignup::where('id', $cus_id);
        $data->delete();
        return redirect()->back()->with('message', 'Customer Deleted successfully');
    }

    //test
    public function view_test1()
    {
        if (session()->has('user')) {

            return view('test1');
        } else {
            return redirect('userlogin')->with('message', 'Please login to access the admin dashboard.');

        }
    }



    public function show_vendors()
    {
        $vendor_data = VendorSignup::all();

        return view('adminpanel.show_vendors', compact('vendor_data'));
    }

    public function delete_vendor($vendor_id)
    {

        $data = VendorSignup::where('id', $vendor_id);
        $data->delete();
        return redirect()->back()->with('message', 'vendor Deleted successfully');
    }

    public function approve_vendor($vendor_id)
    {
        // Retrieve the data from the VendorSignup model
        $vendorData = VendorSignup::where('id', $vendor_id)->first();

        if ($vendorData) {
            // Create a new instance of the FinalVendors model
            $data = new final_vendors;

            // Assign the properties from the $vendorData object
            $data->name = $vendorData->name;
            $data->phone = $vendorData->phone;
            $data->username = $vendorData->username;
            $data->email = $vendorData->email;
            $data->password = $vendorData->password;
            $data->buisness_name = $vendorData->buisness_name;
            $data->address = $vendorData->address;
            $data->buisness_lisence_no = $vendorData->buisness_lisence_no;

            $data->save();
            $vendorData->delete();

            return redirect()->back()->with('message', 'Vendor Approved successfully');
        } else {
            // Handle the case when the vendor data with the given ID is not found
            return redirect()->back()->with('error', 'Vendor data not found');
        }
    }


    public function final_vendors()
    {
        $vendor_data = final_vendors::all();

        return view('adminpanel.final_vendors', compact('vendor_data'));
    }
    public function delete_f_vendor($vendor_id)
    {
        $vendor = final_vendors::find($vendor_id);


        $data = final_vendors::where('id', $vendor_id);

        $data->delete();
        return redirect()->back()->with('message', 'Vendor and the vendor products deleted');
    }







}