<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::latest()->get();
        return view('backend.category.index', compact('categories'));
    } // End Index Mathod


    public function create(){
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'category_name_en' => 'required',
            'category_name_bn' => 'required',

        ], [
            'category_name_en.required' => 'Input Category English',
            'category_name_bn.required' => 'Input Category Bangla',
        ]);

        if($request->status == Null){
            $request->status = 0;
        }

         // slug insert
         $str_en   = $request->category_name_en;

         $slug_en  = strtolower(preg_replace('/\s+/', '-', $str_en));


         // Date insert
        Category::insert([
            'category_name_en' => $request->category_name_en,
            'category_name_bn' => $request->category_name_bn,

            'category_slug_en' => $slug_en,
            'status' => $request->status,

        ]);
        Session::flash('success', 'Category Inserted Successfully');
        return redirect()->back();
    } // End Store Mathod

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('backend.category.edit', compact('category'));
    } // End Edit Mathod

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'category_name_en' => 'required',
            'category_name_bn' => 'required',

        ], [
            'category_name_en.required' => 'Input Category English',
            'category_name_bn.required' => 'Input Category Bangla',
        ]);

        if($request->status == Null){
            $request->status = 0;
        }

         // slug insert
         $str_en   = $request->category_name_en;

         $slug_en  = strtolower(preg_replace('/\s+/', '-', $str_en));

         // Date insert
        Category::findOrFail($id)->update([
            'category_name_en'  => $request->category_name_en,
            'category_name_bn'  => $request->category_name_bn,

            'category_slug_en'  => $slug_en,
            'status'  => $request->status,

        ]);
        Session::flash('success', 'Category Update Successfully');
        return redirect()->route('category.index');
    } // End Update Mathod

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        Session::flash('success', 'Category Delete Successfully');
        return redirect()->back();
    } // End Destroy Mathod




    public function active($id){
        $category = Category::find($id);
        $category->status = 1;
        $category->save();

        Session::flash('success','category Active Successfully.');
        return redirect()->back();
    }

    public function inactive($id){
        $category = Category::find($id);
        $category->status = 0;
        $category->save();

        Session::flash('success','category Disabled Successfully.');
        return redirect()->back();
    }
}
