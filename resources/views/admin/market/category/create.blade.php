@extends('admin.layouts.master')

@section('head-tag')
    <title>صفحه ایجاد دسته بندی</title>
@endsection

@section('content')


    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"><a href="#">خانه</a> </li>
            <li class="breadcrumb-item font-size-12"><a href="#"> بخش فروش</a> </li>
            <li class="breadcrumb-item font-size-12"><a href="#">دسته بندی</a> </li>
            <li class="breadcrumb-item font-size-12  active" aria-current="page">صفحه ایجاد دسته بندی</li>
        </ol>
    </nav>


    <section class="row">

        <section class="col-12">

            <section class="main-body-container">

                <section class="main-body-container-header">
                    <h6>ایجاد دسته بندی</h6>
                </section >
                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2 ">
                    <a href="{{ route('admin.market.category.index') }}" class="btn btn-info btn-sm">بازگشت</a>

                </section>

                <section>

                    <form action="#">
                        <section class="row">

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                     <label for="">نام دسته</label>
                                    <input class="form-control form-control-sm" type="text">
                                </div>
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">دسته والد</label>
                                    <select class="form-control form-control-sm" name="" id="">
                                        <option value="">دسته را انتخاب کنید</option>
                                        <option value="">وسایل الکترونیکی</option>
                                    </select>
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
