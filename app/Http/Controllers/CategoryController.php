<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $category,$categories;
    public function index()
    {
        $this->categories = Category::all();
        return view('admin.category.index',['categories'=>$this->categories]);
    }
    public function create()
    {
        return view('admin.category.create');
    }
    public function store(Request $request)
    {
        $this->category = Category::addNewCategory($request);
        return back()->with('message', 'Added new category');
    }
    public function edit($id)
    {
        $this->category = Category::find($id);
        return view('admin.category.edit',['category'=>$this->category]);
    }
    public function update(Request $request,$id){

        $this->category = Category::updateCategory($request ,$id);
       return redirect('/category')->with('message',"updated category info");
    }
    public function delete($id)
    {

        Category::deleteCategory($id);
        return redirect('/category')->with('message','Deleted info');
    }
}
