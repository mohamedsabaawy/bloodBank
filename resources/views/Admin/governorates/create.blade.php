@extends('layouts.app')
@section('title','Add new Governorates')
@section('page')
    <a href="{{url(route('governorate.index'))}}">Governorates</a>
@endsection
@section('content')

    <form role="form" action="{{url(route('governorate.store'))}}" method="post">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Governorate name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name of Governorate" name="name">
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
    </form>

@endsection