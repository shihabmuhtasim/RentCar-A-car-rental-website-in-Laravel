<html>
    <head>
        <title>Layout</title>
    </head>
    <body>
        <header>
            <!-- NAV BAR BUTTONS BASED ON PAGE -->

<nav class="navbar navbar-expand-lg" style="background-color: #d1f2eb">
  <div class="container-fluid"> 
    
        <a class="navbar-brand" href="welcome" style="font-weight: bold;">RENT KORO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
            <!-- the home button will navigate to welcome.php-->
          <a class="nav-link active" aria-current="page" href="/" style="font-weight: bold;">Home</a>
        </li>

        <li class="nav-item">
              <a class="nav-link" href="userlogin" style="font-weight: bold;">Login</a>
            </li>
          
            <li class="nav-item">
                    <a class="nav-link" href="usersignup" style="font-weight: bold;">Signup</a>
              </li>
              <a class="nav-link" href="adminlogin" style="font-weight: bold;">Admin Login</a>
            </li>
          
            <li class="nav-item">
                    <a class="nav-link" href="adminsignup" style="font-weight: bold;">Admin Signup</a>
              </li>
              <a class="nav-link" href="vendorlogin" style="font-weight: bold;"> Vendor Login</a>
            </li>
          
            <li class="nav-item">
                    <a class="nav-link" href="vendorsignup" style="font-weight: bold;">Vendor Signup</a>
              </li>      
      </ul>
    </div>
  </div>
</nav>
        </header>
        <div>
            @yield('content')
        </div>



    </body>
</html>