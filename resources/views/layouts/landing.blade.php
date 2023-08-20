<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('landing/assets/images/logo/logo2.png') }}">
    <!-- Other css -->
    <link rel="stylesheet" href="{{ asset('landing/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/assets/css/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/assets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/assets/css/hc-offcanvas-nav.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/assets/css/style.css') }}">
    @livewireStyles
    <title>MYMED</title>
</head>

<body>
    <!-- preloader start here -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- preloader ending here -->

    <!-- ========== Mobile-nav section start here ========== -->
    <div class="mobile-menu">
        <div class="container">
            <div class="mobile-menu-wrapper">
                <div class="logo">
                    <a href="index.html">
                        <img src="{{ asset('landing/assets/images/logo/logo.png') }}" alt="Mukti">
                    </a>
                </div>
                <div class="open-menu"><i class="icofont-navigation-menu"></i></div>
            </div>
            <nav id="mobile-nav">
                <ul class="home-nav">
                    <li class="home">
                        <a href="index.html">Home</a>
                        <ul>
                            <li><a href="index.html">Home-1</a></li>
                            <li><a href="index-2.html">Home-2</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="depart-nav">
                    <li class="depart">
                        <a href="department.html">Department</a>
                    </li>
                </ul>
                <ul class="doctor-nav">
                    <li class="doctor">
                        <a href="doctor.html">Doctors</a>
                        <ul>
                            <li><a href="doctor.html">Doctors</a></li>
                            <li><a href="doctor-single.html">Doctor Single</a></li>
                            <li><a href="doctor-timeline.html">Doctor Timeline</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="service-nav">
                    <li class="service">
                        <a href="service.html">Services</a>
                        <ul>
                            <li><a href="service.html">Services</a></li>
                            <li><a href="service-single.html">Service Single</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="shop-nav">
                    <li class="shop">
                        <a href="shop.html">Shop</a>
                        <ul>
                            <li><a href="shop.html">Shop</a></li>
                            <li><a href="shop-single.html">Shop Single</a></li>
                            <li><a href="cart.html">Shop Cart</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="blog-nav">
                    <li class="blog">
                        <a href="blog.html">Blog</a>
                        <ul>
                            <li><a href="blog.html">Blog Page</a></li>
                            <li><a href="blog-single.html">Blog Single</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="short-nav">
                    <li class="short">
                        <a href="contact.html">Pages</a>
                        <ul>
                            <li><a href="about.html">About Page</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="404.html">404 Error</a></li>
                        </ul>
                    </li>
                </ul>

            </nav>
        </div>
    </div>
    <!-- ========== Mobile-nav section end here ========== -->


    <!-- ==========Header Section Starts Here========== -->
    <header class="header-section d-none d-lg-block">
        <div class="header-top">
            <div class="container">
                <div class="row justify-content-between align-items-center px-15">
                    <div class="header-logo">
                        <a href="index.html" class="logo"><img
                                src="{{ asset('landing/assets/images/logo/logo.png') }}" alt="logo"></a>
                    </div>
                    <ul class="header-contact-info d-flex align-items-center">
                        <li class="item">
                            <div class="item-inner">
                                <div class="item-thumb">
                                    <img src="{{ asset('landing/assets/images/header/1.png') }}" alt="">
                                </div>
                                <div class="item-content">
                                    <span>Number :</span>
                                    <p>+880123456789</p>
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <div class="item-inner">
                                <div class="item-thumb">
                                    <img src="{{ asset('landing/assets/images/header/2.png') }}" alt="">
                                </div>
                                <div class="item-content">
                                    <span>Email :</span>
                                    <p>Mukti@gmail.com</p>
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <div class="item-inner">
                                <div class="item-thumb">
                                    <img src="{{ asset('landing/assets/images/header/3.png') }}" alt="">
                                </div>
                                <div class="item-content">
                                    <span>Address :</span>
                                    <p>12 North West New York 100</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="header-bottom">
            <nav class="container">
                <div class="primary-menu">
                    <div class="menu-area">
                        <div class="row justify-content-between px-15">
                            <ul class="main-menu d-flex">
                                <li class="active"><a href="{{ route('landing-home') }}">Home</a></li>
                                <li><a href="{{ route('landing-about') }}">About</a></li>
                                <li><a href="{{ route('landing-departments') }}">Departments</a></li>
                                <li><a href="{{ route('landing-doctors') }}">Doctors</a></li>
                                <li><a href="{{ route('landing-services') }}">Services</a></li>
                                <li><a href="{{ route('landing-contact') }}">Contact Us</a></li>

                                <li><a href="{{ route('landing-blog') }}">Blog</a></li>

                                @if (Route::has('login'))
                                    @auth
                                        <li class="dropdown"><a href="#"><i class="fa fa-user"></i>
                                                {{ Auth::user()->name }}</a>
                                            <ul class="submenu">
                                                <li>
                                                    @if (Auth::user()->utype == 'USR')
                                                        <a href="{{ route('cabinet-dashboard') }}">
                                                            Dashboard
                                                        </a>
                                                    @else
                                                        <a href="{{ route('admin-dashboard') }}">
                                                            Dashboard
                                                        </a>
                                                    @endif

                                                </li>
                                                <form action="{{ route('logout') }}" method="POST" id="logoutform">
                                                    @csrf
                                                </form>
                                                <li>
                                                    <a href="{{ route('logout') }}"
                                                        onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                                                        Logout
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    @else
                                        <li><a href="{{ route('login') }}"> <i class="fa fa-lock"></i>
                                                Login </a> </li>

                                    @endauth
                                @endif
                                {{--   <li><a href="#">Doctors</a>
                                    <ul class="submenu">
                                        <li><a href="doctor.html">Doctor Page</a></li>
                                        <li><a href="doctor-single.html">Doctor Single</a></li>
                                        <li><a href="doctor-timeline.html">Doctor Timeline</a></li>
                                    </ul>
                                </li> --}}
                            </ul>
                            <ul class="nav-widget d-flex justify-content-between align-items-center">
                                <li class="nav-search">
                                    <input type="text" name="search" placeholder="search here">
                                    <span class="search"><i class="icofont-search-1"></i></span>
                                </li>
                                <li class="buy-cart ml-3">
                                    <i class="icofont-bag"></i>
                                    <span>2</span>
                                    <div class="cart-content">
                                        <div class="cart-item">
                                            <div class="cart-img">
                                                <a href="#"><img
                                                        src="{{ asset('landing/assets/images/buycart/1.jpg') }}"
                                                        alt=""></a>
                                            </div>
                                            <div class="cart-des">
                                                <a href="#">Product Title Hore</a>
                                                <p>$20.00</p>
                                            </div>
                                            <div class="cart-btn">
                                                <a href="#"><i class="icofont-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="cart-item">
                                            <div class="cart-img">
                                                <a href="#"><img
                                                        src="{{ asset('landing/assets/images/buycart/2.jpg') }}"
                                                        alt=""></a>
                                            </div>
                                            <div class="cart-des">
                                                <a href="#">Product Title Hore</a>
                                                <p>$20.00</p>
                                            </div>
                                            <div class="cart-btn">
                                                <a href="#"><i class="icofont-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="cart-bottom">
                                            <div class="cart-subtotal">
                                                <p>Total: <b class="float-right">$40.00</b></p>
                                            </div>
                                            <div class="cart-action">
                                                <button type="submit" class="button d-btn2">View cart</button>
                                                <button type="submit" class="button d-btn2">Checkout</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- ==========Header Section Ends Here========== -->

    {{ $slot }}

    <!-- ==========Footer Section Ends Here========== -->
    <section class="footer-section style-1">
        <div class="container">
            <div class="section-wrapper">
                <div class="footer-top">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-xl-4 wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay=".1s">
                            <div class="contact-info">
                                <h3>Contact Info</h3>
                                <P>Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Donec euismod euismod enim sit amet luctus.
                                    Vivamus pretium lorem at posuere facilisis.</p>
                                <h3>Adresse E-Mail:</h3>
                                <ul class="lab-ul">
                                    <li>support@validtemplates.com</li>
                                </ul>
                                <h3>Téléphone:</h3>
                                <ul class="lab-ul">
                                    <li></i>+44-20-7328-4499</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-xl-4 wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay=".2s">
                            <div class="doctor-info mb-5 mb-sm-0">
                                <h3>Department</h3>
                                <ul class="lab-ul">
                                    <li><a href="#">Dentistes</a></li>
                                    <li><a href="#">Médecin généraliste</a></li>
                                    <li><a href="#">Médecin spécialiste</a></li>
                                </ul>

                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-xl-4 wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay=".3s">
                            <div class="service-info  mb-5 mb-sm-0">
                                <h3>USA Branches:</h3>
                                <p>4992 Bryan Avenue, Prior Lake,<br />
                                    Minnesota<br />
                                    Phone: 651-379-4698</p>
                            </div>
                            <h3>Central Branches:</h3>
                            <p>2001 Kia Magentis, Prior Lake, Minnesota</br>
                                Phone: 651-379-4698</br>
                        </div>
                    </div>
              
                </div>
            </div>
    </section>
    <!-- ==========Footer Section Ends Here========== -->

    <!-- scrollToTop start here -->
    <a href="#" class="scrollToTop"><i class="icofont-rounded-up"></i></a>
    <!-- scrollToTop ending here -->

    <!-- All Scripts -->
    <script src="{{ asset('landing/assets/js/jquery.js') }}"></script>
    <script src="{{ asset('landing/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/circularProgressBar.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/hc-offcanvas-nav.js') }}"></script>
    <script src="{{ asset('landing/assets/js/functions.js') }}"></script>

    @livewireScripts
    @stack('scripts')
</body>

</html>
