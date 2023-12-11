<!DOCTYPE html>
<html>

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
    @include('sweetalert::alert')
    <div class="hero_area">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a class="navbar-brand" href="{{url('/')}}">RentKoro</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="{{url('/userpage')}}" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="{{url('/all_catagories')}}" class="nav-link">Categories</a></li>
                    <li class="nav-item"><a href="{{url('/all_cars')}}" class="nav-link">Cars</a></li>
                    <li class="nav-item"><a href="{{url('/profile')}}" class="nav-link">Profile</a></li>
                    <li class="nav-item"><a href="{{url('show_cart')}}" class="nav-link">Cart</a></li>
                    <li class="nav-item"><a href="{{url('/userlogout')}}" class="btn btn-danger">Logout</a></li>
                </ul>
            </div>
        </nav>



        <div class="center">
            <table>
                <tr>
                    <th class="th_deg">Product Title</th>
                    <th class="th_deg">Vendor Name</th>
                    <th class="th_deg">Day</th>
                    <th class="th_deg">Price</th>
                    <th class="th_deg">Payment Status</th>
                    <th class="th_deg">Delivery Status</th>
                    <th class="th_deg">Date of order</th>
                    <th class="th_deg">Return Date</th>
                    <th class="th_deg">Image</th>
                    <th class="th_deg">Cancel Order</th>


                </tr>

                @foreach($order as $order)
                @if($order->delivery_status=='processing')
                <tr>
                    <td>{{$order->product_title}}</td>
                    <td>{{$order->vendor_name}}</td>
                    <td>{{$order->day}}</td>
                    <td>{{$order->price}}</td>
                    <td>{{$order->payment_status}}</td>
                    <td>{{$order->delivery_status}}</td>
                    <td>{{$order->created_at->format('Y-m-d') }}</td>
                    @php
                    $daysToAdd = $order->day; // Change this to the number of days you want to add
                    $newDate = $order->created_at->addDays($daysToAdd);
                    @endphp

                    <td>{{ $newDate->format('Y-m-d') }}</td>
                    <td>
                        <img height="100" width="120" src="{{ asset('added_products/' . $order->image) }}"
                            alt="Product Image">

                    </td>
                    <td>
                        @if($order->delivery_status=='processing')
                        <a onclick="return confirm('Are you sure to cancel this order?')" class="btn btn-danger"
                            href="{{url('cancel_order',$order->id)}}">Cancel</a>
                        @else
                        <p style="color: blue;"> Not Allowed</p>
                        @endif
                    </td>

                </tr>
                @endif
                @endforeach

            </table>

        </div>
        <!-- footer end -->

        <script>
            document.addEventListener("DOMContentLoaded", function (event) {
                var scrollpos = localStorage.getItem('scrollpos');
                if (scrollpos) window.scrollTo(0, scrollpos);
            });

            window.onbeforeunload = function (e) {
                localStorage.setItem('scrollpos', window.scrollY);
            };
        </script>
        <!-- jQery -->
        <script src="home/js/jquery-3.4.1.min.js"></script>
        <!-- popper js -->
        <script src="home/js/popper.min.js"></script>
        <!-- bootstrap js -->
        <script src="home/js/bootstrap.js"></script>
        <!-- custom js -->
        <script src="home/js/custom.js"></script>
</body>

</html>