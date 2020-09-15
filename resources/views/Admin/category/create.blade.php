@extends('layouts.app')
@section('title','Add new category')
@section('page')
    <a href="{{url(route('category.index'))}}">Category</a>
@endsection
@section('content')

    <form role="form" action="{{url(route('category.store'))}}" method="post">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Category name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name of Category" name="name">

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