@extends('master')

@section('main_content')
<style>
.text-gray-dark {
    color: #232323 !important;
    float: left;
}

</style>

<div class="search-box-wrap d-flex">
  <div class="search-box-inner align-self-center">
    <div class="search-box d-flex">
      <div class="btn-group categories-btn">
        <div class="dropdown-menu mega-dropdown">
            @if ( $categories )
            @foreach($categories as $category)
            <div class="col-xs-6">  
                    <h3 >{{ $category['cname'] }}</h3>
                    <a class="d-block navi-link text-center mb-20" href="{{ url('shop/' . $category['curl']) }}">
                    <img class="d-block"  src="{{ asset('images/' . $category['cimage']) }}"  alt="category image">
                    <span class="text-gray-dark">{{ $category['cname'] }}</span></a>
                <br>
                    <p style= "float:left">{!! $category['cdescription'] !!}</p>  
                    
                   <p><a href="{{ url('shop/' . $category['curl']) }}" class="btn btn-primary">View products</a></p>
                   </div>
                 </div>
                </div>
              </div>
        @endforeach
                @else
                <div class="col-12">
                <p><i>No products selected...</i></p>
                </div>
          @endif
    </div>
  </div>
</div>

@endsection