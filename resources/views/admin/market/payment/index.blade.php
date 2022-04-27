@extends('admin.layouts.master')

@section('head-tag')
    <title>پرداخت ها</title>
@endsection

@section('content')


    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"><a href="#">خانه</a> </li>
            <li class="breadcrumb-item font-size-12"><a href="#"> بخش فروش</a> </li>
            <li class="breadcrumb-item font-size-12  active" aria-current="page">پرداخت ها</li>
        </ol>
    </nav>


    <section class="row">

        <section class="col-12">

            <section class="main-body-container">

                <section class="main-body-container-header">
                    <h6>پرداخت ها</h6>
            </section >
                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2 ">
                    <a href="{{ route('admin.market.category.create') }}" class="btn btn-info btn-sm disabled">پرداخت جدید</a>
            <div class="max-width-14-rem">
                        <input type="text" class="form-control form-control-sm form-text" placeholder="جست جو..." >
                    </div>
                </section>

                <section class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>کد تراکنش</th>
                            <th>بانک</th>
                            <th>اسم پرداخت کننده</th>
                            <th>وضعیت پرداخت</th>
                            <th>نوع پرداخت</th>
                            <th class="max-width-14-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>1</th>
                                <td>=45454</td>
                                <td>ملت</td>
                                <td>علیرضا علیخانی</td>
                                <td>تاییده شده</td>
                                <td>آنلاین</td>
                                <td class="width-22-rem text-left">
                                    <a href="#" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> مشاهده</a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fa fa-close"></i> باطل کردن</a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-reply"></i> برگزندان</a>
                                </td>
                            </tr>


                    </table>
                </section>

        </section>

    </section>

@endsection
