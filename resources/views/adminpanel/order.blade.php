<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    @include('adminpanel.css') 
    <style>
    .product-image {
        width: 100px!important;
        height: 100px!important;
        object-fit: contain!important;
        border-radius: 5px!important;
    }
    </style>
</head>
<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('adminpanel.sidebar')    
        <!-- partial -->
        <!-- partial:partials/_navbar.html -->
        @include('adminpanel.header')  
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">

                @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{ session()->get('message') }}
                </div>
                @endif

                <!-- TABLE-->
                <h1 class="text-center text-white">Rent Koro Products</h1>
    <div class="table-responsive">
  <table class="table table-bordered mt-5">
  <thead class="bg-secondary text-light text-center">
    <tr class="text-center">


        <th>Order ID</th>
        <th>Customer Name</th>

        <th>phone</th>
        
        <th>address</th>
        <th>Product Name</th>
        <th>Image</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Start date</th>
        <th>End date</th>
        <th>Vendor</th>
        <th>Delete</th>
    </tr>

    <tbody style="background-color: #eaf4f4; color: #333;">
    
     @foreach($product_data as $product_data)
    <tr class='text-center'>
        
            <td>{{$product_data->id}}</td>
            <td>{{$product_data->name}}</td>
            <td>{{$product_data->phone}}</td>
            <td>{{$product_data->address}}</td>
            <td>{{$product_data->product_title}}</td>
            <td>
            <img src="/added_products/{{$product_data->image}}" class="product-image">



            </td>
            <td>{{$product_data->price}}</td>
            <td>{{$product_data->quantity}}</td>
            <td>{{ $product_data->created_at->format('Y-m-d') }}</td>
@php
    $daysToAdd = $product_data->day; // Change this to the number of days you want to add
    $newDate = $product_data->created_at->addDays($daysToAdd);
@endphp

<td>{{ $newDate->format('Y-m-d') }}</td>


            <td>{{$product_data->vendor_name}}</td>

	            

            <td><a onclick="return confirm('Confirm Delete?')" class="btn btn-danger" href="{{url('delete_orders',$product_data->id)}}">Delete</a></td>
        </tr>
    @endforeach
</tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- container-scroller -->
    @include('adminpanel.script')
</body>
</html>
