@extends('admin.layouts.master')

@section('head-tag')
    <title> نمایش تیکت</title>
@endsection

@section('content')


    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"><a href="#">خانه</a> </li>
            <li class="breadcrumb-item font-size-12"><a href="#"> بخش تیک ها</a> </li>
            <li class="breadcrumb-item font-size-12"><a href="#"> تیکت</a> </li>
            <li class="breadcrumb-item font-size-12  active" aria-current="page"> نمایش تیکت ها</li>
        </ol>
    </nav>


    <section class="row">

        <section class="col-12">

            <section class="main-body-container">

                <section class="main-body-container-header">
                    <h6>نمایش تیکت ها</h6>
                </section >
                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2 ">
                    <a href="{{ route('admin.ticket.index') }}" class="btn btn-info btn-sm">بازگشت</a>

                </section>


                <section class="card mb-3">

                    <section class="card-header text-white bg-custom-pink">
                        کامران محمدی - 8784513
                    </section>

                    <section class="card-body">
                        <h5 class="card-title">مشخصات کالا:</h5>
                        <p class="card-text">از نظر ظرافت و قبلیت منحصر به فرد </p>
                    </section>
                </section>


                <section>

                    <form action="#">
                        <section class="row">
                            <section class="col-12 ">
                                <div class="form-group">
                                     <label for="">پاسخ تیکت</label>
                                    <textarea class="form-control form-control-sm" rows="4"></textarea>
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
