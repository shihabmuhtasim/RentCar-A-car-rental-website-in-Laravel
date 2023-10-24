<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catagories;
use App\Models\Brands;
use App\Models\products;
use App\Models\UserSignup;
use App\Models\Order;
use App\Models\VendorSignup;
use App\Models\final_vendors;
use App\Models\Temp_product;

class admin_content_controller extends Controller
{

    public function index(){
        
        $cus_data=UserSignup::all();
        
          
        return view('adminpanel.admin_dashboard',compact('cus_data'));
            
        }
//catagory
        public function view_catagory(){
            $data= Catagories::all();
            return view('adminpanel.add_catagory', compact('data'));
        }
    
        public function add_catagory(Request $request){
            $data= new Catagories;
            $data->catagory_name= $request['catagory_name'];
            $data-> save();
    
            return redirect()->back()->with('message','Catagory Added successfully');
        }
    
        public function delete_catagory($id){
            $data=Catagories::find($id);
            $data->delete();
            return redirect()->back()->with('message','Catagory Deleted successfully');    
        }


//brand 
        public function view_brand(){
            $data= Brands::all();
            return view('adminpanel.add_brands', compact('data'));
        }
    
        public function add_brand(Request $request){
            $data= new Brands;
            $data->brand_name= $request['brand_name'];
            $data-> save();
    
            return redirect()->back()->with('message','brand Added successfully');
        }
    
        public function delete_brand($id){
            $data=Brands::find($id);
            $data->delete();
            return redirect()->back()->with('message','brands Deleted successfully');    
        }

        //Product

        public function view_product(){
            if (session()->has('admin')) {
              
            $cat= Catagories::all();
            $app= brands::all();
    
            return view('adminpanel.add_product',compact('cat'),compact('app'));
            } 
            else {
                return redirect('adminlogin')->with('message', 'Please login to access the admin panel features.');
        
            }
            
        }

        //add product
        public function add_product(Request $request){
            
            $data= new products;
            $data->product_title= $request['product_title'];
            $data->product_description= $request['product_description'];
            $data->price =$request['product_price'];
            $data->days =$request['product_days'];
            $data->discounted_price= $request['product_discount_price'];
            $data->product_capacity= $request['product_capacity'];
            $data->product_lisence= $request['product_lisence'];
            $data->product_gear= $request['product_gear'];
            $data->product_driver= $request['product_driver'];
            $data->catagory_id= $request['product_category'];
            $data->brand_id= $request['product_brand'];
            $data->vendor_name= "Rent Koro";
    
            $image=$request->image;
            $imagename= time().'.'.$image->getClientOriginalExtension();
            $request->image->move('added_products',$imagename);
            $data->image=$imagename;
    
            $data-> save();
    
            return redirect()->back()->with('message','Product Added successfully');
        }

        public function show_products(){
            $product_data = products::all();
           
    
            return view('adminpanel.show_products',compact('product_data'));
        }
    
        public function delete_product($product_id){

            $data=products::where('product_id', $product_id);
            $data->delete();
            return redirect()->back()->with('message','Product Deleted successfully');    
        }
    
        public function edit_product($product_id){
            $data=products::where('product_id', $product_id)->get();
            $cata= Catagories::all();
            $appa= Brands::all();
            return view('adminpanel.edit_products',compact('data', 'cata', 'appa'));
        }

        public function update_product(Request $request, $product_id){
        
            $data=products::find($product_id);
            $data->product_title= $request->product_title;
            $data->product_description= $request->product_description;
            $data->price =$request->product_price;
            $data->days =$request->product_days;
            $data->discounted_price= $request->product_discount_price;

            $data->product_capacity= $request->product_capacity;
            $data->product_lisence= $request->product_lisence;
            $data->product_gear= $request->product_gear;
            $data->product_driver= $request->product_driver;
            
            $data->catagory_id= $request->product_category;
            $data->brand_id= $request->product_brand;
            $data->vendor_name= "Rent Koro";
    
            
            $image=$request->image;
            if ($image){
                
            $imagename= time().'.'.$image->getClientOriginalExtension();
            $request->image->move('added_products',$imagename);
            $data->image=$imagename;
                
            }
            
    
            $data->save();
    
            return redirect()->back()->with('message','Product Updated successfully'); 
    
            
        
            }






//customer
        public function Customer()
        {

            $cus_data=UserSignup::all();

        
            return view('adminpanel.Customer',compact('cus_data'));
        }
        public function delete_Customer($cus_id){

            $data=UserSignup::where('id', $cus_id);
            $data->delete();
            return redirect()->back()->with('message','Customer Deleted successfully');    
            }

//test
        public function view_test1(){
            if (session()->has('user')) {
          
                return view('test1');
            } else {
                return redirect('userlogin')->with('message', 'Please login to access the admin dashboard.');
        
            }
        }

        

        public function show_vendors(){
            $vendor_data= VendorSignup::all();
    
            return view('adminpanel.show_vendors',compact('vendor_data'));
        }

        public function delete_vendor($vendor_id){

            $data=VendorSignup::where('id', $vendor_id);
            $data->delete();
            return redirect()->back()->with('message','vendor Deleted successfully');    
            }

            public function approve_vendor($vendor_id) {
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


            public function final_vendors(){
                $vendor_data= final_vendors::all();
        
                return view('adminpanel.final_vendors',compact('vendor_data'));
            }
            public function delete_f_vendor($vendor_id){
                $vendor = final_vendors::find($vendor_id);
                $matchingProducts = products::where('vendor_name', $vendor->buisness_name)->get();
                if ($matchingProducts->isNotEmpty()) {
                    foreach ($matchingProducts as $product) {
                        $product->delete();
                    }
                }
                
                $data=final_vendors ::where('id', $vendor_id);
        
                $data->delete();
                return redirect()->back()->with('message','Vendor and the vendor products deleted');    
                }

                




    
    }






