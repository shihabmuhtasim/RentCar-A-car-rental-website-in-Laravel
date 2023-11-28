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
</head>

<body>
    @if(session('user'))
    @include('home.header')
    @else
    @include('home.header2')
    @endif
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('home/images/background.png');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">

                    <h1 class="mb-3 bread">Available cars from </h1>
                    <h1 class="navbar-brand">
                        <span>{{$catagory->catagory_name}}</a></span> catagory
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-cart">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="car-list">
                        @if (empty($cars))
                        <h1>No cars</h1>
                        @else
                        <table class="table">
                            <thead class="thead-primary">
                                <tr class="text-center">
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                    <th class="bg-primary heading">Passenger Capacity</th>
                                    <th class="bg-dark heading">Original Cost</th>
                                    <th class="bg-black heading">Discounted Cost</th>
                                    <th class="bg-success heading">Details</th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach($cars as $car)
                                <tr class="">
                                    <td class="car-image">
                                        <div class="img"
                                            style="background-image:url('added_products/{{$car->image}}');"></div>
                                    </td>
                                    <td class="product-name">
                                        <h3>{{$car->product_title}}</h3>
                                        <p class="mb-0 bread">
                                            <span>Vendor:</span>
                                            <span>{{$car->vendor_name}}</span>
                                        </p>
                                    </td>

                                    <td class="price">
                                        <div class="price-rate">
                                            <h3>
                                                <span class="num"> {{$car->product_capacity}}</span>
                                                <span class="per">person</span>
                                            </h3>
                                        </div>
                                    </td>

                                    <td class="price">
                                        <div class="price-rate">
                                            <h3>
                                                <span class="num"><small class="currency">৳</small>
                                                    {{$car->price}}</span>
                                                <span class="per">/per day</span>
                                            </h3>
                                        </div>
                                    </td>

                                    <td class="price">
                                        <div class="price-rate">
                                            <h3>
                                                <span class="num"><small class="currency">৳</small>
                                                    {{$car->discounted_price}}</span>
                                                <span class="per">/per day</span>
                                            </h3>
                                        </div>
                                    </td>

                                    <td class="price">
                                        <a href="{{url('product_details', $car->product_id)}}"
                                            class="btn btn-success">Details</a>
                                    </td>

                                </tr><!-- END TR-->
                                @endforeach

                            </tbody>
                        </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>


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