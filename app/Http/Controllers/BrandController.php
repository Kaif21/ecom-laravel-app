<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    private $brand;
    public function index()
    {
        return view('admin.brand.index', [
            'brands' => Brand::all()
        ]);
    }
    public function create()
    {
        return view('admin.brand.create');
    }
    public function store(Request $request)
    {
        $this->brand = Brand::addNewBrand($request);
        return back()->with('message', 'Added new Brand');
    }
    public function edit($id)
    {
        $this->brand = Brand::find($id);
        return view('admin.brand.edit',['brand'=>$this->brand]);
    }
    public function update(Request $request,$id){

        $this->brand = Brand::updateBrand($request ,$id);
       return redirect('/brand')->with('message',"updated Brand info");
    }
    public function delete($id)
    {

        Brand::deleteBrand($id);
        return redirect('/brand')->with('message','Deleted info');
    }
}
