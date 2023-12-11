<!DOCTYPE html>
<html lang="en">

<head>
    <title>RentKoro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">
    <base href="/public">
    <link rel="stylesheet" href="home/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="home/css/animate.css">
    <link rel="stylesheet" href="home/css/owl.carousel.min.css">
    <link rel="stylesheet" href="home/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="home/css/magnific-popup.css">
    <link rel="stylesheet" href="home/css/aos.css">
    <link rel="stylesheet" href="home/css/ionicons.min.css">
    <link rel="stylesheet" href="home/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="home/css/jquery.timepicker.css">
    <link rel="stylesheet" href="home/css/flaticon.css">
    <link rel="stylesheet" href="home/css/icomoon.css">
    <link rel="stylesheet" href="home/css/style.css">
    <style type="text/css">
    .center {
        margin: auto;
        width: 50%;
        text-align: center;
        padding: 30px;
    }

    table,
    th,
    td {
        border: 0.1pc solid grey;
    }

    .th_deg {
        font-size: 20px;
        padding: 5px;
        background: skyblue;
    }

    .img_deg {
        height: 150px;
        width: 250px;
        padding: 5px;

    }

    .total_deg {
        font-size: 20px;
        padding: 40px;
    }
    </style>
    <style>
    body {
        padding-top: 100px;
        /* Adjust this value based on your navbar height */
    }

    /* Additional styling for better visibility of the fixed-top navbar */
    nav.navbar.fixed-top {
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        z-index: 1000;
        /* Set a high z-index value */
    }
    </style>


</head>

<body>
    <!-- start nav -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="{{url('/')}}">RentKoro</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">

            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{url('/')}}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                <li class="nav-item"><a href="{{url('/all_catagories')}}" class="nav-link">Categories</a></li>
                <li class="nav-item"><a href="{{url('/all_cars')}}" class="nav-link">Cars</a></li>
                <li class="nav-item"><a href="{{url('/profile')}}" class="nav-link">Profile</a></li>
                <li class="nav-item"><a href="{{url('show_cart')}}" class="nav-link">Cart</a></li>
                <li class="nav-item"><a href="{{url('/userlogout')}}" class="btn btn-danger">Logout</a></li>
            </ul>
        </div>
    </nav>

    <!-- END nav -->
    @if(session()->has('message'))

    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        {{session()->get('message')}}

    </div>

    @endif

    <div class='center'>
        <table>
            <tr>
                <th class='th_deg'>Car Name</th>
                <th class='th_deg'>Image</th>
                <th class='th_deg'>Booked days</th>
                <th class='th_deg'>Price</th>
                <th class='th_deg'>Action</th>
            </tr>

            <?php $totalprice=0; ?>
            @foreach($cart as $item)
            <tr>
                <td>{{$item->product_title}}</td>
                <td><img class='img_deg' src=" /added_products/{{$item->image}}" alt=""></td>
                <td>{{$item->day}}</td>
                <td>BDT {{$item->price}} </td>

                <td><a class="btn btn-danger" onclick="return confirm('Are you sure to remove this car from booking?')"
                        href="{{url('remove_cart',$item->id)}}">Remove</a>
                </td>
            </tr>

            <?php $totalprice=$totalprice  + $item->price ?>
            @endforeach
        </table>
        <div>
            <h1 class="total_deg">Total Price : {{$totalprice}} BDT</h1>
        </div>
        <div class="buttons-container">
            <a class="btn btn-primary" href="{{ url('/all_cars') }}">Continue Shopping</a>
        </div>

        <div>
            <h1 style="font-size: 25px; padding-bottom: 15px;">Proceed to Order</h1>
            <a href="{{url('cash_order')}}" class="btn btn-danger">Cash On delivery</a>
            <a href="{{url('gateaway',$totalprice)}}" class="btn btn-danger">Pay Using Card</a>
        </div>
    </div>




    <!-- footer -->
    @include('home.footer')

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div>

    <script src="home/js/jquery.min.js"></script>
    <script src="home/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="home/js/popper.min.js"></script>
    <script src="home/js/bootstrap.min.js"></script>
    <script src="home/js/jquery.easing.1.3.js"></script>
    <script src="home/js/jquery.waypoints.min.js"></script>
    <script src="home/js/jquery.stellar.min.js"></script>
    <script src="home/js/owl.carousel.min.js"></script>
    <script src="home/js/jquery.magnific-popup.min.js"></script>
    <script src="home/js/aos.js"></script>
    <script src="home/js/jquery.animateNumber.min.js"></script>
    <script src="home/js/bootstrap-datepicker.js"></script>
    <script src="home/js/jquery.timepicker.min.js"></script>
    <script src="home/js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="home/js/google-map.js"></script>
    <script src="home/js/main.js"></script>
</body>

</html>