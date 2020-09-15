@extends('layouts.app')
@section('title','All of Posts')
@section('page')
    <a href="{{url(route('post.index'))}}">Posts</a>
    @endsection
@section('content')

    <div class="col-sm-12">
        <a class="btn btn-primary" href="{{(route('post.create'))}}"><i class="fa fa-plus"></i> Add new post </a>

        @if(count($posts)>0)

            <table id="example2" class="table table-bordered table-hover dataTable dtr-inline collapsed" role="grid" aria-describedby="example2_info">
                    <thead>
                    <tr role="row">
                        <th class="sorting_asc" tabindex="0">#</th>
                        <th class="sorting_asc" tabindex="0">Image</th>
                        <th class="sorting" tabindex="0" >Title</th>
                        <th class="sorting" tabindex="0" >Content</th>
                        <th class="sorting" tabindex="0" >Category</th>
                        <th class="sorting text-center" tabindex="0">Edit</th>
                        <th class="sorting text-center" tabindex="0">Delete</th>
                    </thead>
                    <tbody>
                    @foreach($posts as $go)
                        <tr role="row" class="odd">
                            <td class="sorting_1" tabindex="0">{{$go->id}}</td>
                            <td class="" ><img height="60px" width="60px" src="{{asset('storage/'.$go->image)}}" alt=""></td>
                            <td class="" >{{$go->title}}</td>
                            <td class="" >{{$go->description}}</td>
                            <td class="" >{{$go->Category->name}}</td>
                            <td class="text-center">
                                <a href="{{url(route('post.edit',$go->id))}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                            </td>
                            <td class="text-center">
                                <form action="{{url(route('post.destroy',$go->id))}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                </form>

                            </td>
                        </tr>

                    @endforeach
                    </tbody>
            </table>
        @else
            <h1 class="text-center mt-5">Sorry no posts</h1>
        @endif
    </div>

    @endsection