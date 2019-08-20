@extends('master')

@section('main_content')
    <div class="row">
      <div class="col-8">
          <h1>{{ $product['ptitle'] }}</h1>
        <p><img width="400" src="{{ asset('images/' . $product['pimage']) }}"
        alt="{{ $product['ptitle'] }} product image"></p>
        <p>{!! $product['particle'] !!}</p>
        <p><b>Price on site: </b>${{ $product['price'] }}</p>
        <p>
        @if( ! Cart::get($product['id']) )
        <button data-pid="{{ $product['id'] }}" class="btn btn-success add-to-cart-btn">
        <i class="fas fa-cart-plus"></i> ADD TO CART</button>
        @else
        <button disabled="disabled" class="btn btn-success add-to-cart-btn">In Cart!</button>
        @endif
        <a href="{{ url('shop/cart') }}" class="btn btn-primary"><i class="far fa-eye">
        </i>Go to cart</a> 
        </p>
      </div>
    </div>
    @endsection