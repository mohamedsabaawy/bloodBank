@extends('layouts.app')
@section('title','Add new role')
@section('page')
    <a href="{{url(route('role.index'))}}">Role</a>
@endsection
@section('content')

    <form role="form" action="{{url(route('role.store'))}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Role name</label>
                {!! Form::text('name',null,[
                    'class'=>'form-control'
                ]) !!}
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">guard name</label>
                {!! Form::text('guard_name',null,[
                    'class'=>'form-control'
                ]) !!}
            </div>
            <div class="col-5">
                @foreach($perm as $permission)
                    <input type="checkbox" value="{{$permission->id}}" name="permissions[]">{{$permission->name}}
                @endforeach
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