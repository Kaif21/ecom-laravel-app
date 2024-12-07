<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use App\Models\Category;

use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index()
    {
        return view('admin.subcategory.index', [
            'subcategories' => SubCategory::all()
        ]);
    }
    public function create()
    {
        return view('admin.subcategory.create', ['categories' => Category::all()]);
    }

    public function store(Request $request)
    {

        SubCategory::addNewSubCategory($request);
        return back()->with('message', 'Added new SubCategory');
    }
    public function edit($id)
    {

        return view('admin.subcategory.edit', [
            'subcategory' => SubCategory::find($id),
            'categories' => Category::all()
        ]);
    }
    public function update(Request $request , $id)
    {

        SubCategory::updateSubCategory($request ,$id);
        return redirect('/subcategory')->with('message','updated info');
    }
    public function delete($id)
    {

        SubCategory::deleteSubCategory($id);
        return redirect('/subcategory')->with('message','Deleted info');
    }
}
