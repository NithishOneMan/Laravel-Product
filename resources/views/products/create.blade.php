@extends('products.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Product Page</div>
  <div class="card-body">
      
      <form action="{{ url('products') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <label>product_name</label></br>
        <input type="text" name="product_name" class="form-control"></br>
        <label>product_price</label></br>
        <input type="text" name="product_price" class="form-control"></br>
        <label>product_discription</label></br>
        <input type="text" name="product_discription" class="form-control"></br>
        <label>product_image</label></br>
        <input type="file" name="product_image" class="form-control" multiple></br> 
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop