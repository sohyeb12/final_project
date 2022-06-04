@extends('layouts.admin')
@section('sohyeb')

<div class="content-wrapper">
        <style>
            .uper {
                margin-top: 40px;
            }
        </style>
        <div class="card uper">
            <div class="card-header">
                Update Product
            </div>
            <div class="card-body">
                <form method="POST" action="{{url('admin/products/updateact/'. $product->id)}}" enctype="multipart/form-data">
                     @method('PUT')
                    <div class="form-group">
                        <label for="name">Product Name:</label>
                        @csrf<input type="text" class="form-control" name="product_n" value="{{$product->name}}"/>
                    </div>

                    <div class="form-group">
                        <label for="details">Product description :</label>
                        <input type="text" class="form-control" name="product_d" value="{{$product->details}}"/>
                    </div>

                    <div class="form-group">
                        <label for="price">Product Price :</label>
                        <input type="text" class="form-control" name="product_pr" value="{{$product->price}}"/>
                    </div>
                    <div class="form-group">
                        <label for="quantity">Product Quantity:</label>
                        <input type="text" class="form-control" name="product_q" value="{{$product->quantity}}"/>
                    </div>

                    <div class="form-group">
                        <label for="image">Product image : </label>
                        <input type="file" class="form-control" name="product_image" value="{{$product->image}}"/>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
    <script src="js/app.js" type="text/js"></script>


@endsection('sohyeb')
