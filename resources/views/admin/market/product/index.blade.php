@extends('admin.layouts.master')

@section('head-tag')
    <title>محصولات</title>
@endsection

@section('content')


    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"><a href="#">خانه</a> </li>
            <li class="breadcrumb-item font-size-12"><a href="#"> بخش فروش</a> </li>
            <li class="breadcrumb-item font-size-12  active" aria-current="page">محصولات</li>
        </ol>
    </nav>


    <section class="row">

        <section class="col-12">

            <section class="main-body-container">

                <section class="main-body-container-header">
                    <h6>محصولات</h6>
            </section >
                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2 ">
                    <a href="{{ route('admin.market.product.create') }}" class="btn btn-info btn-sm ">ایجاد محصول جدید</a>
            <div class="max-width-14-rem">
                        <input type="text" class="form-control form-control-sm form-text" placeholder="جست جو..." >
                    </div>
                </section>

                <section class="table-responsive">
                    <table class="table table-striped table-hover h-150px">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>نام کالا</th>
                            <th>تصویر کالا</th>
                            <th>قیمت</th>
                            <th>وزن کالا</th>
                            <th>دسته</th>
                            <th>فرم</th>
                            <th class="max-width-14-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>1</th>
                                <td>LED</td>
                                <td><img src="{{asset('admin-assets/images/avatar-2.jpg')}}" alt=""></td>
                                <td>645000</td>
                                <td>650 گرم</td>
                                <td>کالای الکترونیکی</td>
                                <td>اندازه صفحها</td>

                                <td class="width-8-rem text-left">

                                    <div class="dropdown">
                                        <a href="#" class="btn btn-success btn-block dropdown-toggle" role="button" id="dropdownMenulink" data-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-tools"></i>عملیات
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenulink">
                                            <a href="" class="dropdown-item text-right"><i class="fa fa-images"> گالری</i></a>
                                            <a href="" class="dropdown-item text-right"><i class="fa fa-list-ul"> فرم کالا</i></a>
                                            <a href="" class="dropdown-item text-right"><i class="fa fa-edit"> ویرایش</i></a>
                                            <form action="" method="post">
                                                <button type="submit" class="dropdown-item text-right"><i class="fa fa-window-close"> حذف</i></button>
                                            </form>

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
