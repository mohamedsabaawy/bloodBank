@extends('layouts.app')
@section('title','All of Clients')
@section('page')
    <a href="{{url(route('client.index'))}}">Clients</a>
    @endsection
@section('content')

    <div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable dtr-inline collapsed" role="grid" aria-describedby="example2_info">
{{--            <a class="btn btn-primary" href="{{(route('client.create'))}}"><i class="fa fa-plus"></i> Add new client </a>--}}
            <thead>
            <tr role="row">
                <th class="sorting_asc" tabindex="0">#</th>
                <th class="sorting" tabindex="0" >Name</th>
                <th class="sorting" tabindex="0" >E-mail</th>
                <th class="sorting" tabindex="0" >Phone</th>
                <th class="sorting" tabindex="0" >BirthDate</th>
                <th class="sorting" tabindex="0" >Blood type</th>
                <th class="sorting" tabindex="0" >City name</th>
{{--                <th class="sorting text-center" tabindex="0">Edit</th>--}}
                <th class="sorting text-center" tabindex="0">Delete</th>
            </thead>
            <tbody>
            @foreach($clients as $go)
                <tr role="row" class="odd">
                    <td class="sorting_1" tabindex="0">{{$go->id}}</td>
                    <td class="">{{$go->name}}</td>
                    <td class="">{{$go->email}}</td>
                    <td class="">{{$go->phone}}</td>
                    <td class="">{{$go->birth_date}}</td>
                    <td class="">{{$go->bloodType->name}}</td>
                    <td class="">{{$go->city->name}}</td>
{{--                    <td class="text-center">--}}
{{--                        <a href="{{url(route('client.edit',$go->id))}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>--}}
{{--                    </td>--}}
                    <td class="text-center">
                        <form action="{{url(route('client.destroy',$go->id))}}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        </form>

                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>
    </div>

    @endsection