<?php

namespace App\Http\Controllers\Admin\Content;

use App\Http\Controllers\Controller;
use App\Models\Content\PostCategory;
use http\Env\Response;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Content\PostCategoryRequest;

use Illuminate\Support\Str;
use Validator;


class ContentCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postCategories = PostCategory::orderBy('created_at', 'desc')->simplePaginate(15);
        return view('admin.content.category.index', compact('postCategories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.content.category.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostCategoryRequest $request)
    {
//        dd($request->all());
        $inputs = $request->all();
//        $inputs['slug'] = str_replace(' ', '-', $inputs['name']) . '-' . Str::random(5);
        $inputs['image'] = 'image';
        $postCategory = PostCategory::create($inputs);
        return redirect()->route('admin.content.category.index')->with('swal-success', 'دسته بندی جدید شما با موفقیت ثبت شد');


    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(PostCategory $postCategory)
    {
//        dd($postCategory);
        return view('admin.content.category.edit', compact('postCategory'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostCategoryRequest $request,PostCategory $postCategory)
    {
        $inputs = $request->all();
        $inputs['image'] = 'image';
        $postCategory->update($inputs);
        return redirect()->route('admin.content.category.index')->with('swal-success', 'دسته بندی شما  با موفقیت ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostCategory $postCategory)
    {
        $result = $postCategory->delete();
        return redirect()->route('admin.content.category.index')->with('swal-success', 'دسته بندی شما  با موفقیت حذف شد');
    }

    public function status(PostCategory $postCategory)
    {
        $postCategory->status = $postCategory->status == 0 ? 1 : 0;
        $result = $postCategory->save();
        if ($result){
            if ($postCategory->status == 0 ){
                return response()->json(['status' => true, 'checked' => false]);
            }
            else{
                return response()->json(['status' => true, 'checked' => true]);

            }
        }

        else{
            return response()->json(['status' => false]);
        }
    }
}



