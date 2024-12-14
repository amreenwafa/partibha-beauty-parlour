<!DOCTYPE html>
<html lang="en">
   <head>
     @include('home.css')
   </head>
   <body class="main-layout">
      <!-- Loader -->
      <div class="loader_bg">
         <div class="loader"><img src="{{ asset('images/loading.gif') }}" alt="Loading..." /></div>
      </div>
      <!-- End Loader -->


<!-- header -->
  @include('home.header')
<!-- end header inner -->


      <!-- Banner Section -->
      @include('home.banner')
      <!-- End Banner Section -->

       <!-- service -->
       @include('home.service')
       <!-- service -->


     <!-- about -->
     @include('home.about')
     <!-- end about -->


     <!-- customer -->
     @include('home.customer')
     <!-- end customer -->


    <!-- </div>-->
     <!--  contact -->
     @include('home.contact')
     <!-- end contact -->

    <!-- Footer -->
      @include('home.footer')
    <!-- End Footer -->
   </body>
</html>
