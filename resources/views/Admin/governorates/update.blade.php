@extends('layouts.app')
@section('title','Update')
@section('page')
    <a href="{{url(route('governorate.index'))}}">Governorates</a>
@endsection
@section('content')

    <form role="form" action="{{url(route('governorate.update',$governorate->id))}}" method="post">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Governorate name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name of Governorate" name="name" value="{{$governorate->name}}">
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>

@endsection