@extends('admin.layouts.master')

@section('head-tag')
    <title>دسته بندی</title>
@endsection

@section('content')
{{--{{ dd($postCategories) }}}--}}

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"><a href="#">خانه</a> </li>
            <li class="breadcrumb-item font-size-12"><a href="#"> بخش محتوا</a> </li>
            <li class="breadcrumb-item font-size-12  active" aria-current="page"> دسته بندی</li>
        </ol>
    </nav>


    <section class="row">

        <section class="col-12">

            <section class="main-body-container">

                <section class="main-body-container-header">
                    <h6>دسته بندی</h6>
            </section >

                @include('admin.alerts.alert-section.success')
                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2 ">
                    <a href="{{ route('admin.content.category.create') }}" class="btn btn-info btn-sm">ایجاد دسته بندی</a>
            <div class="max-width-14-rem">
                        <input type="text" class="form-control form-control-sm form-text" placeholder="جست جو..." >
                    </div>
                </section>

                <section class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>نام دسته بندی</th>
                            <th>توضیحات</th>
                            <th>اسلاگ</th>
                            <th>عکس</th>
                            <th>تگ ها</th>
                            <th>وضعیت</th>
                            <th class="max-width-14-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($postCategories as $posCategory)

                            <tr>
                                <th>{{ $posCategory->id }}</th>
                                <td>{{ $posCategory->name }}</td>
                                <td>{{ $posCategory->description }}</td>
                                <td>{{ $posCategory->slug }}</td>
                                <td>
                                    <img src="{{ asset($posCategory->image) }}" alt="" width="50" height="50">
                                </td>
                                <td>{{ $posCategory->tags }}</td>
                                <td>
                                    <labal>
                                        <input id="{{ $posCategory->id }}" data-url="{{ route('admin.content.category.status',$posCategory->id) }}" onchange="changeStatus({{ $posCategory->id }})" type="checkbox"  @if($posCategory->status === 1)
                                            checked
                                            @endif>
                                    </labal>
                                </td>

                                <td class="width-14-rem text-left">
                                    <a href="{{ route('admin.content.category.edit', $posCategory->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> ویرایش</a>
                                    <form class="d-inline" action="{{ route('admin.content.category.destroy', $posCategory->id) }}" method="post">
                                        @csrf
                                        {{ method_field('delete') }}

                                    <button type="submit" class="btn btn-danger btn-sm delete"><i class="fa fa-trash-alt"></i> حذف</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </section>

        </section>

    </section>

@endsection

@section('script')

            <script type="text/javascript">
                function changeStatus(id){
                    var element = $('#'+ id)
                    var url = element.attr('data-url')
                    var elementValue = !element.prop('checked')

                    $.ajax({
                        url : url,
                        type : "GET",
                        success : function (response){
                            if (response.status){
                                if (response.checked) {
                                    element.prop('checked', true);
                                    successToast('دسته بندی با موفیقت فعال شد')
                                }
                            else {
                                    element.prop('checked', false);
                                    successToast('دسته بندی با موفیقت غیر فعال شد')
                                }
                            }
                            else {
                                element.prop('checked', elementValue);
                                errorToast('هنگام ویرایش مشکلی به وجود آماده است');

                            }
                        },
                        error : function (){
                            element.prop('checked', elementValue);
                            errorToast('ارتباط برقرار نشد');
                        }
                    });

                    function successToast(message){

                        var successToastTag = '<section class="toast" data-delay="5000">\n' +
                            '<section class="toast-body py-3 d-flex bg-success text-white">\n' +
                            '<strong class="ml-auto">' +message+ '</strong>\n' +
                            '<button type="button" class="mr-2  close" data-dismiss="toast" aria-label="Close">\n' +
                            '<span aria-hidden="true">&times;</span>\n' +
                            '</button>\n' +
                            '</section>\n' +
                            '</section>';

                            $('.toast-wrapper').append(successToastTag);
                            $('.toast').toast('show').delay(5500).queue(function (){
                                $(this).remove();
                            })
                    }
                    function errorToast(message){

                        var errorToastTag = '<section class="toast" data-delay="5000">\n' +
                            '<section class="toast-body py-3 d-flex bg-danger text-white">\n' +
                            '<strong class="ml-auto">' +message+ '</strong>\n' +
                            '<button type="button" class="mr-2  close" data-dismiss="toast" aria-label="Close">\n' +
                            '<span aria-hidden="true">&times;</span>\n' +
                            '</button>\n' +
                            '</section>\n' +
                            '</section>';

                        $('.toast-wrapper').append(errorToastTag);
                        $('.toast').toast('show').delay(5500).queue(function (){
                            $(this).remove();
                        })
                    }
                }
            </script>

    @include('admin.alerts.sweetalert.delete-confirm', ['className' => 'delete'])

@endsection
