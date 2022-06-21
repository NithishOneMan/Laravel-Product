@extends('products.layout')
@section('content')

<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">

    <form action="{{ url('products/'.$products->id) }}" method="post" enctype="multipart/form-data">
      {!! csrf_field() !!}
      @method("PATCH")
      <input type="hidden" name="id" id="id" value="{{$products->id}}" />
      <label>product_name</label></br>
      <input type="text" name="product_name" id="name" value="{{$products->product_name}}" class="form-control"></br>
      <label>product_price</label></br>
      <input type="text" name="product_price" id="address" value="{{$products->product_price}}" class="form-control"></br>
      <label>product_discription</label></br>
      <input type="text" name="product_discription" id="mobile" value="{{$products->product_discription}}" class="form-control"></br>
      <label>product_image</label></br>
      <input type="file" name="product_image" value="{{$products->product_image}}" class="form-control" multiple/></br>
      <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop