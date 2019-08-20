@extends('master')
@section('main_content')
    <!-- Page Title-->
    <div class="page-title">
      <div class="container">
        <div class="column">
          <h1>Sign up a new account to Unishop sitie!</h1>
        </div>
        <div class="column">
          <ul class="breadcrumbs">
            <li><a href="{{ url('') }}">Home</a>
            </li>
            <li class="separator">&nbsp;</li>
            <li>User</li>
            <li class="separator">&nbsp;</li>
            <li><a href="{{ ('signin') }}">Sign Up</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Page Content-->
    <div class="row">
      <div class="col-md-5">
      @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
      @endif
        <form action="" method="POST" novalidate="novalidate" autocomplate="off">
          @csrf()
          <div class="form-group">
            <label for="name">Name:</label>
            <input value="{{ old('name') }}" type="name" name="name" id="name" class="form-control">
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input value="{{ old('email') }}" type="email" name="email" id="email" class="form-control">
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" class="form-control">
          </div>
          <div class="form-group">
            <label for="password-confirmation">Confirm Password:</label>
            <input type="password" name="password_confirmation" id="password-confirmation" class="form-control">
          </div>
            <input type="submit" value="signup" name="signin" class="btn btn-primary">
        </form>
      </div>
    </div>

    <!-- END OF FORM -->

    <!-- Template  extras BEGIN HERE -->
    <div class="container padding-bottom-2x mb-2">
      <div class="row align-items-center padding-top-2x padding-bottom-2x">
        <!-- <div class="col-md-5"><img class="d-block m-auto img-thumbnail" src="{{ url('lib/unishop3/dist/img/banners/about-03.jpg') }}" alt="Mobile App"></div> -->
        <div class="col-md-12">
          <div class="mt-30 hidden-md-up"></div>
          <h2 class="text-center">Great Mobile App. Shop On The Go.</h2>
          <p class="text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam id purus at risus pellentesque faucibus a quis eros. In eu fermentum leo. Integer ut eros lacus. Proin ut accumsan leo. Morbi vitae est eget dolor consequat aliquam eget quis dolor.</p>
          <div class="text-center"><a class="market-button apple-button" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">App Store</span></a><a class="market-button google-button" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">Google Play</span></a><a class="market-button windows-button" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">Windows Store</span></a></div>
        </div>
      </div>
    </div>
        <!-- Template  extras END HERE -->

@endsection