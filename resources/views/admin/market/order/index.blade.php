@extends('admin.layouts.master')

@section('head-tag')
    <title>سفارشات</title>
@endsection

@section('content')


    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"><a href="#">خانه</a> </li>
            <li class="breadcrumb-item font-size-12"><a href="#"> بخش فروش</a> </li>
            <li class="breadcrumb-item font-size-12  active" aria-current="page">سفارشات</li>
        </ol>
    </nav>


    <section class="row">

        <section class="col-12">

            <section class="main-body-container">

                <section class="main-body-container-header">
                    <h6>سفارشات</h6>
            </section >
                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2 ">
                    <a href="" class="btn btn-info btn-sm disabled">ایجاد سفارش جدید</a>
            <div class="max-width-14-rem">
                        <input type="text" class="form-control form-control-sm form-text" placeholder="جست جو..." >
                    </div>
                </section>

                <section class="table-responsive">
                    <table class="table table-striped table-hover h-150px">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>کد سفارش</th>
                            <th>مبلغ سفارش</th>
                            <th>مبلغ تخفیف</th>
                            <th>مبلغ نهایی</th>
                            <th>وضعیت پرداخت</th>
                            <th>شیوه پرداخت</th>
                            <th>بانک</th>
                            <th>وضعت ارسال</th>
                            <th>شیوه ارسال</th>
                            <th>وضعیت سفارش</th>
                            <th class="max-width-14-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>1</th>
                                <td>-545454</td>
                                <td>45/000</td>
                                <td>34/000</td>
                                <td>347/000</td>
                                <td>پرداخت شده</td>
                                <td>آنلاین</td>
                                <td>ملت</td>
                                <td>در حال ارسال</td>
                                <td>پیک موتوری</td>
                                <td>د رحال ارسال</td>
                                <td class="width-8-rem text-left">

                                    <div class="dropdown">
                                        <a href="#" class="btn btn-success btn-block dropdown-toggle" role="button" id="dropdownMenulink" data-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-tools"></i>عملیات
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenulink">
                                            <a href="" class="dropdown-item text-right"><i class="fa fa-images"> مشاهده فاکتور</i></a>
                                            <a href="" class="dropdown-item text-right"><i class="fa fa-list-ul"> تغیر وضعیت ارسال</i></a>
                                            <a href="" class="dropdown-item text-right"><i class="fa fa-edit"> تغیر وضعیت سفارش</i></a>
                                            <a href="" class="dropdown-item text-right"><i class="fa fa-window-close"> باطل کردن سفارش</i></a>
                                        </div>

                                    </div>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </section>

        </section>

    </section>

@endsection
