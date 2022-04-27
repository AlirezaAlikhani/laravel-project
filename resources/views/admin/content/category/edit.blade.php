@extends('admin.layouts.master')

@section('head-tag')
    <title>صفحه تغیر دسته بندی</title>
@endsection

@section('content')

{{--{{ dd($posCategory) }}--}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"><a href="#">خانه</a> </li>
            <li class="breadcrumb-item font-size-12"><a href="#"> بخش محتوا</a> </li>
            <li class="breadcrumb-item font-size-12"><a href="#">دسته بندی</a> </li>
            <li class="breadcrumb-item font-size-12  active" aria-current="page">صفحه تغیر دسته بندی</li>
        </ol>
    </nav>


    <section class="row">

        <section class="col-12">

            <section class="main-body-container">

                <section class="main-body-container-header">
                    <h6>تغیر دسته بندی</h6>
                </section >
                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2 ">
                    <a href="{{ route('admin.content.category.index') }}" class="btn btn-info btn-sm">بازگشت</a>

                </section>

                <section>

                    <form action="{{ route('admin.content.category.update', $postCategory->id ) }}" id="form" method="post" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('put') }}
                        <section class="row">

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                     <label for="name">نام دسته</label>
                                    <input class="form-control form-control-sm" type="text" id="name" name="name" value="{{ old('name', $postCategory->name) }}">
                                </div>
                                @error('name')
                                    <span class="alert_required text-danger" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                @enderror
                            </section>

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="tags">تگ ها</label>
                                    <input class="form-control form-control-sm" type="hidden"  id="tags" name="tags" value="{{ old('tags',$postCategory->tags) }}">
                                    <select class="select2 form-control form-control-sm" name="" id="select_tags" multiple>

                                    </select>
                                </div>
                                @error('tags')
                                <span class="alert_required text-danger" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                @enderror
                            </section>



                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="status">وضعیت</label>
                                    <select class="form-control form-control-sm" name="status" id="status">
                                        <option value="0" @if(old('status',$postCategory->status) == 0) selected @endif>غیر فعال</option>
                                        <option value="1" @if(old('status',$postCategory->status) == 1) selected @endif> فعال</option>
                                    </select>
                                </div>
                                @error('status')
                                <span class="alert_required text-danger" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                @enderror
                            </section>

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="image">تصویر</label>
                                    <input class="form-control form-control-sm" type="file" id="image" name="image">
                                </div>
                                @error('image')
                                <span class="alert_required text-danger" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                @enderror
                            </section>
                            <section class="col-12   border-bottom">
                                <div class="form-group">
                                    <label for="description">توضیحات</label>
                                    <textarea name="description" id="description"  class="form-control form-control-sm" rows="6">
                                      {{ old('description',$postCategory->description) }}
                                    </textarea>
                                </div>
                                @error('description')
                                <span class="alert_required text-danger" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                @enderror
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
                CKEDITOR.replace('description');
            </script>

            <script>
                $(document).ready(function (){
                    var tags_input = $('#tags');
                    var select_tags = $('#select_tags');
                    var default_tags = tags_input.val();
                    var default_data= null;

                    if(tags_input.val() !== null && tags_input.val().length > 0)
                    {
                        default_data = default_tags.split(',');
                    }

                    select_tags.select2({
                        placeholder : 'لطف تگ های خود را وارد نمایید',
                        tags: true,
                        data: default_data
                    });
                    select_tags.children('option').attr('selected', true).trigger('change');


                    $('#form').submit(function ( event ){
                        if(select_tags.val() !== null && select_tags.val().length > 0){
                            var selectedSource = select_tags.val().join(',');
                            tags_input.val(selectedSource);
                        }
                    })
                })
            </script>

@endsection
