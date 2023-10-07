<!DOCTYPE html>
<html lang="en">
  
  <head>
    
    <!-- Required meta tags -->
    @include('vendor.css') 
  </head>
  <body>
    <div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    @include('vendor.sidebar')    
    <!-- partial -->
    <!-- partial:partials/_navbar.html -->
    @include('vendor.header')  
    <!-- partial -->
    @include('vendor.body')
    <!--@include('vendor.footer')  -->
    <!-- container-scroller -->
    @include('vendor.script')
  </body>
</html> 