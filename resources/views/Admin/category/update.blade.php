@extends('layouts.app')
@section('title','Update')
@section('page')
    <a href="{{url(route('category.index'))}}">Category</a>
@endsection
@section('content')

    <form role="form" action="{{url(route('category.update',$category->id))}}" method="post">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Category name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name of Blood Type" name="name" value="{{$category->name}}">
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>

@endsection