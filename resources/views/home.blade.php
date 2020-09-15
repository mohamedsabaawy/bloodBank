@extends('layouts.app')
@inject('client','App\Models\Client')
@section('title','Home')
@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Messages</span>
                    <span class="info-box-number">1,410</span>
                </div>
                <!-- /.info-box -->
            </div>

        </div>
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="far fa-user"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Client</span>
                    <span class="info-box-number">{{$client->count()}}</span>
                </div>
                <!-- /.info-box -->
            </div>

        </div>
    </div>
</div>
@endsection
