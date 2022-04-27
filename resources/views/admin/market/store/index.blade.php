@extends('admin.layouts.master')

@section('head-tag')
    <title>انبار</title>
@endsection

@section('content')


    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"><a href="#">خانه</a> </li>
            <li class="breadcrumb-item font-size-12"><a href="#"> بخش فروش</a> </li>
            <li class="breadcrumb-item font-size-12  active" aria-current="page">انبار</li>
        </ol>
    </nav>


    <section class="row">

        <section class="col-12">

            <section class="main-body-container">

                <section class="main-body-container-header">
                    <h6>انبار</h6>
            </section >
                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2 ">
                    <a href="{{ route('admin.market.property.create') }}" class="btn btn-info btn-sm disabled">ایجاد انبار جدیدا</a>
            <div class="max-width-14-rem">
                        <input type="text" class="form-control form-control-sm form-text" placeholder="جست جو..." >
                    </div>
                </section>

                <section class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>نام کالا</th>
                            <th>تصویر کالا</th>
                            <th>موجودی</th>
                            <th>ورودی ادمین</th>
                            <th>خروجی انبار</th>
                            <th class="max-width-14-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>
                        </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <th>1</th>
                                <td>سامسونگ</td>
                                <td>عکس</td>
                                <td>16</td>
                                <td>38</td>
                                <td>22</td>
                                <td class="width-22-rem text-left">
                                    <a href="{{ route('admin.market.store.add-to-store') }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> افزایش موجودی</a>
                                    <button type="submit" class="btn btn-warning btn-sm"><i class="fa fa-trash-alt"></i> اصلاح موجودی</button>
                                </td>
                            </tr>


                        </tbody>
                    </table>
                </section>

        </section>

    </section>

@endsection
