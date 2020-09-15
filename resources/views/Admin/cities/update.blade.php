@extends('layouts.app')
@section('title','Update')
@section('page')
    <a href="{{url(route('city.index'))}}">City</a>
@endsection
@section('content')

    <form role="form" action="{{url(route('city.update',$city->id))}}" method="post">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">City name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name of Governorate" name="name" value="{{$city->name}}">
            </div>

            <div class="form-group">
                <label>Select</label>
{{--                <select class="form-control" name="governorate_id">--}}
{{--                    @foreach($governorates as $gov)--}}
{{--                        <option value="{{$gov->id}}">{{$gov->name}}</option>--}}
{{--                    @endforeach--}}
{{--                </select>--}}
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>

@endsection