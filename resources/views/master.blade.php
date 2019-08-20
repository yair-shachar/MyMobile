<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- SEO Meta Tags-->
    <meta name="description" content="Unishop - Universal E-Commerce Template">
    <meta name="keywords" content="shop, e-commerce, modern, flat style, responsive, online store, business, mobile, blog, bootstrap 4, html5, css3, jquery, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="Rokaux">
    <!-- Mobile Specific Meta Tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Favicon and Apple Icons-->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.png') }}">
    <link rel="icon" type="image/png" href="{{ url('lib/uinshop3/dist/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ url('lib/uinshop3/dist/touch-icon-iphone.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ url('lib/uinshop3/dist/touch-icon-ipad.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('lib/uinshop3/dist/touch-icon-iphone-retina.png') }}">
    <link rel="apple-touch-icon" sizes="167x167" href="{{ url('lib/uinshop3/dist/touch-icon-ipad-retina.png') }}">
    <!-- Vendor Styles including: Bootstrap, Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="{{ asset('lib/unishop3/dist/css/vendor.min.css') }}">
    <link rel="stylesheet" media="screen" href="{{ asset('lib/unishop3/src/vendor/css/bootstrap.min.css') }}">    
    <!-- Main Template Styles-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link id="mainStyles" rel="stylesheet" media="screen" href="{{ asset('lib/unishop3/dist/css/styles.min.css') }}">
    <!-- Modernizr-->
    <script src="{{ asset('lib/unishop3/dist/js/modernizr.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>My Mobile @if (!empty( $page_title )) | {{ $page_title }} @endif</title>
    <script>var BASE_URL = "{{ url('') }}/";</script>
  </head>
  <!-- Body-->
  <body>
    <!-- Header starts here-->
    <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
    <header class="site-header navbar-sticky">
      <!-- Topbar-->
      <div class="topbar d-flex justify-content-between">
        <!-- Logo-->
        <div class="site-branding d-flex"><a class="site-logo align-self-center" href="{{ url('') }}"><img src="{{ url('lib/unishop3/dist/img/logo/logos.png') }}" alt="My Mobile"></a></div>
        <!-- Search / Categories-->
        <div class="search-box-wrap d-flex">
          <div class="search-box-inner align-self-center">
            <div class="search-box d-flex">
              <div class="btn-group categories-btn">
                <button class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"><i class="icon-menu text-lg"></i>&nbsp;Categories</button>
                <div class="dropdown-menu mega-dropdown">
                  <div class="row">
                    <div class="col-sm-3"><a class="d-block navi-link text-center mb-30" href="{{ url('shop/screens') }}"><img class="d-block" src="{{ url('lib/unishop3/dist/img/shop/header-categories/11.jpg') }}"><span class="text-gray-dark">Screens</span></a></div>
                    <div class="col-sm-3"><a class="d-block navi-link text-center mb-30" href="{{ url('shop/phones') }}"><img class="d-block" src="{{ url('lib/unishop3/dist/img/shop/header-categories/12.jpg') }}"><span class="text-gray-dark">Phones</span></a></div>
                    <div class="col-sm-3"><a class="d-block navi-link text-center mb-30" href="{{ url('shop/photography') }}"><img class="d-block" src="{{ url('lib/unishop3/dist/img/shop/header-categories/13.jpg') }}"><span class="text-gray-dark">Photography</span></a></div>
                    <div class="col-sm-3"><a class="d-block navi-link text-center mb-30" href="{{ url('shop/music') }}"><img class="d-block" src="{{ url('lib/unishop3/dist/img/shop/header-categories/14.jpg') }}"><span class="text-gray-dark">Music</span></a></div>
                  </div>
                </div>
              </div>

            <form class="input-group" method="get"><span class="input-group-btn">
                 <button type="submit"><i class="icon-search"></i></button></span>
                <input class="form-control" type="search" placeholder="Search for anything">
                <div rel="{{ url('autocomplate') }}"></div>
              </form>
            
            </div>
          </div>
        </div>
        <!-- Toolbar-->
        <div class="toolbar d-flex">
          <div class="toolbar-item visible-on-mobile mobile-menu-toggle"><a href="#">
              <div><i class="icon-menu"></i><span class="text-label">Menu</span></div></a></div>
          <div class="toolbar-item hidden-on-mobile"><a href="#">
              <div><i class="flag-icon"><img src="{{ url('lib/unishop3/dist/img/flags/EN.png') }}" alt="English"></i><span class="text-label">Eng / Usd</span></div></a>
            <ul class="toolbar-dropdown lang-dropdown">
              <li class="px-3 pt-1 pb-2">
                <select class="form-control form-control-sm">
                  <option value="usd">$ USD</option>
                  <option value="usd">€ EUR</option>
                  <option value="usd">£ UKP</option>
                  <option value="usd">¥ JPY</option>
                </select>
              </li>
              <li><a href="#"><i class="flag-icon"><img src="{{ url('lib/unishop3/dist/img/flags/FR.png') }}" alt="Français"></i>&nbsp;Français</a></li>
              <li><a href="#"><i class="flag-icon"><img src="{{ url('lib/unishop3/dist/img/flags/DE.png') }}" alt="Deutsch"></i>&nbsp;Deutsch</a></li>
              <li><a href="#"><i class="flag-icon"><img src="{{ url('lib/unishop3/dist/img/flags/IT.png') }}" alt="Italiano"></i>&nbsp;Italiano</a></li>
            </ul>
          </div>
          <div class="toolbar-item hidden-on-mobile"><a href="product-comparison.html">
              <div><span class="compare-icon"><i class="icon-repeat"></i><span class="count-label">
                 @if( ! Cart::isEmpty() )
                  <span class="cart-total-number"> {{ Cart::getTotalQuantity() }}</span>
                  @endif
              </span></span><span class="text-label">Compare</span></div></a></div>
          <div class="toolbar-item hidden-on-mobile"><a href="{{ url('user/signin') }}">
              <div><i class="icon-user"></i><span class="text-label">Sign In / Up</span></div></a>
            <div class="toolbar-dropdown text-center px-3">
              <p class="text-xs mb-3 pt-2">Sign in to your account or sign up new one to have full control over your orders, receive bonuses and more.</p>
              @if( ! Session::has('user_id') )
              <a class="btn btn-primary btn-sm btn-block" href="{{ url('user/signin') }}">Sign In</a>
              <p class="text-xs text-muted mb-2">New customer?&nbsp;<a href="{{ url('user/signup') }}">Sign Up</a></p>
              @else
              <a class="btn btn-primary btn-sm btn-block" href="{{ url('user/profile') }}">Hello, {{Session::get('user_name')}}</a>
              @if ( Session::has('is_admin'))
              <a class="btn btn-secondary btn-sm btn-block" href="{{ url('cms/dashboard') }}">Admin Panel</a>
              @endif
              <a class="btn btn-secondary btn-sm btn-block" href="{{ url('user/logout') }}">Logout</a>
              @endif
            </div>
          </div>
          <div class="toolbar-item cart-total-items">
            <a href="{{ url('shop/cart') }}">
          <div>
          <span class="cart-icon"><i class="icon-shopping-cart"></i></span>
          @if( ! Cart::isEmpty() )
          <span class="cart-total-number"> {{ Cart::getTotalQuantity() }}</span>
          @endif
        </div>
      <!--<div><span class="text-label">Cart</span></div>-->
      </div></a>
            <div class="toolbar-dropdown cart-dropdown widget-cart hidden-on-mobile">
              <!-- Entry-->
              <div class="d-flex">
                <div class="pr-2 w-50"><a class="btn btn-secondary btn-sm btn-block mb-0" href="{{ url('shop/cart') }}">Expand Cart</a></div>
                <div class="pl-2 w-50"><a class="btn btn-primary btn-sm btn-block mb-0" href="{{ url('shop/cart/checkout') }}">Checkout</a></div>
              </div>
            </div>
          </div>
        </div>
        <!-- Mobile Menu-->
        <div class="mobile-menu">
          <!-- Search Box-->
          <div class="mobile-search">
            <form class="input-group" method="get"><span class="input-group-btn">
                <button type="submit"><i class="icon-search"></i></button></span>
              <input class="form-control" type="search" placeholder="Search site">
            </form>
          </div>
          <!-- Toolbar-->
          <div class="toolbar">
            <div class="toolbar-item"><a href="#">
                <div><i class="flag-icon"><img src="{{ url('lib/unishop3/dist/img/flags/EN.png') }}" alt="English"></i><span class="text-label">Eng / Usd</span></div></a>
              <ul class="toolbar-dropdown lang-dropdown w-100">
                <li class="px-3 pt-1 pb-2">
                  <select class="form-control form-control-sm">
                    <option value="usd">$ USD</option>
                    <option value="usd">€ EUR</option>
                    <option value="usd">£ UKP</option>
                    <option value="usd">¥ JPY</option>
                  </select>
                </li>
                <li><a href="#"><i class="flag-icon"><img src="{{ url('lib/unishop3/dist/img/flags/FR.png') }}" alt="Français"></i>&nbsp;Français</a></li>
                <li><a href="#"><i class="flag-icon"><img src="{{ url('lib/unishop3/dist/img/flags/DE.png') }}" alt="Deutsch"></i>&nbsp;Deutsch</a></li>
                <li><a href="#"><i class="flag-icon"><img src="{{ url('lib/unishop3/dist/img/flags/IT.png') }}" alt="Italiano"></i>&nbsp;Italiano</a></li>
              </ul>
            </div>
            <div class="toolbar-item"><a href="product-comparison.html">
                <div><span class="compare-icon"><i class="icon-repeat"></i><span class="count-label">3</span></span><span class="text-label">Compare</span></div></a></div>
            <div class="toolbar-item"><a href="account-login.html">
                <div><i class="icon-user"></i><span class="text-label">Sign In / Up</span></div></a></div>
          </div>
          <!-- Slideable (Mobile) Menu-->
          <nav class="slideable-menu">
            <ul class="menu" data-initial-height="385">
              <li><span><a href="{{ url('') }}">Home</a><span class="sub-menu-toggle"></span></span></li>
              @if (! empty($menus))
              @foreach ($menus as $menu)
              <li><a href="{{ url( $menu['murl']) }}">
              {{ $menu['link'] }}
              </a></li>
              @endforeach
              @endif          
              <li class="has-children"><span><a href="{{ url('shop') }}">Shop</a><span class="sub-menu-toggle"></span></span>              
                <ul class="slideable-submenu">
                <li><a href="{{ url('shop') }}">All Categories</a></li>
                  <li class="has-children"><span><a href="">Choose Category</a><span class="sub-menu-toggle"></span></span>
                    <ul class="slideable-submenu">
                        <li><a href="{{ url('shop/screens') }}">Screens</a></li>
                        <li><a href="{{ url('shop/phones') }}">Phones</a></li>
                        <li><a href="{{ url('shop/photography') }}">Photography</a></li>
                        <li><a href="{{ url('shop/music') }}">Music</a></li>
                    </ul>
                  </li>
                  
                    <li><a href="{{ url('shop/cart') }}">Cart</a></li>
                  <li class="has-children"><span><a href="">Checkout</a><span class="sub-menu-toggle"></span></span>
                    <ul class="slideable-submenu">
                        <li><a href="{{ url('shop/checkout/address') }}">Address</a></li>
                        <li><a href="{{ url('shop/checkout/shipping') }}">Shipping</a></li>
                        <li><a href="{{ url('shop/checkout/payment') }}">Payment</a></li>
                        <li><a href="{{ url('shop/checkout/review') }}">Review</a></li>
                        <li><a href="{{ url('shop/checkout/complete') }}">Complete</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="has-children"><span><a href="#">Categories</a><span class="sub-menu-toggle"></span></span>
                <ul class="slideable-submenu">
                <li><a href="{{ url('shop/screens') }}">Screens</a></li>
                <li><a href="{{ url('shop/phones') }}">Phones</a></li>
                <li><a href="{{ url('shop/music') }}">Music</a></li>
                <li><a href="{{ url('shop/photography') }}">Photography</a></li>
                </ul>
              </li>
              <li class="has-children"><span><a href="{{ url('user/account') }}">Account</a><span class="sub-menu-toggle"></span></span>
                <ul class="slideable-submenu">
                    <li><a href="{{ url('user/signin') }}">Sign in / Sign up</a></li>
                    <li><a href="{{ url('user/account/password-recovery') }}">Password Recovery</a></li>
                    <li><a href="{{ url('user/account/orders') }}">Orders List</a></li>
                    <li><a href="{{ url('user/account/wishlist') }}">Wishlist</a></li>
                    <li><a href="{{ url('user/account/profile') }}">Profile Page</a></li>
                    <li><a href="{{ url('user/account/address') }}">Contact / Shipping Address</a></li>
                </ul>
              </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- Navbar-->
      <div class="navbar">
        <div class="btn-group categories-btn">
          <button class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"><i class="icon-menu text-lg"></i>&nbsp;Categories</button>
          <div class="dropdown-menu mega-dropdown">
            <div class="row">
             <div class="col-sm-3"><a class="d-block navi-link text-center mb-30" href="{{ url('shop/screens') }}"><img class="d-block" src="{{ url('lib/unishop3/dist/img/shop/header-categories/11.jpg') }}"><span class="text-gray-dark">Screens</span></a></div>
             <div class="col-sm-3"><a class="d-block navi-link text-center mb-30" href="{{ url('shop/phones') }}"><img class="d-block" src="{{ url('lib/unishop3/dist/img/shop/header-categories/12.jpg') }}"><span class="text-gray-dark">Phones</span></a></div>
             <div class="col-sm-3"><a class="d-block navi-link text-center mb-30" href="{{ url('shop/photography') }}"><img class="d-block" src="{{ url('lib/unishop3/dist/img/shop/header-categories/13.jpg') }}"><span class="text-gray-dark">Photography</span></a></div>
             <div class="col-sm-3"><a class="d-block navi-link text-center mb-30" href="{{ url('shop/music') }}"><img class="d-block" src="{{ url('lib/unishop3/dist/img/shop/header-categories/14.jpg') }}"><span class="text-gray-dark">Music</span></a></div>
           </div>
          </div>
        </div> 
        <!-- Main Navigation-->
        <nav class="site-menu">
          <ul>
            <li class="has-submenu active"><a href="{{ url('') }}">Home</a>  
            </li>
            @if (! empty($menus))
              @foreach ($menus as $menu)
              <li><a href="{{ url( $menu['murl']) }}">
              {{ $menu['link'] }}
              </a></li>
              @endforeach
              @endif          
            <li class="has-submenu"><a href="{{ url('shop') }}">Shop</a>
              <ul class="sub-menu">
              <li><a href="{{ url('shop') }}">All Categories</a></li>
                <li class="has-children"><a href="{{('shop/categories') }}">Select Category</a>
                  <ul class="sub-menu">
                      <li><a href="{{ url('shop/screens') }}">Screens</a></li>
                      <li><a href="{{ url('shop/phones') }}">Phones</a></li>
                      <li><a href="{{ url('shop/photography') }}">Photography</a></li>
                      <li><a href="{{ url('shop/music') }}">Music</a></li>
                    </ul>
                </li>
                  <li><a href="{{ url('shop/cart') }}">Cart</a></li>
                <li class="has-children"><a href="checkout-address.html">Checkout</a>
                  <ul class="sub-menu">
                      <li><a href="{{ url('shop/checkout/address') }}">Address</a></li>
                      <li><a href="{{ url('shop/checkout/shipping') }}">Shipping</a></li>
                      <li><a href="{{ url('shop/checkout/payment') }}">Payment</a></li>
                      <li><a href="{{ url('shop/checkout/review') }}">Review</a></li>
                      <li><a href="{{ url('shop/checkout/complete') }}">Complete</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="has-submenu"><a href="{{ url('user/account') }}">Account</a>
              <ul class="sub-menu">
                  <li><a href="{{ url('user/signin') }}">Sign in / Sign up</a></li>
                  <li><a href="{{ url('user/account/password-recovery') }}">Password Recovery</a></li>
                  <li><a href="{{ url('user/account/orders') }}">Orders List</a></li>
                  <li><a href="{{ url('user/account/wishlist') }}">Wishlist</a></li>
                  <li><a href="{{ url('user/account/profile') }}">Profile Page</a></li>
                  <li><a href="{{ url('user/account/address') }}">Contact / Shipping Address</a></li>
              </ul>
            </li>
          </ul>
        </nav>
        <!-- Toolbar ( Put toolbar here only if you enable sticky navbar )-->
        <div class="toolbar">
          <div class="toolbar-inner">
            <div class="toolbar-item"><a href="{{ url('shop/compare') }}">
                <div><span class="compare-icon"><i class="icon-repeat"></i><span class="count-label">
                @if( ! Cart::isEmpty() )
              <span class="count-label"> {{ Cart::getTotalQuantity() }} </span>
              @endif 
             </span> </span><span class="text-label">Compare</span>
            </div></a></div>
            <div class="toolbar-item"><a href="{{ url('shop/cart') }}">
                <div><span class="cart-icon"><i class="icon-shopping-cart"></i><span class="count-label">
                @if( ! Cart::isEmpty() )
              <span class="count-label"> {{ Cart::getTotalQuantity() }} </span>
                @endif            
              </span></span><span class="text-label">Cart</span></div></a>
              <div class="toolbar-dropdown cart-dropdown widget-cart">
                <!-- Entry-->
                <div class="d-flex">
                  <div class="pr-2 w-50"><a class="btn btn-secondary btn-sm btn-block mb-0" href="{{ url('shop/cart') }}">Expand Cart</a></div>
                  <div class="pl-2 w-50"><a class="btn btn-primary btn-sm btn-block mb-0" href="checkout.html">Checkout</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Header ends here -->
    @yield('main_content') 
    <!-- Site Footer-->
  <footer class="site-footer" style="background-image: ({{ url('lib/unishop3/dist/img/footer-bg.png') }};">
    <div class="container">
      <div class="row">
          <div class="col-lg-3 col-md-6">
            <!-- Contact Info-->
            <section class="widget widget-light-skin">
              <h3 class="widget-title">Get In Touch With Us</h3>
              <p class="text-white">Phone: +972-(52)-6524553</p>
              <p><a class="navi-link-light" href="#">yairs33@gmail.com</a></p><a class="social-button shape-circle sb-facebook sb-light-skin" href="#"><i class="socicon-facebook"></i></a><a class="social-button shape-circle sb-twitter sb-light-skin" href="#"><i class="socicon-twitter"></i></a><a class="social-button shape-circle sb-instagram sb-light-skin" href="#"><i class="socicon-instagram"></i></a><a class="social-button shape-circle sb-google-plus sb-light-skin" href="#"><i class="socicon-googleplus"></i></a>
            </section>
          </div>
          <div class="col-lg-3 col-md-6">
            <!-- Mobile App Buttons-->
            <section class="widget widget-light-skin">
              <h3 class="widget-title">Our Mobile App</h3><a class="market-button apple-button mb-light-skin" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">App Store</span></a><a class="market-button google-button mb-light-skin" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">Google Play</span></a><a class="market-button windows-button mb-light-skin" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">Windows Store</span></a>
            </section>
          </div>
          <div class="col-lg-6">
            <!-- Subscription-->
            <section class="widget widget-light-skin">
              <h3 class="widget-title">Be Informed</h3>
              <form class="row" action="//rokaux.us12.list-manage.com/subscribe/post?u=c7103e2c981361a6639545bd5&amp;amp;id=1194bb7544" method="post" target="_blank" novalidate>
                <div class="col-sm-9">
                  <div class="input-group input-light">
                    <input class="form-control" type="email" name="EMAIL" placeholder="Your e-mail"><span class="input-group-addon"><i class="icon-mail"></i></span>
                  </div>
                  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                  <div style="position: absolute; left: -5000px;" aria-hidden="true">
                    <input type="text" name="b_c7103e2c981361a6639545bd5_1194bb7544" tabindex="-1">
                  </div>
                  <p class="form-text text-sm text-white opacity-50 pt-2">Subscribe to our Newsletter to receive early discount offers, latest news, sales and promo information.</p>
                </div>
                <div class="col-sm-3">
                  <button class="btn btn-primary btn-block mt-0" type="submit">Subscribe</button>
                </div>
              </form>
              <div class="pt-3"><img class="d-block" style="width: 324px;" alt="Cerdit Cards" src="{{ url('lib/unishop3/dist/img/credit-cards-footer.png') }}"></div>
            </section>
          </div>
      </div>
    </div>
  
       <div class="row">
          <div class="col-lg-3 col-md-4">
            <!-- Categories-->
            <section class="widget widget-links widget-light-skin">
              <h3 class="widget-title">Shop Departments</h3>
              <div class="row">
                <div class="col-md-4">
                  <ul>
                   <li><a href="{{ url('shop/screens') }}">Screens</a></li>
                   <li><a href="{{ url('shop/phones') }}">Phones</a></li>
                   <li><a href="{{ url('shop/photography') }}">Photography</a></li>
                   <li><a href="{{ url('shop/music') }}">Music</a></li>
                  </ul>
                </div>
              </div>
            </section>
          </div>
         <div class="col-lg-3 col-md-4">
            <section class="widget widget-links widget-light-skin">
              <h3 class="widget-title">About Us</h3>
              <ul>
                <li><a href="{{ url('about') }}">About Our Shop</a></li>
                <li><a href="#">Our Story</a></li>
                <li><a href="{{ url('services') }}">Services</a></li>
                <li><a href="{{ url('contacts') }}">Contacts</a></li>
              </ul>
            </section>
          </div>
          <div class="col-lg-3 col-md-4">
            <!-- Account / Shipping Info-->
            <section class="widget widget-links widget-light-skin">
              <h3 class="widget-title">Account &amp; Shipping Info</h3>
              <ul>
                <li><a href="#">My Account</a></li>
                <li><a href="#">Shipping Rates & Policies</a></li>
                <li><a href="#">Refunds & Replacements</a></li>
                <li><a href="#">Delivery Info</a></li>
              </ul>
            </section>
          </div>
            <!-- Copyright-->
        </div>
        <hr class="hr-light mt-2 margin-bottom-2x hidden-md-down">
      <p class="footer-copyright  text-center">© All rights reserved. Made with &nbsp;<i class="icon-heart text-danger"></i><a href="http://rokaux.com/" target="_blank"> &nbsp;by rokaux</a></p>
    </footer>
    <!-- Site Footer ends here-->
    <!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="icon-chevron-up"></i></a>
    <!-- Backdrop-->
    <div class="site-backdrop"></div>
    <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
     
    <script src="{{ asset('lib/unishop3/dist/js/vendor.min.js') }}"></script>
    <script src="{{ asset('lib/unishop3/dist/js/scripts.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>   
    @if ( Session::has('sm') )
    <script>
    toastr.options.positionClass = 'toast-bottom-center';
    toastr.success("{{ Session::get('sm') }}");
    </script>
    @endif

  </body>
</html>