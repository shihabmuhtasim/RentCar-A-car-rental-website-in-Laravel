<div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="admin/index.html"><img src="admin/assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-toggle="dropdown" aria-expanded="false" href="#">+ Add new in buisness</a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
                  <h6 class="p-3 mb-0">Projects</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" href="{{url('/v_add_product')}}">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-file-outline text-primary"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Add Product</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" href="{{url('/v_show_products')}}">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-web text-info"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Delete Approved products</p>
                    </div>
                  </a>
                  <div class="dropdown-divider" ></div>
                  <a class="dropdown-item preview-item" href="{{url('/v_p_show_products')}}">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-layers text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Edit Pending Posts</p>
                    </div>
                  </a>
              </li>
              <li class="nav-item dropdown border-left">
  <a class="nav-link count-indicator dropdown-toggle" id="accountOptionsDropdown" href="#" data-toggle="dropdown">
    <!-- Change the icon here (e.g., to a key icon) -->
    <i class="mdi mdi-key"></i>
    <span class="count bg-danger"></span>
  </a>
  <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="accountOptionsDropdown">
    <h6 class="p-3 mb-0">Other Account options</h6>
    <div class="dropdown-divider"></div>
    <!-- Add options for user login, user sign up, vendor login, and vendor signup -->
    <a class="dropdown-item preview-item" href="{{url('/userlogin')}}">
      <div class="preview-thumbnail">
        <div class="preview-icon bg-dark rounded-circle">
          <i class="mdi mdi-login text-success"></i>
        </div>
      </div>
      <div class="preview-item-content">
        <p class="preview-subject mb-1">User Login</p>
        <p class="text-muted ellipsis mb-0"> Click here to log in as a user </p>
      </div>
    </a>
    <a class="dropdown-item preview-item" href="{{url('/usersignup')}}">
      <div class="preview-thumbnail">
        <div class="preview-icon bg-dark rounded-circle">
          <i class="mdi mdi-account-plus text-primary"></i>
        </div>
      </div>
      <div class="preview-item-content">
        <p class="preview-subject mb-1">User Sign Up</p>
        <p class="text-muted ellipsis mb-0"> New user? Sign up here </p>
      </div>
    </a>
    <a class="dropdown-item preview-item" href="{{url('/adminlogin')}}">
      <div class="preview-thumbnail">
        <div class="preview-icon bg-dark rounded-circle">
          <i class="mdi mdi-login-variant text-warning"></i>
        </div>
      </div>
      <div class="preview-item-content">
        <p class="preview-subject mb-1">Admin Login</p>
        <p class="text-muted ellipsis mb-0"> Click here to log in as a admin </p>
      </div>
    </a>
    <a class="dropdown-item preview-item" href="{{url('/adminsignup')}}">
      <div class="preview-thumbnail">
        <div class="preview-icon bg-dark rounded-circle">
          <i class="mdi mdi-account-plus text-danger"></i>
        </div>
      </div>
      <div class="preview-item-content" >
        <p class="preview-subject mb-1">Admin Sign Up</p>
        <p class="text-muted ellipsis mb-0"> New admin? Sign up here </p>
      </div>
    </a>
</li>
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="admin/assets/images/faces/face15.jpg" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">{{session('vendor')}}</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Options</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" href="{{url('/vendorsignup')}}" >
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Add New Account</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" href="{{url('/vendorlogout')}}">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1" >Log out</p>
                    </div>
                  </a>
                  
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->