@extends('admin.layouts.master')

@section('head-tag')
    <title>ایجاد محصول جدید</title>
@endsection

@section('content')


    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"><a href="#">خانه</a> </li>
            <li class="breadcrumb-item font-size-12"><a href="#"> بخش فروش</a> </li>
            <li class="breadcrumb-item font-size-12"><a href="#">محصولات</a> </li>
            <li class="breadcrumb-item font-size-12  active" aria-current="page">ایجاد محصول جدید</li>
        </ol>
    </nav>


    <section class="row">

        <section class="col-12">

            <section class="main-body-container">

                <section class="main-body-container-header">
                    <h6>ایجاد محصول جدید</h6>
                </section >
                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2 ">
                    <a href="{{ route('admin.market.product.index') }}" class="btn btn-info btn-sm">بازگشت</a>

                </section>

                <section>

                    <form action="#">
                        <section class="row">

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                     <label for="">نام کالا</label>
                                    <input class="form-control form-control-sm" type="text">
                                </div>
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">دسته کالا</label>
                                    <select class="form-control form-control-sm" name="" id="">
                                        <option value="">دسته را انتخاب کنید</option>
                                        <option value="">وسایل الکترونیکی</option>
                                    </select>
                                </div>
                            </section>

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">فرم کالا</label>
                                    <select class="form-control form-control-sm" name="" id="">
                                        <option value="">دسته را انتخاب کنید</option>
                                        <option value="">وسایل الکترونیکی</option>
                                    </select>
                                </div>
                            </section>

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">تصویر</label>
                                    <input type="file" class="form-control form-control-sm" type="text">
                                </div>
                            </section>

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">وزن</label>
                                    <input class="form-control form-control-sm" type="text">
                                </div>
                            </section>

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">قیمت</label>
                                    <input class="form-control form-control-sm" type="text">
                                </div>
                            </section>

                            <section class="col-12   border-bottom">
                                <div class="form-group">
                                    <label for="">توضیحات</label>
                                    <textarea name="body" id="body"  class="form-control form-control-sm" rows="6"></textarea>
                                </div>
                            </section>

                            <section class="col-12 border-top  border-bottom py-3 mb-3">

                                <div class="row">

                                    <section class="col-6 col-md-3">
                                        <div class="form-group">

                                            <input class="form-control form-control-sm" type="text" placeholder="ویژگی">
                                        </div>
                                    </section>

                                    <section class="col-6 col-md-3">
                                        <div class="form-group">

                                            <input class="form-control form-control-sm" type="text" placeholder="مقدار">
                                        </div>
                                    </section>

                                </div>

                                <section>
                                    <button type="button" class="btn btn-success btn-sm">افزودن</button>
                                </section>
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
