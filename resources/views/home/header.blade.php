<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">Rent<span>Koro</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{url('/')}}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{url('about')}}" class="nav-link">About</a></li>
                <li class="nav-item"><a href="{{url('all_catagories')}}" class="nav-link">Categories</a></li>
                <li class="nav-item"><a href="{{url('/all_cars')}}" class="nav-link">Cars</a></li>
                <li class="nav-item"><a href="{{url('contact')}}" class="nav-link">Contact</a></li>
                <li class="nav-item"><a href="{{url('show_cart')}}" class="nav-link">Cart</a></li>

                <!-- Navbar Search Box -->
                <div style="padding-right: 10px; padding-top:5px;">
                    <form action="{{url('product_search')}}" method="GET">
                        @csrf
                        <input type="text" name="search" placeholder="Search for Cars">
                        <input type="submit" value="search" class="btn btn-outline-primary">
                    </form>
                </div>


                <li class="nav-item"><a href="{{url('/userlogout')}}" class="btn btn-danger">Logout</a></li>
            </ul>
        </div>


</nav>