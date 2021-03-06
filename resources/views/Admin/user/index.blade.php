@extends('layouts.app')
@section('title','All of Users')
@section('page')
    <a href="{{url(route('user.index'))}}">Users</a>
    @endsection
@section('content')

    <div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable dtr-inline collapsed" role="grid" aria-describedby="example2_info">
            <a class="btn btn-primary" href="{{(route('user.create'))}}"><i class="fa fa-plus"></i> Add new user </a>
            <thead>
            <tr role="row">
                <th class="sorting_asc" tabindex="0">#</th>
                <th class="sorting" tabindex="0" >Name</th>
                <th class="sorting" tabindex="0" >Email</th>
                <th class="sorting" tabindex="0" >Role</th>
                @can('edit user')
                    <th class="sorting text-center" tabindex="0">Edit</th>
                @endcan
                <th class="sorting text-center" tabindex="0">Delete</th>
            </thead>
            <tbody>
            @foreach($user as $go)
                <tr role="row" class="odd">
                    <td class="sorting_1" tabindex="0">{{$go->id}}</td>
                    <td class="">{{$go->name}}</td>
                    <td class="">{{$go->email}}</td>
                    <td class="">
                        @foreach($go->getRoleNames() as $role)
                            <span class="badge bg-blue">{{$role}}</span>
                        @endforeach
                    </td>
                    @can('edit user')
                        <td class="text-center">
                            <a href="{{url(route('user.edit',$go->id))}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                        </td>
                    @endcan
                    <td class="text-center">
                        <form action="{{url(route('user.destroy',$go->id))}}" method="post">
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