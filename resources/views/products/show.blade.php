@extends('products.layout')
@section('content')


<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
    <div class="card-body">
      <h5 class="card-text card-distance">product_name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $products->product_name  }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
      <h5 class="card-text">product_price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $products->product_price }}</h5>
      <h5 class="card-text">product_discription&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $products->product_discription }}</h5>
      <h5 class="card-text">product_image&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :
        @if($products->product_image)
        
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="{{asset($products->product_image)}}" height="200" width="200">

        @endif</h5>

    </div>

    </hr>

  </div>
</div>