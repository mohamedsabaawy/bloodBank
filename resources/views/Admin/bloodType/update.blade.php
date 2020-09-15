@extends('layouts.app')
@section('title','Update')
@section('page')
    <a href="{{url(route('bloodType.index'))}}">City</a>
@endsection
@section('content')

    <form role="form" action="{{url(route('bloodType.update',$bloodType->id))}}" method="post">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Blood type name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name of Blood Type" name="name" value="{{$bloodType->name}}">
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>

@endsection