@extends('admin.layouts.master')

@section('head-tag')
    <title>صفحه ایجاد اطلاعیه پیامکی</title>
@endsection

@section('content')


    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"><a href="#">خانه</a> </li>
            <li class="breadcrumb-item font-size-12"><a href="#"> اطلاع رسانی</a> </li>
            <li class="breadcrumb-item font-size-12"><a href="#">اعلامیه پیامکی</a> </li>
            <li class="breadcrumb-item font-size-12  active" aria-current="page">صفحه ایجاد اطلاعیه پیامکی</li>
        </ol>
    </nav>


    <section class="row">

        <section class="col-12">

            <section class="main-body-container">

                <section class="main-body-container-header">
                    <h6>ایجاد اطلاعیه پیامکی</h6>
                </section >
                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2 ">
                    <a href="{{ route('admin.notify.sms.index') }}" class="btn btn-info btn-sm">بازگشت</a>

                </section>

                <section>

                    <form action="#">
                        <section class="row">

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                     <label for="">عنوان ایمیل</label>
                                    <input class="form-control form-control-sm" type="text">
                                </div>
                            </section>

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">تاریخ انتشار</label>
                                    <input class="form-control form-control-sm" type="text">
                                </div>
                            </section>

                            <section class="col-12 ">
                                <div class="form-group">
                                    <label for="">عنوان پیامک</label>
                                    <input type="text" class="form-control form-control-sm">
                                </div>
                            </section>




                            <section class="col-12 col-md-6">
                                <button class="btn btn-primary btn-sm">ثبت</button>
                            </section>
                        </section>
                    </form>

                </section>

            </section>

        </section>

@endsection

        @section('script')

            <script src="{{ asset('admin-assets/ckeditor/ckeditor.js') }}"></script>

            <script>
                CKEDITOR.replace('body');
            </script>

@endsection
