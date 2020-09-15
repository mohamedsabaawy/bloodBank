@extends('layouts.app')
@section('title','Update')
@section('page')
    <a href="{{url(route('user.index'))}}">User</a>
@endsection
@section('content')

    <form role="form" action="{{url(route('user.update',$user->id))}}" method="post">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">User name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{$user->name}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">User Email</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="email" value="{{$user->email}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">User Role</label><br />
                <select name="role">
                    @foreach($role as $ro)
                        <option value="{{$ro->id}}" >{{$ro->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>

@endsection