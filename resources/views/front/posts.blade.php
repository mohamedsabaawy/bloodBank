@extends('front.master')
@section('content')
    <div class="container">
        <!--Breadcrumb-->
        <nav class="my-5" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">الرئيسيه</a></li>
                <li class="breadcrumb-item active" aria-current="page">طلبات التبرع</li>
            </ol>
        </nav>
    </div><!--End container-->
    <!--Donation-->
    <section class="donation">
        <h2 class="text-center"><span class="py-1">طلبات التبرع</span> </h2>
        <hr />
        <div class="donation-request py-5">
            <div class="container">
                <div class="selection w-75 d-flex mx-auto my-4">
                    <select class="custom-select">
                        <option selected>اختر فصيلة الدم</option>
                        <option value="+AB">+AB</option>
                        <option value="O-">O-</option>
                        <option value="A+">A+</option>
                        <option value="B+">B+</option>
                    </select>
                    <select class="custom-select mx-md-3 mx-sm-1">
                        <option selected>اختر المدينة</option>
                        <option value="القاهرة">القاهرة</option>
                        <option value="الجيزة">الجيزة</option>
                        <option value="القليوبيه">القليوبيه</option>
                        <option value="سوهاج">سوهاج</option>
                    </select>
                    <div><i class="fas fa-search"></i></div>
                </div>
                <!--End selection-->
                <div class="req-item my-3">
                    <div class="row">
                        <div class="col-md-9 col-sm-12 clearfix">
                            <div class="blood-type m-1 float-right">
                                <h3>+AB</h3>
                            </div>
                            <div class="mx-3 float-right pt-md-2">
                                <p>
                                    اسم الحالة : محمد مجمود
                                </p>
                                <p>
                                    مستشفى : القصر العينى
                                </p>
                                <p>
                                    المدينة : المنصورة
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12 text-center p-sm-3 pt-md-5">
                            <a href="Status-detailes.html" class="btn btn-light px-5 py-3">التفاصيل</a>
                        </div>
                    </div>
                </div>
                <div class="req-item my-3">
                    <div class="row">
                        <div class="col-md-9 col-sm-12 clearfix">
                            <div class="blood-type m-1 float-right">
                                <h3>+AB</h3>
                            </div>
                            <div class="mx-3 float-right pt-md-2">
                                <p>
                                    اسم الحالة : محمد مجمود
                                </p>
                                <p>
                                    مستشفى : القصر العينى
                                </p>
                                <p>
                                    المدينة : المنصورة
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12 text-center p-sm-3 pt-md-5">
                            <a href="Status-detailes.html" class="btn btn-light px-5 py-3">التفاصيل</a>
                        </div>
                    </div>
                </div>
                <div class="req-item my-3">
                    <div class="row">
                        <div class="col-md-9 col-sm-12 clearfix">
                            <div class="blood-type m-1 float-right">
                                <h3>+AB</h3>
                            </div>
                            <div class="mx-3 float-right pt-md-2">
                                <p>
                                    اسم الحالة : محمد مجمود
                                </p>
                                <p>
                                    مستشفى : القصر العينى
                                </p>
                                <p>
                                    المدينة : المنصورة
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12 text-center p-sm-3 pt-md-5">
                            <a href="Status-detailes.html" class="btn btn-light px-5 py-3">التفاصيل</a>
                        </div>
                    </div>
                </div>
                <div class="req-item my-3">
                    <div class="row">
                        <div class="col-md-9 col-sm-12 clearfix">
                            <div class="blood-type m-1 float-right">
                                <h3>+AB</h3>
                            </div>
                            <div class="mx-3 float-right pt-md-2">
                                <p>
                                    اسم الحالة : محمد مجمود
                                </p>
                                <p>
                                    مستشفى : القصر العينى
                                </p>
                                <p>
                                    المدينة : المنصورة
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12 text-md-center p-sm-3 pt-md-5">
                            <a href="Status-detailes.html" class="btn btn-light ml-md-3 px-5 py-3">التفاصيل</a>
                        </div>
                    </div>
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center my-3">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!--End container-->
        </div>
        <!--End Donation-request-->
    </section>
    <!--End Donation-->
    @stop