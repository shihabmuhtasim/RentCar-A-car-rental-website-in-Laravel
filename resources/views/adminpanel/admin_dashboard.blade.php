<!DOCTYPE html>
<html lang="en">
  
  <head>
    
    <!-- Required meta tags -->
    @include('adminpanel.css') 
  </head>
  <body>
    <div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    @include('adminpanel.sidebar')    
    <!-- partial -->
    <!-- partial:partials/_navbar.html -->
    @include('adminpanel.header')  
    <!-- partial -->
    @include('adminpanel.body')
    <!--@include('adminpanel.footer')  -->
    <!-- container-scroller -->
    @include('adminpanel.script')
  </body>
</html> 