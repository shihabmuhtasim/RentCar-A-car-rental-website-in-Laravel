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
    <div class="hero_area">




        <!-- Content Header (Page header) -->





        <div class="container mt-4">



            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <h4>Update Profile</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('profile_update',$user->id) }}" method="POST">

                            @csrf



                            <div class="row">
                                <div class="col-md-6">


                                    <div class="mb-3">

                                        <label>Username</label>
                                        <input type="text" placeholder="Enter your username here" name="username"
                                            value="{{$user->username}}" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Email Address</label>
                                        <input type="text" readonly value="{{$user->email}}" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Phone Number</label>
                                        <input type="text" name="phone" placeholder="Enter your phone number here"
                                            value="{{$user->phone}}" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Name</label>
                                        <input type="text" name="name" placeholder="Enter your name here"
                                            value="{{$user->name}}" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label>Address</label>
                                        <textarea name="address" placeholder="Enter your address here"
                                            class="form-control" rows="3">"{{$user->address}}"</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-success btn-block">Update Account</button>
                                </div>



                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>



</body>

</html>