@extends('master')

@section('main_content')
  
  <body>
    <!-- Page Content-->
    <section class="fw-section margin-top-3x" style="background-image: {{ url('lib/unishop3/dist/img/404-bg.png') }};">
      <h1 class="display-404 text-center">500</h1> <!-- chang it to dislpay 500 -->
    </section>
    <div class="container padding-bottom-3x mb-1">
      <div class="text-center">
        <h2>Page Not Found</h2>
        <p>It seems we can’t find the page you are looking for. <a href="{{ url('') }}">Go back to Homepage</a><br>Or try using search at the top right corner of the page.</p>
      </div>
    </div>
    <!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="icon-chevron-up"></i></a>
    <!-- Backdrop-->
    <div class="site-backdrop"></div>
    <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
    <script src="{{ url('lib/unishop3/dist/js/vendor.min.js') }}"></script>
    <script src="{{ url('lib/unishop3/dist/js/scripts.min.js') }} "></script>
  </body>
@endsection