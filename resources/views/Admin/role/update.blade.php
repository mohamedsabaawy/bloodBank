@extends('layouts.app')
@section('title','Update')
@section('page')
    <a href="{{url(route('role.index'))}}">Role</a>
@endsection
@section('content')

    <form role="form" action="{{url(route('role.update',$role->id))}}" method="post">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Role name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name of Blood Type" name="name" value="{{$role->name}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Permission</label><br />
                @foreach($permission as $p)
                    <input type="checkbox"  name="permissions[]" value="{{$p->id}}"
                       @foreach($role->getPermissionNames() as $per)
                            @if($per == $p->name)
                                checked
                            @endif
                        @endforeach>{{$p->name}}
                @endforeach
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>

@endsection