<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    @include('adminpanel.css') 
    <style>
    .customer-image {
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

                <h1 class="text-center text-white">Customer List</h1>
                <div class="table-responsive">
                    <table class="table table-bordered mt-5">
                        <thead class="bg-secondary text-light text-center">
                            <tr class="text-center">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Registered Date</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody style="background-color: #eaf4f4; color: #333;">
                            @foreach($cus_data as $cus_data)
                            <tr class="text-center">
                                <td>{{ $cus_data->id }}</td>
                                <td>{{ $cus_data->name }}</td>
                                <td>{{ $cus_data->email }}</td>
                                <td>{{ $cus_data->phone }}</td>
                                <td>{{ $cus_data->address }}</td>
                                <td>{{ $cus_data->created_at }}</td>
                                <td><a onclick="return confirm('Confirm Delete?')" class="btn btn-danger" href="{{url('delete_Customer',$cus_data->id)}}">Delete</a></td>
                                <td>
            
            
           

                                <!-- Action buttons for customer -->
           
                                <!-- Add your action buttons here -->
                                </td>
    
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
