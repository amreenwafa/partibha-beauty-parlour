<header>
    <!-- header inner -->
    <div class="header">
       <div class="container">
          <div class="row">
             <div class="col-xl-5 col-lg-5 col-md-9 col-sm-9">
                <nav class="navigation navbar navbar-expand-md navbar-dark ">
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
                <!-- Login and Registration Section -->
                <div class="auth_section d-flex justify-content-end align-items-center">
                    <a href="#" class="auth_btn login_btn">
                       <i class="fa fa-user" aria-hidden="true"></i>
                       Login
                    </a>
                    <a href="#" class="auth_btn register_btn ml-3">
                       <i class="fa fa-user-plus" aria-hidden="true"></i>
                       Register
                    </a>
                 </div>

                 <!-- End Login and Registration Section -->
             </div>
          </div>
       </div>
    </div>
 </header>
