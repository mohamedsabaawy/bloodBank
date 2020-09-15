@extends('layouts.app')
@section('title','Add new city')
@section('page')
    <a href="{{url(route('city.index'))}}">Cities</a>
@endsection
@section('content')

    <form role="form" action="{{url(route('city.store'))}}" method="post">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">City name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name of City" name="name">
            </div>
                <!-- select -->
                <div class="form-group">
                    <label>Select</label>
                    <select class="form-control" name="governorate_id">
                        @foreach($governorates as $gov)
                            <option value="{{$gov->id}}">{{$gov->name}}</option>
                            @endforeach
                    </select>
                </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
    </form>

@endsection