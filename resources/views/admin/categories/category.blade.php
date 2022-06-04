@extends('layouts.admin')
@section('sohyeb')

<div class="content-wrapper">
        <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Categories</h3>
            </div>
        </div>

        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>details</th>
                <th width="280px">Actions</th>
            </tr>
            @foreach($categories as $key => $category)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->details}}</td>
                <td>
                <!-- {{url('admin/products/delete/'. $category->id)}} -->
                    <a class="btn btn-info" href="{{url('admin/categories/update/'. $category->id)}}">Edit</a>

                    <a class="btn btn-danger" href="{{url('admin/categories/delete/'. $category->id)}}">Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>

@endsection('sohyeb')