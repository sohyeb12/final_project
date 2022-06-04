@extends('layouts.admin')
@section('sohyeb')
<div class="content-wrapper">
<form method="POST" action="{{url('/replay_act/'. $contacts->id)}}" >
                        @csrf
        <div class="form-group">
        {{$contacts->message}}
        </div>
        <div class="form-group">
            <label for="replay">الرد : </label>
            <input type="text" class="form-control" name="replay" />
        </div>
        <!-- <input type="text" class="form-control" name="replay" /> -->
        <button type="submit" class="btn btn-primary">Replay</button>
</form>
</div>
@endsection('sohyeb')