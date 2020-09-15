@extends('front.master')
@section('content')
    <div class="container">
        <!--Breadcrumb-->
        <nav class="my-4" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('front_home')}}">الرئيسيه</a></li>
                <li class="breadcrumb-item active" aria-current="page">انشاء حساب جديد</li>
            </ol>
        </nav><!--End Breadcrumb-->
    </div><!--End container-->
    <section class="signup text-center">
        <div class="container">
            <div class="py-4 mb-4">
                <form action="{{route('client_register')}}" class="w-75 m-auto" method="post">
                    @csrf
                    <div><input type="text" name="name" class="form-control my-3" placeholder="الاسم"></div>
                    <div><input type="mail" name="email" class="form-control my-3" placeholder="البريد الاليكترونى"></div>
                    <div class="input-group mb-3">
                        <input type="date"  id="datepicker" name="birth_date" class="form-control" placeholder="تاريخ الميلاد">
{{--                        <i class="far fa-calendar-alt"></i>--}}
                    </div>
                    <div class="input-group mb-3">
                        <select name="blood_type_id" id="blood-type" class="form-control custom-select-lg">
                            <option>فصيلة الدم</option>
                            @foreach($bloods as $blood)
                                <option value="{{$blood->id}}">{{$blood->name}}</option>
                            @endforeach
                        </select>
{{--                        <i class="fas fa-chevron-down"></i>--}}
                    </div>
{{--                    <input type="text" name="booldType" class="form-control my-3" placeholder="فصيلة الدم">--}}
                    <div class="input-group mb-3">
                        <select name="capital" id="capital" class="form-control custom-select-lg">
                            @foreach($governorates as $governorate)
                                <option value="{{$governorate->id}}">{{$governorate->name}}</option>
                            @endforeach
                        </select>
{{--                        <i class="fas fa-chevron-down"></i>--}}
                    </div>
                    <div class="input-group">
                        <select name="city_id" id="city" class="form-control custom-select-lg">
                            @foreach($cities as $city)
                                <option value="{{$city->id}}">{{$city->name}}</option>
                            @endforeach
                        </select>
{{--                        <i class="fas fa-chevron-down"></i>--}}
                    </div>
                    <input type="text" name="phone" class="form-control my-3" placeholder="رقم الهاتف">
                    <div class="input-group mb-3">
                        <input type="date" id="datepicker" name="last_donation_date" class="form-control" placeholder="اخر تاريخ تبرع" aria-label="Username" aria-describedby="basic-addon1">
{{--                        <i class="far fa-calendar-alt"></i>--}}
                    </div>
                    <input type="password" name="password" class="form-control my-3" placeholder="كلمة المرور">
                    <input type="password" name="password_confirmation" class="form-control my-3" placeholder="تأكيد كلمة المرور">
                    <button type="submit" class="btn btn-success py-2 w-50">ارسال</button>
                </form>
            </div>
        </div>
    </section>
    @stop