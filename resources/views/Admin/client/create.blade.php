@extends('layouts.app')
@section('title','Add new ')
@section('page')
    <a href="{{url(route('client.index'))}}">Cities</a>
@endsection
@section('content')

    <form role="form" action="{{url(route('client.store'))}}" method="post">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Client name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name of Client" name="name">
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