@extends('layouts.app')
@section('title','Add new post')
@section('page')
    <a href="{{url(route('post.index'))}}">Post</a>
@endsection
@section('content')

    <form role="form" action="{{url(route('post.store'))}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">title</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="title of Post" name="title">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">description</label>
                <textarea class="form-control" id="exampleInputEmail1" placeholder="description" name="description"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Image</label>
                <input type="file" class="form-control" id="exampleInputEmail1" name="image">
            </div>
            <div class="form-group">
                <select name="category_id">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
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