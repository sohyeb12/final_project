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
                <form method="POST" action="{{url('admin/categories/updateact/'. $category->id)}}" >
                     @method('PUT')
                    <div class="form-group">
                        <label for="name">Category Name:</label>
                        @csrf<input type="text" class="form-control" name="category_n" value="{{$category->name}}"/>
                    </div>

                    <div class="form-group">
                        <label for="details">Category description :</label>
                        <input type="textarea" class="form-control" name="category_d" value="{{$category->details}}"/>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
    <script src="js/app.js" type="text/js"></script>


@endsection('sohyeb')
