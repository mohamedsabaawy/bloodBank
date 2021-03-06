@extends('layouts.app')
@section('title','All of Governorates')
@section('page')
    <a href="{{url(route('governorate.index'))}}">Governorates</a>
    @endsection
@section('content')

    <div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable dtr-inline collapsed" role="grid" aria-describedby="example2_info">
            <a class="btn btn-primary" href="{{(route('governorate.create'))}}"><i class="fa fa-plus"></i> Add new governorate </a>
            <thead>
            <tr role="row">
                <th class="sorting_asc" tabindex="0">#</th>
                <th class="sorting" tabindex="0" >Name</th>
                <th class="sorting text-center" tabindex="0">Edit</th>
                <th class="sorting text-center" tabindex="0">Delete</th>
            </thead>
            <tbody>
            @foreach($governorates as $go)
                <tr role="row" class="odd">
                    <td class="sorting_1" tabindex="0">{{$go->id}}</td>
                    <td class="">{{$go->name}}</td>
                    <td class="text-center">
                        <a href="{{url(route('governorate.edit',$go->id))}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                    </td>
                    <td class="text-center">
                        <form action="{{url(route('governorate.destroy',$go->id))}}" method="post">
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