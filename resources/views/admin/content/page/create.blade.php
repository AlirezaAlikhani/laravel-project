@extends('admin.layouts.master')

@section('head-tag')
    <title>ایجاد منو جدید</title>
@endsection

@section('content')


    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"><a href="#">خانه</a> </li>
            <li class="breadcrumb-item font-size-12"><a href="#"> بخش محتوا</a> </li>
            <li class="breadcrumb-item font-size-12"><a href="#">منو</a> </li>
            <li class="breadcrumb-item font-size-12  active" aria-current="page">ایجاد منو</li>
        </ol>
    </nav>


    <section class="row">

        <section class="col-12 ">

            <section class="main-body-container">

                <section class="main-body-container-header">
                    <h6>ایجاد منو جدید</h6>
                </section >
                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2 ">
                    <a href="{{ route('admin.content.page.index') }}" class="btn btn-info btn-sm">بازگشت</a>

                </section>

                <section>

                    <form action="#">
                        <section class="row">

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                     <label for="">عنوان </label>
                                    <input class="form-control form-control-sm" type="text">
                                </div>
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">آدرس url</label>
                                    <input class="form-control form-control-sm" type="text">
                                </div>
                            </section>

                                <section class="col-12   border-bottom">
                                    <div class="form-group">
                                        <label for="">محتوا</label>
                                        <textarea name="body" id="body"  class="form-control form-control-sm" rows="6"></textarea>
                                    </div>
                                </section>



                            <section class="col-12 col-md-6 mb-3 py-3">
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
