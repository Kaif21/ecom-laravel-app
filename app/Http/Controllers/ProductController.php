<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Brand;
use App\Models\Unit;
use App\Models\OtherImage;

class ProductController extends Controller
{
    private $product;
    public function index()
    {
        return view('admin.product.index', [
            'products' => Product::all()
        ]);
    }
    public function create()
    {
        return view('admin.product.create', [
            'categories' => Category::all(),
            'subcategories' => SubCategory::all(),
            'brands' => Brand::all(),
            'units' => Unit::all()
        ]);
    }

    public function store(Request $request)
    {

        $this->product = Product::addNewProduct($request);
        OtherImage::newOtherImage($request->file('other_image'), $this->product->id);

        return back()->with('message', 'Added new Product');
    }

    public function getSubCategoryByCategory() {
        $category_Id = $_GET['id'];
        $subcategories = SubCategory::where('category_id',$category_Id)->get();
        return response()->json( $subcategories);
        }

    public function edit($id)
    {

        return view('admin.product.edit', [
            'product' => Product::find($id),
            'categories' => Category::all(),
            'subcategories' => SubCategory::all(),
            'brands' => Brand::all(),
            'units' => Unit::all()
        ]);
    }
    public function update(Request $request, $id)
    {

        Product::updateProduct($request, $id);
        if($request->file('other_image')){
            OtherImage::updateOtherImage($request->file('other_image'), $id);
        }
        return redirect('/product')->with('message', 'updated info');
    }
    public function delete($id)
    {

        Product::deleteProduct($id);
        return redirect('/product')->with('message', 'Deleted info');
    }
}
