@extends('master')

@section('main_content')
    <!-- Page Title-->
    <div class="page-title">
      <div class="col-12">
          <h1>Cart</h1>
      </div>
    </div>
    <!-- Page Content-->
    <div class="container padding-bottom-2x mb-2">
      <div class="row align-items-center padding-bottom-2x">
        <div class="col-md-8 text-md-left text-center">
          <div class="mt-30 hidden-md-up"></div>
          <h2>Welcome to your cart.</h2>
          <p class="text-muted">CART Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam id purus at risus pellentesque faucibus a quis eros.</p><a class="text-decoration-none" href="{{ url('shop') }}">View Products&nbsp;<i class="icon-arrow-right d-inline-block align-middle"></i></a>
          @if ($cart)
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Product</th>
                <th class="text-center">Quantity</th>
                <th>Price</th>
                <th>Sub Total</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
            <tr>
                @foreach ($cart as $item)
                <tr>
                 <td>{{ $item['name'] }}</td>
                 <td class="product-quantity text-center">
                  <a href="{{ url('shop/update-cart?pid=' .$item['id'] . '&op=minus') }}">
                  <i class="fas fa-minus"></i></a>
                 <input class="text-center" type="text" size="1" value="{{ $item['quantity'] }}">
                  <a href="{{ url('shop/update-cart?pid=' .$item['id'] . '&op=plus') }}">
                  <i class="fas fa-plus"></i></a>             
                </td>         
                 <td>${{ $item['price'] }}</td>
                 <td>${{ $item['price'] * $item['quantity'] }}</td>
                 <td><a class="text-danger" href="{{ url('shop/delete-item?pid=') . $item['id']}}">Delete Item</a></td>
                </tr>
              </tr>
              @endforeach
            </tbody>
          </table>

          <p>
          <span><b>Total in cart: </b>${{ Cart::getTotal() }}</span>
          <a href="{{ url('shop/cart-clear') }}" class="btn btn-secondary float-right">Clear cart</a>
         
          <a href="{{ url('shop/save-order') }}" class="btn btn-primary">ORDER NOW!</a>
          </p>
          @else
          <p><i>No item is in the cart...</i></p>
          @endif
        </div>
      </div>
    </div>
@endsection