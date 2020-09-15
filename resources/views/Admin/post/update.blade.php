@extends('layouts.app')
@section('title','Update')
@section('page')
    <a href="{{url(route('post.index'))}}">Post</a>
@endsection
@section('content')

    <form role="form" action="{{url(route('post.update',$post->id))}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
                {{ Form::label('Post title', null, ['class' => 'control-label']) }}
                {{ Form::text('title', $post->title, array_merge(['class' => 'form-control'])) }}
            </div>
            <div class="form-group">
                {{ Form::label('description', null, ['class' => 'control-label']) }}
                {{ Form::textarea('description', $post->description, array_merge(['class' => 'form-control'])) }}
            </div>
            <label >old image</label><br />
            <img src="{{asset('storage/'.$post->image)}}" width="100px" height="100px" alt="">
            <div class="form-group">
                {{ Form::label('image', null, ['class' => 'control-label']) }}
                {{ Form::file('image',null, array_merge(['class' => 'form-control'])) }}
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>

@endsection