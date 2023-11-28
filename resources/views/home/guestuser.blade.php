<!DOCTYPE html>
<html lang="en">

<head>
    <title>RentKoro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">
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
    <!-- start nav -->
    @include('home.header2')
    <!-- END nav -->

    @include('home.slider')

    <!-- start vehicle display -->
    @include('home.product')
    <!-- end vehicle display -->

    <!-- available categories -->
    @include('home.category')

    <!-- recruitment option -->
    <section class="ftco-section ftco-intro" style="background-image: url(home/images/bg_3.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-6 heading-section heading-section-white ftco-animate">
                    <h2 class="mb-3">Do You Want To Earn With Us? So Don't Be Late.</h2>
                    <a href="{{url('/vendorsignup')}}" class="btn btn-primary btn-lg">Become A Vendor</a>
                </div>
            </div>
        </div>
    </section>


    <!-- stats display -->
    @php
    $proCount = $product_data->count();
    $cusCount = $cus_data->count();
    $vendCount = $vend_data->count();
    @endphp

    <section class="ftco-counter ftco-section img bg-light" id="section-counter">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text text-border d-flex align-items-center">
                            <strong class="number" data-number="2">0</strong>
                            <span>Year <br>Experienced</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text text-border d-flex align-items-center">
                            <strong class="number" data-number="{{ $proCount }}">0</strong>
                            <span>Total <br>Cars</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text text-border d-flex align-items-center">
                            <strong class="number" data-number="{{ $cusCount }}">0</strong>
                            <span>Happy <br>Customers</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text d-flex align-items-center">
                            <strong class="number" data-number="{{ $vendCount }}">0</strong>
                            <span>Total <br>Vendors</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


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