@extends('adminpanel/navbar')
@section('content')
<!-- DESIGNING OF THE PAGE-->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    
  </head>
  <body>
    <!-- connect navbar-->
    


    
    
    <!-- HTML bootstrap design -->
    <div class="container">
    <!-- Heading of page -->
    <style>
        body {
          height: 100vh; /* Set the body height to 100% viewport height */
          overflow: hidden; /* Hide the body's default scrollbar */
        }

      </style>
    <div class="content-wrapper">
    @if(session()->has('message'))

    <div class="alert alert-info">
        
        {{session()->get('message')}}

    </div>

    @endif    
    

    
    <h1 class="text-center fw-bold" style="color: green; font-family: 'Montserrat', sans-serif;">SIGN UP AS VENDOR</h1>
    <h5 class="text-center fw-bold" style="color: green; font-family: 'Montserrat', sans-serif;">Rent away your clothes with us</h5>
    <form action="{{url('/')}}/vendorsignup" method="post">

        @csrf 
        <div class="row">
            <!-- Name box-->
            <div class="col-md-6 mb-3">
                <label for="Name" class="form-label fw-bold">Name</label>
                <input type="text" maxlength="30" class="form-control" id="Name" name="Name" aria-describedby="nameHelp" required="required">
            </div>
            <!--pohone num box-->
            <div class="col-md-6 mb-3">
                <label for="phone_number" class="form-label fw-bold">Phone number</label>
                <input type="tel" class="form-control" id="phone_number" name="phone_number" aria-describedby="phoneHelp" required="required">
                <div id="phoneHelp" maxlength="15" class="form-text">Enter a valid phone number</div>
            </div>
            <!--address-->
            <div class="col-md-6 mb-3">
                <label for="address" class="form-label fw-bold">Address</label>
                <input type="text" maxlength="500" class="form-control" id="address" name="address" aria-describedby="address" required="required">
                <div id="address" maxlength="500" class="form-text">Enter Address</div>
            </div>

            <div class="col-md-6 mb-3">
                <label for="b_name" class="form-label fw-bold">Buisness name</label>
                <input type="text" maxlength="500" class="form-control" id="b_name" name="b_name" aria-describedby="b_name" required="required">
                <div id="b_name" maxlength="500" class="form-text">Enter display name</div>
            </div>

            <div class="col-md-6 mb-3">
                <label for="buisness_lisence" class="form-label fw-bold">Buisness Lisence</label>
                <input type="text" maxlength="500" class="form-control" id="buisness_lisence" name="buisness_lisence" aria-describedby="buisness_lisence" required="required">
                <div id="buisness_lisence" maxlength="500" class="form-text">Enter buisness lisence no</div>
            </div>

            <!--Email box-->
            <div class="col-md-6 mb-3">
                <label for="email" class="form-label fw-bold">Email address</label>
                <input type="email" maxlength="50" class="form-control" id="email" name="email" aria-describedby="emailHelp" required="required">
            </div>
            <!--username box-->
            <div class="col-md-6 mb-3">
                <label for="username" class="form-label fw-bold">Username</label>
                <input type="text" maxlength="15" class="form-control" id="username" name="username" aria-describedby="usernameHelp" required="required">
            </div>
            <!--Password box-->
            <div class="col-md-6 mb-3">
                <label for="password" class="form-label fw-bold">Password</label>
                <input type="password" maxlength="30" class="form-control" id="password" name="password" required="required">
            </div>
            <!--Confirm pass box-->
            <div class="col-md-6 mb-3">
                <label for="cpassword" class="form-label fw-bold">Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword" required="required">
                <div id="cpassword"  maxlength="30" class="form-text">Please enter the password again.</div>
            </div>
            </div>
            <!--Sign up button button-->
            <div class="text-center" >
            <button type="submit" class="btn btn-primary bg-success fw-bold">Sign Up as Vendor</button>
        </div>
    </form>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    
    
    </div>

    <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Rent koro <br> Rent korei dekho</span>

              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Contact<br> Email: rentkoro@gmail.com <br> Phone: +8801928363 <br>Address: Brac University, Dhaka, Bangldadesh </span>
            </div>
          </footer>
  </body>
</html>
@stop