<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    @include('adminpanel.css') 
    
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
            {{session()->get('message')}}

        </div>

        @endif

        <h2 class="text-center">Insert brands</h2>

    <form action="{{url('add_brand')}}" method="post" class="mb-2" >
        
        @csrf
        <div class="input-group w-90 mb-2">
            <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
            <input type="text" class="form-control" name="brand_name" placeholder="Insert brands" aria-label="Categories" aria-describedby="basic-addon1" style="color: white;">
        </div>
        <div class="input-group w-10 mb-2 m-auto">
            <input type="submit" class="bg-info border-0 p-2 my-3" name="insert_brands" value="Add brands" aria-label="Insert Categories" aria-describedby="basic-addon1" class="bg-info"> 
        </div>
    </form>
    <!-- TABLE-->
    <h1 class="text-center text-white">Rent koro Brands</h1>
  <table class="table table-bordered mt-5">
  <thead class="bg-secondary text-light text-center">
    <tr class="text-center">
        <th>Category ID</th>
        <th>Category Name</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>

    <tbody style="background-color: #eaf4f4; color: #333;">
    
        @foreach ($data as $data)
        <tr class='text-center'>
        
            <td>{{$data->id}}</td>
            <td>{{$data->brand_name}}</td>

            
            <td><a href='' class='text-dark'><i class='fa-solid fa-pen-to-square'></i></a></td>
            <td><a onclick="return confirm('Confirm Delete?')" class="btn btn-danger" href="{{url('delete_brand',$data->id)}}">Delete</a></td>
        </tr>
        @endforeach


    </tbody>

</thead>

</table>
        </div>

        

    </div>

        
    <!-- container-scroller -->
    @include('adminpanel.script')
  </body>
</html> 