@extends('admin.layouts.master')

@section('head-tag')
    <title>کاربران ادمین</title>
@endsection

@section('content')


    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"><a href="#">خانه</a> </li>
            <li class="breadcrumb-item font-size-12"><a href="#"> بخش فروش</a> </li>
            <li class="breadcrumb-item font-size-12  active" aria-current="page"> کاربران ادمین</li>
        </ol>
    </nav>


    <section class="row">

        <section class="col-12">

            <section class="main-body-container">

                <section class="main-body-container-header">
                    <h6>کاربران ادمین</h6>
            </section >
                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2 ">
                    <a href="{{ route('admin.user.admin-user.create') }}" class="btn btn-info btn-sm">ایجاد ادمین جدید</a>
            <div class="max-width-14-rem">
                        <input type="text" class="form-control form-control-sm form-text" placeholder="جست جو..." >
                    </div>
                </section>

                <section class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>ایمیل</th>
                            <th>شماره موبایل</th>
                            <th>نام</th>
                            <th>نلم خانوادگی</th>
                            <th>نقش</th>
                            <th class="max-width-14-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>
                        </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <th>3</th>
                                <td>alireaz@gmail.com</td>
                                <td>09115029577</td>
                                <td>علیرضا </td>
                                <td>علیخانی</td>
                                <td>سوپر ادمین</td>
                                <td class="width-22-rem text-left">
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> نقش</a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i>ویرایش</a>
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash-alt"></i> حذف</button>
                                </td>
                            </tr>


                        </tbody>
                    </table>
                </section>

        </section>

    </section>

@endsection
