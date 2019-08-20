@extends('master')
@section('main_content')
<style>
.pagination {
    display: inline-block;
  }
  
  .pagination li{
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
  }

  ul {
    list-style-type: none;
    margin-top: 0;
    margin-bottom: 20px;
    /* position: relative; */
    line-height: 1.8;
    top: 50%;
    left: 50%

}

</style>
    <!-- Page Title-->
    <div class="page-title">
      <div class="container">
        <div class="column">
          <h1>{{ $products[0]->cname }}</h1>
        </div>
        <div class="column">
          <ul class="breadcrumbs">
            <li><a href="{{ url('') }}">Home</a>
            </li>
            <li class="separator">&nbsp;</li>
            <li>Products</li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Page Content-->
      <hr>

      @if($products)
<div class="short-by- f-right text-center">
    <span>Sort Price</span>
    <a href="{{url('shop/'  .$curl . '?price=up')}}" class='btn btn-link'>From High to Low</a>|
<a href="{{url('shop/'  .$curl . '?price=down')}}" class='btn btn-link' style='color:purple;'>From Low to High</a>
</div>
@endif
  <div class="row">
  @foreach($products as $product)
  <div class="col-md-6">
    <h3>{{ $product->ptitle }}</h3>
    <p> <img width="150" src="{{ asset('images/' . $product->pimage) }}" alt="{{ $product->ptitle }} product image"> </p>
    <p>{!! $product->particle !!}</p>

    <p><b>Price on site:</b>${{ $product->price }}</p>
    <p>
    
      @if ( ! Cart::get($product->id) )
      <button data-pid="{{ $product->id }}" class="btn btn-success add-to-cart-btn">
        <i class="fas fa-cart-plus"></i> ADD TO CART</button>
      @else
      <button disabled="disabled" class="btn btn-success add-to-cart-btn">In Cart!</button>
      @endif
    <a href="{{ url('shop/' . $curl . '/' . $product->purl) }}" class="btn btn-primary">
    <i class="far fa-eye"></i>View Details</a>
    </p>
  </div>
  @endforeach
  </div>    
  <div class="row">
  <div class="col-12">
    {{ $products->links() }}
  </div>
</div>
  
  
@endsection