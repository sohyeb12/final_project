@extends('layouts.admin')
@section('sohyeb')

<div class="content-wrapper">
        <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>All Sent Message</h3>
            </div>
        </div>

        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <th>email</th>
                <th>phone Number</th>
                <th>subject</th>
                <th>message</th>
            </tr>
            @foreach($contact as $var)
            <tr>
                <td>{{$var->name}}</td>
                <td>{{$var->email}}</td>
                <td>{{$var->phone_number}} </td>
                <td>{{$var->subject}}</td>
                <td>{{$var->message}}</td>
            </tr>
            @endforeach
        </table>
    </div>

@endsection('sohyeb')
