@extends('layouts.app')
@section('title','Add new user')
@section('page')
    <a href="{{url(route('user.index'))}}">User</a>
@endsection
@section('content')

    <form role="form" action="{{url(route('user.store'))}}" method="post">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">User name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name of User" name="name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">User Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email of User" name="email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">User password</label>
                <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Password of User" name="password">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Role</label><br />
                @foreach($role as $r)
                    <input type="checkbox" value="{{$r->id}}" name="role">{{$r->name}}
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