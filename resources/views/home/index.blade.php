<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Basic Meta Tags -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

      <!-- Site Meta Information -->
      <title>Partibha Beauty Parlour</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">

      <!-- CSS Files -->
      <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
      <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
      <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
      <link rel="icon" href="{{ asset('images/fevicon.png') }}" type="image/gif" />

      <!-- External CSS -->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

      <!-- Conditional Scripts for Older Browsers -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="main-layout">
      <!-- Loader -->
      <div class="loader_bg">
         <div class="loader"><img src="{{ asset('images/loading.gif') }}" alt="Loading..." /></div>
      </div>
      <!-- End Loader -->

      <!-- Header -->
      <header>
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-5 col-lg-5 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="{{ url('/') }}">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#about">About</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#service">Service</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#customer">Customer</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#contact">Contact Us</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
                  <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="{{ url('/') }}"><img src="{{ asset('images/logo-free-removebg-preview.png') }}" alt="Logo" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5">
                     <ul class="email">
                        <li><a href="#">Call: (+71) 1234567890</a></li>
                        <li><a href="#">Email: demo@gmail.com</a></li>
                        <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- End Header -->

      <!-- Banner Section -->
      <section class="banner_main">
         <div id="banner1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#banner1" data-slide-to="0" class="active"></li>
               <li data-target="#banner1" data-slide-to="1"></li>
               <li data-target="#banner1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container-fluid">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="text-bg">
                                 <span>Welcome to our</span>
                                 <h1>Parlour</h1>
                                 <p>We specialize in bridal makeup tailored to your preferences...</p>
                                 <a href="#">Read More </a> <a href="#">Book Now</a>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure><img src="{{ asset('images/woman-red-sari-high-quality.png') }}" alt="Parlour" /></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Add additional carousel items -->
            </div>
            <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
            <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
            </a>
            <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            </a>
         </div>
      </section>
      <!-- End Banner Section -->

       <!-- service -->
       <div id="service"  class="service">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <div class="titlepage">
                    <h2> <img src="images/head.png" alt="#"/> Our Services</h2>
                 </div>
              </div>
           </div>
           <div class="row">
              <div class="col-md-4">
                 <div id="hover_chang" class="service_box">
                    <i><img src="images/thr.png" alt="#"/></i>
                    <h3>Cosmetic</h3>
                    <p>some form, by injected humour, or randomised words which don't look even slightly believable. If you are </p>
                 </div>
              </div>
              <div class="col-md-4">
                 <div id="hover_chang" class="service_box">
                    <i><img src="images/thr1.png" alt="#"/></i>
                    <h3>nails</h3>
                    <p>some form, by injected humour, or randomised words which don't look even slightly believable. If you are </p>
                 </div>
              </div>
              <div class="col-md-4">
                 <div id="hover_chang" class="service_box">
                    <i><img src="images/thr2.png" alt="#"/></i>
                    <h3>hairdressing</h3>
                    <p>some form, by injected humour, or randomised words which don't look even slightly believable. If you are </p>
                 </div>
              </div>
              <div class="col-md-12">
                 <a class="read_more" href="#">Read More</a>
              </div>
           </div>
        </div>
     </div>
     <!-- service -->
     <!-- about -->
     <div id="about"  class="about">
        <div class="container">
           <div class="row">
              <div class="col-md-9">
                 <div class="titlepage">
                    <h2> <img src="images/head.h.png" alt="#"/> About Our Partibha Beauty Parlour</h2>
                    <p>You can visit Pratibha Beauty Parlour for bridal and party makeup. Our skilled team is dedicated to making you look even more beautiful. We also offer excellent skin and beauty treatments, ensuring you receive the best care and a delightful experience.</p>
                    <a class="read_more">Read More</a>
                 </div>
              </div>
           </div>
        </div>
     </div>
     <!-- end about -->
     <!-- customer -->
     <div id="customer" class="customer">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <div class="titlepage">
                    <h2> <img src="images/head.png" alt="#"/> Our Customer Feedback</h2>
                 </div>
              </div>
           </div>
           <div id="myCarousel" class="carousel slide customer_Carousel " data-ride="carousel">
              <ol class="carousel-indicators">
                 <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                 <li data-target="#myCarousel" data-slide-to="1"></li>
                 <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                 <div class="carousel-item active">
                    <div class="container">
                       <div class="carousel-caption ">
                          <div class="test_box">
                             <i><img src="images/tes.png" alt="#"/></i>
                             <h4>Rohali jonson</h4>
                             <span>customer</span>
                             <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined </p>
                             <img src="images/icon.png" alt="#"/>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="carousel-item">
                    <div class="container">
                       <div class="carousel-caption">
                          <div class="test_box">
                             <i><img src="images/tes.png" alt="#"/></i>
                             <h4>Rohali jonson</h4>
                             <span>customer</span>
                             <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined </p>
                             <img src="images/icon.png" alt="#"/>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="carousel-item">
                    <div class="container">
                       <div class="carousel-caption">
                          <div class="test_box">
                             <i><img src="images/tes.png" alt="#"/></i>
                             <h4>Rohali jonson</h4>
                             <span>customer</span>
                             <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined </p>
                             <img src="images/icon.png" alt="#"/>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
              <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
              <i class="fa fa-chevron-left" aria-hidden="true"></i>
              </a>
              <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
              <i class="fa fa-chevron-right" aria-hidden="true"></i>
              </a>
           </div>
        </div>
     </div>
     <!-- end customer -->
     </div>
     <!--  contact -->
     <div id="contact" class="contact">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <div class="titlepage">
                    <h2> <img src="images/head.h.png" alt="#"/> Request <span class="white"> A call Back</span></h2>
                 </div>
              </div>
           </div>
           <div class="row">
              <div class="col-md-6">
                 <form id="request" class="main_form">
                    <div class="row">
                       <div class="col-md-12 ">
                          <input class="contactus" placeholder="Name" type="type" name="Name">
                       </div>
                       <div class="col-md-12">
                          <input class="contactus" placeholder="Email" type="type" name="Email">
                       </div>
                       <div class="col-md-12">
                          <input class="contactus" placeholder="Phone Number" type="type" name="Phone Number">
                       </div>
                       <div class="col-md-12">
                          <textarea class="textarea" placeholder="Message" type="type" Message="Name">Message </textarea>
                       </div>
                       <div class="col-sm-col-xl-6 col-lg-6 col-md-6 col-sm-12">
                          <button class="send_btn">Send</button>
                       </div>
                    </div>
                 </form>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                   <div class="map-responsive">
                       <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="432" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
                    </div>
              </div>
           </div>
        </div>
     </div>
     <!-- end contact -->

      <!-- Footer -->
      <footer id="contact">
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-8 offset-md-4">
                     <form class="bottom_form">
                        <h3>Newsletter</h3>
                        <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                        <button class="sub_btn">Subscribe</button>
                     </form>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xl-6 col-md-12">
                     <div class="row">
                        <div class="col-md-7 padd_bottom">
                           <div class="heading3">
                              <a href="#"><img src="{{ asset('images/pratibha_logo_white.png') }}" alt="Logo" /></a>
                              <p>Pratibha Beauty Parlour is the perfect destination...</p>
                           </div>
                        </div>
                        <div class="col-md-5 padd_bottom padd_bott">
                           <div class="heading3">
                              <h3>Contact Us</h3>
                              <ul class="infometion">
                                 <li><a href="#">+92222242222</a></li>
                                 <li><a href="#">pratibha8@gmail.com</a></li>
                                 <li><a href="#">Narayan Colony, Deoghar, Jharkhand</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-6 col-md-12">
                     <div class="row">
                        <div class="col-md-6 offset-md-1 padd_bottom">
                           <div class="heading3">
                              <h3>Information</h3>
                              <p>Pratibha Beauty Parlour will remain closed on Sundays...</p>
                           </div>
                        </div>
                        <div class="col-md-5">
                           <div class="heading3">
                              <h3>My Account</h3>
                              <ul class="infometion">
                                 <li><a href="#">Donec odio. Quisque...</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="copyright">
                  <p>© 2019 All Rights Reserved. <a href="https://html.design/">Amreen & Bheem</a></p>
               </div>
            </div>
         </div>
      </footer>
      <!-- End Footer -->

      <!-- JavaScript Files -->
      <script src="{{ asset('js/jquery.min.js') }}"></script>
      <script src="{{ asset('js/popper.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
      <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <script src="{{ asset('js/custom.js') }}"></script>
   </body>
</html>
