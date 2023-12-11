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
        /* Your existing styles */
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

        body {
            padding-top: 100px;
            /* Adjust this value based on your navbar height */
        }

        nav.navbar.fixed-top {
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            /* Set a high z-index value */
        }

        /* Additional styling for better visibility of the fixed-top navbar */
        .payment-success-container {
            text-align: center;
            margin-top: 80px;
            padding: 30px;
            background-color: #dff0d8;
            border: 1px solid #3c763d;
            border-radius: 5px;
        }

        /* Style the "Return to Home" button */
        .btn-return-home {
            display: block;
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 18px;
            color: #fff;
            background-color: #007bff;
            border: 1px solid #007bff;
            border-radius: 5px;
            text-decoration: none;
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

    <h1>PAYMENT SUCCESSFUL!!!</h1>
    <div class="payment-success-container">
        <h1>PAYMENT SUCCESSFUL!!!</h1>
        <p>Your payment was successful. Thank you for choosing RentKoro!</p>
        <a href="{{url('/userpage')}}" class="btn btn-return-home">Return to Home Page</a>
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

@php
$val_id=urlencode($_POST['val_id']);
$store_id=urlencode("rentk6577403462649");
$store_passwd=urlencode("rentk6577403462649@ssl");
$requested_url = ("https://sandbox.sslcommerz.com/validator/api/validationserverAPI.php?val_id=".$val_id."&store_id=".$store_id."&store_passwd=".$store_passwd."&v=1&format=json");

$handle = curl_init();
curl_setopt($handle, CURLOPT_URL, $requested_url);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false); # IF YOU RUN FROM LOCAL PC
curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false); # IF YOU RUN FROM LOCAL PC

$result = curl_exec($handle);

$code = curl_getinfo($handle, CURLINFO_HTTP_CODE);

if($code == 200 && !( curl_errno($handle)))
{

	# TO CONVERT AS ARRAY
	# $result = json_decode($result, true);
	# $status = $result['status'];

	# TO CONVERT AS OBJECT
	$result = json_decode($result);

	# TRANSACTION INFO
	$status = $result->status;
	$tran_date = $result->tran_date;
	$tran_id = $result->tran_id;
	$val_id = $result->val_id;
	$amount = $result->amount;
	$store_amount = $result->store_amount;
	$bank_tran_id = $result->bank_tran_id;
	$card_type = $result->card_type;

	# EMI INFO
	$emi_instalment = $result->emi_instalment;
	$emi_amount = $result->emi_amount;
	$emi_description = $result->emi_description;
	$emi_issuer = $result->emi_issuer;

	# ISSUER INFO
	$card_no = $result->card_no;
	$card_issuer = $result->card_issuer;
	$card_brand = $result->card_brand;
	$card_issuer_country = $result->card_issuer_country;
	$card_issuer_country_code = $result->card_issuer_country_code;

	# API AUTHENTICATION
	$APIConnect = $result->APIConnect;
	$validated_on = $result->validated_on;
	$gw_version = $result->gw_version;
    

    
    
} else {

	echo "Failed to connect with SSLCOMMERZ";
}

@endphp
