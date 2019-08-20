@extends('master')
@section('main_content')
    <!-- Page Content--> 
  <div class="row">
    @foreach($contents as $content)
    <div class="col-12">
      <h3> {{ $content->ctitle }} </h3>
      <p>{!! $content->carticle !!}</p>
    </div>
    @endforeach
  </div>

    <!-- Services-->
    <section class="container padding-top-3x padding-bottom-2x">
      <div class="row">
        <div class="col-md-3 col-sm-6 text-center mb-30"><img class="d-block w-90 img-thumbnail rounded mx-auto mb-4" src=" {{ url('lib/unishop3/dist/img/services/01.png') }}" alt="Shipping">
          <h6 class="mb-2">Free Worldwide Shipping</h6>
          <p class="text-sm text-muted mb-0">Free shipping for all orders over $100</p>
        </div>
        <div class="col-md-3 col-sm-6 text-center mb-30"><img class="d-block w-90 img-thumbnail rounded mx-auto mb-4" src=" {{ url('lib/unishop3/dist/img/services/02.png') }}" alt="Money Back">
          <h6 class="mb-2">Money Back Guarantee</h6>
          <p class="text-sm text-muted mb-0">We return money within 30 days</p>
        </div>
        <div class="col-md-3 col-sm-6 text-center mb-30"><img class="d-block w-90 img-thumbnail rounded mx-auto mb-4" src=" {{ url('lib/unishop3/dist/img/services/03.png') }}" alt="Support">
          <h6 class="mb-2">24/7 Customer Support</h6>
          <p class="text-sm text-muted mb-0">Friendly 24/7 customer support</p>
        </div>
        <div class="col-md-3 col-sm-6 text-center mb-30"><img class="d-block w-90 img-thumbnail rounded mx-auto mb-4" src=" {{ url('lib/unishop3/dist/img/services/04.png') }}" alt="Payment">
          <h6 class="mb-2">Secure Online Payment</h6>
          <p class="text-sm text-muted mb-0">We posess SSL / Secure Certificate</p>
        </div>
      </div>
    </section>
    @endsection