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
               إضافة فئة
            </div>
            <div class="card-body">
                <form method="post" action="{{url('admin/categories/store')}}" >
                    @csrf
                    <div class="form-group">
                        <label for="name">اسم الفئة :</label>
                        <input type="text" class="form-control" name="category_name" />
                    </div>

                    <div class="form-group">
                        <label for="details">اسم الفئة :</label>
                        <input type="textarea" class="form-control" name="category_details" />
                    </div>

                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>
    <script src="js/app.js" type="text/js"></script>

@endsection('sohyeb')