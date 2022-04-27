@extends('admin.layouts.master')

@section('head-tag')
    <title>تخفیف عمومی</title>
@endsection

@section('content')


    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"><a href="#">خانه</a> </li>
            <li class="breadcrumb-item font-size-12"><a href="#"> بخش فروش</a> </li>
            <li class="breadcrumb-item font-size-12"><a href="#"> تخفیف ها</a> </li>
            <li class="breadcrumb-item font-size-12  active" aria-current="page">تخفیف عمومی</li>
        </ol>
    </nav>


    <section class="row">

        <section class="col-12">

            <section class="main-body-container">

                <section class="main-body-container-header">
                    <h6>تخفیف عمومی</h6>
            </section >
                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2 ">
                    <a href="{{ route('admin.market.discount.commenDiscount.create') }}" class="btn btn-info btn-sm">ایجاد کوپن تخفیف عمومی</a>
            <div class="max-width-14-rem">
                        <input type="text" class="form-control form-control-sm form-text" placeholder="جست جو..." >
                    </div>
                </section>

                <section class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>درصد تخفیف</th>
                            <th>سقف تخفیف</th>
                            <th>عنوان تخفیف</th>
                            <th>تاریخ شروع</th>
                            <th>تاریخ پایان</th>
                            <th class="max-width-14-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>1</th>
                                <th>20%</th>
                                <th>25/000</th>
                                <th>دهه فجر</th>
                                <td>ادیبهشت 99 24</td>
                                <td>ادیبهشت 99 24</td>
                                <td class="width-14-rem text-left">
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> ویرایش</a>
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash-alt"></i> حذف</button>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </section>

        </section>

    </section>

@endsection
