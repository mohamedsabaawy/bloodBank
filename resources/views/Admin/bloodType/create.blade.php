@extends('layouts.app')
@section('title','Add new blood type')
@section('page')
    <a href="{{url(route('bloodType.index'))}}">Cities</a>
@endsection
@section('content')

    <form role="form" action="{{url(route('bloodType.store'))}}" method="post">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Blood type name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name of Blood type" name="name">

            </div>
            @error('name')
            <small class="alert alert-danger">{{$message}}</small>
            @enderror
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
    </form>

@endsection