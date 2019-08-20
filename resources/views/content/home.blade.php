@extends('master')
@section('main_content')
    <!-- Page Content-->
    <!-- Main Slider-->
    <section class="hero-slider" style="background-image: url(img/hero-slider/main-bg.jpg);">
      <div class="owl-carousel large-controls dots-inside" data-owl-carousel="{ &quot;nav&quot;: true, &quot;dots&quot;: true, &quot;loop&quot;: true, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 7000 }">
        <div class="item">
          <div class="container padding-top-3x">
            <div class="row justify-content-center align-items-center">
              <div class="col-lg-5 col-md-6 padding-bottom-2x text-md-left text-center">
                <div class="from-bottom"><img class="d-inline-block w-150 mb-4" src="{{ url('lib/unishop3/dist/img/hero-slider/logo02.png') }}" alt="Puma">
                  <div class="h2 text-body mb-2 pt-1">Google Home - Smart Speaker</div>
                  <div class="h2 text-body mb-4 pb-1">starting at <span class="text-medium">$129.00</span></div>
                </div><a class="btn btn-primary scale-up delay-1" href="{{ url('shop/music') }}">View Offers&nbsp;<i class="icon-arrow-right"></i></a>
              </div>
              <div class="col-md-6 padding-bottom-2x mb-3"><img class="d-block mx-auto" src="{{ url('lib/unishop3/dist/img/hero-slider/new02.jpg') }}" alt="Puma Backpack"></div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="container padding-top-3x">
            <div class="row justify-content-center align-items-center">
              <div class="col-lg-5 col-md-6 padding-bottom-2x text-md-left text-center">
                <div class="from-bottom"><img class="d-inline-block w-150 mb-3" src="{{ url('lib/unishop3/dist/img/hero-slider/logo01.png') }}" alt="Sony">
                  <div class="h2 text-body mb-2 pt-1">Modern Powerful Laptop</div>
                  <div class="h2 text-body mb-4 pb-1">for only <span class="text-medium">$1,459.99</span></div>
                </div><a class="btn btn-primary scale-up delay-1" href="{{ url('shop/screens') }}">Shop Now&nbsp;<i class="icon-arrow-right"></i></a>
              </div>
              <div class="col-md-6 padding-bottom-2x mb-3"><img class="d-block mx-auto" src="{{ url('lib/unishop3/dist/img/hero-slider/new01.jpg') }}" alt="Chuck Taylor All Star II"></div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="container padding-top-3x">
            <div class="row justify-content-center align-items-center">
              <div class="col-lg-5 col-md-6 padding-bottom-2x text-md-left text-center">
                <div class="from-bottom"><img class="d-inline-block w-150 mb-3" src="{{ url('lib/unishop3/dist/img/hero-slider/logo03.png') }}" alt="Motorola">
                  <div class="h2 text-body mb-2 pt-1">Beats Studio by Dr.Dre</div>
                  <div class="h2 text-body mb-4 pb-1">for only <span class="text-medium">$349.50</span></div>
                </div><a class="btn btn-primary scale-up delay-1" href="{{ url('shop/music') }}">Shop Now&nbsp;<i class="icon-arrow-right"></i></a>
              </div>
              <div class="col-md-6 padding-bottom-2x mb-3"><img class="d-block mx-auto" src="{{ url('lib/unishop3/dist/img/hero-slider/new03.jpg') }}" alt="Moto 360"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Top Categories/Deals--> 
    <section class="container padding-top-3x padding-bottom-2x">
    <h2 class="h3 pb-3 text-center">TOP OFFERS</h2>
      <div class="row">
        <div class="col-lg-4 col-sm-6">
          <div class="card border-0 bg-secondary mb-30">
            <div class="card-body d-table w-100">
              <div class="d-table-cell align-middle"><img class="d-block w-100" src="{{ url('lib/unishop3/dist/img/shop/categories/29.jpg') }}" alt="Image"></div>
              <div class="d-table-cell align-middle pl-2">
                <h3 class="h6 text-thin">Tablets, Smartphones <br><strong>And more...</strong></h3>
                <h4 class="h6 d-table w-100 text-thin"><span class="d-table-cell align-bottom" style="line-height: 1.2;">UP<br>TO&nbsp;</span><span class="d-table-cell align-bottom h1 text-medium">50%</span><span class="d-table-cell align-bottom">&nbsp;off</span></h4><a class="text-decoration-none" href="shop-grid-ls.html">Shop now&nbsp;<i class="icon-chevron-right d-inline-block align-middle text-lg"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="card border-0 bg-secondary mb-30">
            <div class="card-body d-table w-100">
              <div class="d-table-cell align-middle"><img class="d-block w-100" src="{{ url('lib/unishop3/dist/img/shop/categories/30.jpg') }}" alt="Image"></div>
              <div class="d-table-cell align-middle pl-2">
                <h3 class="h6 text-thin">DJ Phantom <span style='white-space: nowrap;'>HD Video Drone</span> <br><strong>Arrives</strong></h3>
                <h4 class="h6 d-table w-100 text-thin"><span class="d-table-cell align-top text-right" style="line-height: 1.2;">From&nbsp;<br><strong>$&nbsp;</strong></span><span class="d-table-cell align-top h1 text-medium">990</span></h4><a class="text-decoration-none" href="shop-grid-ls.html">Shop now&nbsp;<i class="icon-chevron-right d-inline-block align-middle text-lg"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="card border-0 bg-secondary mb-30">
            <div class="card-body d-table w-100">
              <div class="d-table-cell align-middle"><img class="d-block w-100" src="{{ url('lib/unishop3/dist/img/shop/categories/31.jpg') }}" alt="Image"></div>
              <div class="d-table-cell align-middle pl-2">
                <h3 class="h6 text-thin">Watches, Fitness Bands <br><strong>And more...</strong></h3>
                <h4 class="h6 d-table w-100 text-thin"><span class="d-table-cell align-bottom" style="line-height: 1.2;">UP<br>TO&nbsp;</span><span class="d-table-cell align-bottom h1 text-medium">39%</span><span class="d-table-cell align-bottom">&nbsp;off</span></h4><a class="text-decoration-none" href="shop-grid-ls.html">Shop now&nbsp;<i class="icon-chevron-right d-inline-block align-middle text-lg"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<!---------->
    <!-- Featured Products-->
    <section class="container padding-bottom-2x mb-2">
      <h2 class="h3 pb-3 text-center">Featured Products</h2>
      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="product-card mb-30">
            <div class="product-badge bg-danger">Sale</div><a class="product-thumb" href="shop-single.html"><img src="{{ url('lib/unishop3/dist/img/shop/products/01.jpg') }}" alt="Product"></a>
            <div class="product-card-body">
              <div class="product-category"><a href="#">Smart home</a></div>
              <h3 class="product-title"><a href="shop-single.html">Echo Dot (2nd Generation)</a></h3>
              <h4 class="product-price">
                <del>$62.00</del>$49.99
              </h4>
            </div>
            <div class="product-button-group"><a class="product-button btn-wishlist" href="#"><i class="icon-heart"></i><span>Wishlist</span></a><a class="product-button btn-compare" href="#"><i class="icon-repeat"></i><span>Compare</span></a><a class="product-button" href="#" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-check-circle" data-toast-title="Product" data-toast-message="successfuly added to cart!"><i class="icon-shopping-cart"></i><span>To Cart</span></a></div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="product-card mb-30">
              <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star"></i>
              </div><a class="product-thumb" href="shop-single.html"><img src="{{ url('lib/unishop3/dist/img/shop/products/02.jpg') }}" alt="Product"></a>
            <div class="product-card-body">
              <div class="product-category"><a href="#">Photo cameras</a></div>
              <h3 class="product-title"><a href="shop-single.html">Aberg Best 21 Mega Pixels</a></h3>
              <h4 class="product-price">$35.00</h4>
            </div>
            <div class="product-button-group"><a class="product-button btn-wishlist" href="#"><i class="icon-heart"></i><span>Wishlist</span></a><a class="product-button btn-compare" href="#"><i class="icon-repeat"></i><span>Compare</span></a><a class="product-button" href="#" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-check-circle" data-toast-title="Product" data-toast-message="successfuly added to cart!"><i class="icon-shopping-cart"></i><span>To Cart</span></a></div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="product-card mb-30"><a class="product-thumb" href="{{ url('shop') }}"><img src="{{ url('lib/unishop3/dist/img/shop/products/05.jpg') }}" alt="Product"></a>
            <div class="product-card-body">
              <div class="product-category"><a href="#">Headphones</a></div>
              <h3 class="product-title"><a href="{{ url('shop') }}">Zeus Bluetooth Headphones</a></h3>
              <h4 class="product-price">$28.99</h4>
            </div>
            <div class="product-button-group"><a class="product-button btn-wishlist" href="#"><i class="icon-heart"></i><span>Wishlist</span></a><a class="product-button btn-compare" href="#"><i class="icon-repeat"></i><span>Compare</span></a><a class="product-button" href="#" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-check-circle" data-toast-title="Product" data-toast-message="successfuly added to cart!"><i class="icon-shopping-cart"></i><span>To Cart</span></a></div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="product-card mb-30">
            <div class="product-badge bg-secondary border-default text-body">Out of stock</div><a class="product-thumb" href="{{ url('shop') }}"><img src="{{ url('lib/unishop3/dist/img/shop/products/03.jpg') }}" alt="Product"></a>
            <div class="product-card-body">
              <div class="product-category"><a href="#">Computers, laptops</a></div>
              <h3 class="product-title"><a href="{{ url('shop') }}">Microsoft Surface Pro 4</a></h3>
              <h4 class="product-price">$1,049.10</h4>
            </div>
            <div class="product-button-group"><a class="product-button btn-wishlist" href="#"><i class="icon-heart"></i><span>Wishlist</span></a><a class="product-button btn-compare" href="#"><i class="icon-repeat"></i><span>Compare</span></a><a class="product-button" href="shop-single.html"><i class="icon-arrow-right"></i><span>Details</span></a></div>
          </div>
        </div>
    </section>
        <!--<div class="d-inline-block w-200 pt-2"><img class="d-block w-100" src="{{url('lib/unishop3/dist/img/banners/shop-banner-logo.png') }}" alt="Canon"></div> -->
        <div class="pt-5"></div>
        
      </div>
    </section><a class="d-block position-relative mx-auto" style="max-width: 682px; margin-top: -130px; z-index: 10;"></a>
    <!-- Staff Picks (Widgets)-->
    <section class="container padding-top-3x padding-bottom-2x">
      <h2 class="h3 pb-3 text-center">Staff Picks</h2>
      <div class="row pt-1">
        <div class="col-md-4 col-sm-6">
          <div class="widget widget-featured-products">
            <h3 class="widget-title">Best Sellers</h3>
            <!-- Entry-->
            <div class="entry">
              <div class="entry-thumb"><a href="shop-single.html"><img src="{{ url('lib/unishop3/dist/img/shop/widget/01.jpg') }}" alt="Product"></a></div>
              <div class="entry-content">
                <h4 class="entry-title"><a href="shop-single.html">GoPro Hero4 Silver</a></h4><span class="entry-meta">$287.99</span>
              </div>
            </div>
            <!-- Entry-->
            <div class="entry">
              <div class="entry-thumb"><a href="shop-single.html"><img src="{{ url('lib/unishop3/dist/img/shop/widget/02.jpg') }}" alt="Product"></a></div>
              <div class="entry-content">
                <h4 class="entry-title"><a href="shop-single.html">Puro Sound Labs BT2200</a></h4><span class="entry-meta">$95.99</span>
              </div>
            </div>
            <!-- Entry-->
            <div class="entry">
              <div class="entry-thumb"><a href="shop-single.html"><img src="{{ url('lib/unishop3/dist/img/shop/widget/03.jpg') }}" alt="Product"></a></div>
              <div class="entry-content">
                <h4 class="entry-title"><a href="shop-single.html">HP OfficeJet Pro 8710</a></h4><span class="entry-meta">$89.70</span>
              </div>
            </div><a class="btn btn-outline-secondary btn-sm mb-0" href="{{ url('shop') }}">View More</a>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="widget widget-featured-products">
            <h3 class="widget-title">New Arrivals</h3>
            <!-- Entry-->
            <div class="entry pb-2">
              <div class="entry-thumb"><a href="shop-single.html"><img src="{{ url('lib/unishop3/dist/img/shop/widget/05.jpg') }}" alt="Product"></a></div>
              <div class="entry-content">
                <h4 class="entry-title"><a href="shop-single.html">iPhone X 256 GB Space Gray</a></h4><span class="entry-meta">$1,450.00</span>
              </div>
            </div>
            <!-- Entry-->
            <div class="entry">
              <div class="entry-thumb"><a href="shop-single.html"><img src="{{url('lib/unishop3/dist/img/shop/widget/04.jpg') }}" alt="Product"></a></div>
              <div class="entry-content">
                <h4 class="entry-title"><a href="shop-single.html">Canon EOS M50 Mirrorless Camera</a></h4><span class="entry-meta">$910.00</span>
              </div>
            </div>
            <!-- Entry-->
            <div class="entry">
              <div class="entry-thumb"><a href="shop-single.html"><img src="{{ url('lib/unishop3/dist/img/shop/widget/07.jpg') }}" alt="Product"></a></div>
              <div class="entry-content">
                <h4 class="entry-title"><a href="shop-single.html">Microsoft Xbox One S</a></h4><span class="entry-meta">$298.99</span>
              </div>
            </div><a class="btn btn-outline-secondary btn-sm mb-0" href="{{ url('shop') }}">View More</a>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="widget widget-featured-products">
            <h3 class="widget-title">Top Rated</h3>
            <!-- Entry-->
            <div class="entry pb-2">
              <div class="entry-thumb"><a href="shop-single.html"><img src="{{ url('lib/unishop3/dist/img/shop/widget/08.jpg') }}" alt="Product"></a></div>
              <div class="entry-content">
                <h4 class="entry-title"><a href="shop-single.html">Samsung Gear 360 VR Camera</a></h4><span class="entry-meta">$68.00</span>
              </div>
            </div>
            <!-- Entry-->
            <div class="entry">
              <div class="entry-thumb"><a href="shop-single.html"><img src="{{ url('lib/unishop3/dist/img/shop/widget/09.jpg') }}" alt="Product"></a></div>
              <div class="entry-content">
                <h4 class="entry-title"><a href="shop-single.html">Samsung Galaxy S9+ 64 GB</a></h4><span class="entry-meta">$839.99</span>
              </div>
            </div>
            <!-- Entry-->
            <div class="entry">
              <div class="entry-thumb"><a href="shop-single.html"><img src="{{ url('lib/unishop3/dist/img/shop/widget/10.jpg') }}" alt="Product"></a></div>
              <div class="entry-content">
                <h4 class="entry-title"><a href="shop-single.html">Zeus Bluetooth Headphones</a></h4><span class="entry-meta">$28.99</span>
              </div>
            </div><a class="btn btn-outline-secondary btn-sm mb-0" href="{{ url('shop') }}">View More</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Popular Brands Carousel-->
    <section class="bg-secondary padding-top-3x padding-bottom-3x">
      <div class="container">
        <h2 class="h3 text-center mb-30 pb-3">Popular Brands</h2>
        <div class="owl-carousel" data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: false, &quot;loop&quot;: true, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 4000, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:2}, &quot;470&quot;:{&quot;items&quot;:3},&quot;630&quot;:{&quot;items&quot;:4},&quot;991&quot;:{&quot;items&quot;:5},&quot;1200&quot;:{&quot;items&quot;:6}} }">
          <img class="d-block w-110 opacity-75 m-auto" src="{{ url('lib/unishop3/dist/img/brands/01.png') }}" alt="IBM"><img class="d-block w-110 opacity-75 m-auto" src="{{ url('lib/unishop3/dist/img/brands/02.png') }}" alt="Sony"><img class="d-block w-110 opacity-75 m-auto" src="{{ url('lib/unishop3/dist/img/brands/03.png') }}" alt="HP"><img class="d-block w-110 opacity-75 m-auto" src="{{ url('lib/unishop3/dist/img/brands/04.png') }}" alt="Canon"><img class="d-block w-110 opacity-75 m-auto" src="{{ url('lib/unishop3/dist/img/brands/05.png') }}" alt="Bosh"><img class="d-block w-110 opacity-75 m-auto" src="{{ url('lib/unishop3/dist/img/brands/06.png') }}" alt="Dell"><img class="d-block w-110 opacity-75 m-auto" src="{{ url('lib/unishop3/dist/img/brands/07.png') }}" alt="Samsung">
        </div>
      </div>
    </section>
    @endsection