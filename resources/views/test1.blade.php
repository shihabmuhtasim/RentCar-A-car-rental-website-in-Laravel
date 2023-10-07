<!DOCTYPE html>
<html>
<head>
    <title>Simple HTML Page with Logout</title>
</head>
<body>
    <h1>Welcome to our Simple HTML Page!</h1>
    <h2>HELLO, {{session('user')}}</h2>
    <p>This is a basic HTML page with a logout option.</p>

    <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" href="{{url('/userlogout')}}">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1" >Log out</p>
                    </div>
                  </a>
    <!-- Logout Button -->
    <form id="logout-form" action="/userlogout" method="post">
        <button type="submit">Logout</button>
    </form>

    <script>
        // JavaScript to submit the logout form when the button is clicked
        document.getElementById('logout-form').addEventListener('submit', function(e) {
            e.preventDefault(); // Prevent the default form submission
            // Perform any logout logic you need here (e.g., clearing session data)
            // Once done, submit the form to the logout route
            this.submit();
        });
    </script>
</body>
</html>
