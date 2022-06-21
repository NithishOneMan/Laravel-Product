@extends('products.layout')
@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Products</div>
                <div class="card-body">
                    <a href="{{ url('/products/create') }}" class="btn btn-success btn-sm" title="Add New Contact">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add products
                    </a>
                    <br />
                    <br />
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="col-md-1">id</th>
                                    <th class="col-md-1">product_name</th>
                                    <th class="col-md-1">product_price</th>
                                    <th class="col-md-3">product_discription</th>
                                    <th class="col-md-2 ">product_image</th>
                                    <th class="col-md-2" style="padding-left: 55px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->product_name }}</td>
                                    <td>{{ $item->product_price }}</td>
                                    <td>{{ $item->product_discription }}</td>
                                    <td> @if($item->product_image)
                                        <img src="{{asset($item->product_image)}}" height="100" width="100">
                                        @endif
                                    </td>

                                    <td style="display: flex;justify-content: space-between;padding-right: 30px;">
                                        <a href="{{ url('/products/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                        <a href="{{ url('/products/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                        <form method="POST" action="{{ url('/products' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete product" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection