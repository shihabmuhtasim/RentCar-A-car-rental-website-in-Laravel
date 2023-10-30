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
            <!--<div class="content-wrapper">-->
            <div class="content-wrapper">

                @if(session()->has('message'))

                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('message')}}

                </div>

                @endif

                <!-- TABLE-->
                <h1 class="text-center text-white">Rent Koro vendors</h1>
                <div class="table-responsive">
                    <table class="table table-bordered mt-5">
                        <thead class="bg-secondary text-light text-center">
                            <tr class="text-center">


                                <th>ID</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Username</th>
                                <th>Buisness Name</th>
                                <th>Lisence</th>
                                <th>Email</th>
                                <th>Remove</th>

                            </tr>

                        <tbody style="background-color: #eaf4f4; color: #333;">

                            @foreach($vendor_data as $vendor_data)
                            <tr class='text-center'>

                                <td>{{$vendor_data->id}}</td>
                                <td>{{$vendor_data->name}}</td>
                                <td>{{$vendor_data->phone}}</td>
                                <td>{{$vendor_data->username}}</td>
                                <td>{{$vendor_data->buisness_name}}</td>
                                <td>{{$vendor_data->buisness_lisence_no}}</td>
                                <td>{{$vendor_data->email}}</td>

                                <td><a onclick="return confirm('Confirm Delete?')" class="btn btn-danger"
                                        href="{{url('delete_f_vendor',$vendor_data->id)}}">Delete</a></td>
                            </tr>

                            @endforeach

                        </tbody>

                        </thead>

                    </table>


                </div>
            </div>
        </div>


        <!-- container-scroller -->
        @include('adminpanel.script')
</body>

</html>