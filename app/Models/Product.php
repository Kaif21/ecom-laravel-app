<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    private static $product, $image, $imageName, $imageURL, $directory;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = ('upload/product-image/');
        self::$image->move(self::$directory, self::$imageName);
        self::$imageURL = self::$directory . self::$imageName;
        return self::$imageURL;
    }

    public static function addNewProduct($request)
    {
        self::$product = new Product();
        self::$product->name =  $request->name;
        self::$product->code =  $request->code;
        self::$product->category_id =  $request->category_id;
        self::$product->subcategory_id =  $request->subcategory_id;
        self::$product->unit_id =  $request->unit_id;
        self::$product->brand_id =  $request->brand_id;
        self::$product->short_description =  $request->short_description;
        self::$product->long_description =  $request->long_description;
        self::$product->regular_price =  $request->regular_price;
        self::$product->selling_price =  $request->selling_price;
        self::$product->stock_amount =  $request->stock_amount;
        self::$product->meta_title =  $request->meta_title;
        self::$product->meta_description =  $request->description;
        self::$product->status =  $request->status;
        self::$product->image = self::getImageUrl($request);
        self::$product->save();
        return self::$product;
    }
    public static function updateProduct($request, $id)
    {
        self::$product = Product::find($id);
        if ($request->file('image')) {
            self::$imageURL = self::getImageUrl($request);
        } else {
            self::$imageURL = self::$product->image;
        }
        self::$product->name =  $request->name;
        self::$product->code =  $request->code;
        self::$product->category_id =  $request->category_id;
        self::$product->subcategory_id =  $request->subcategory_id;
        self::$product->unit_id =  $request->unit_id;
        self::$product->brand_id =  $request->brand_id;
        self::$product->short_description =  $request->short_description;
        self::$product->long_description =  $request->long_description;
        self::$product->regular_price =  $request->regular_price;
        self::$product->selling_price =  $request->selling_price;
        self::$product->stock_amount =  $request->stock_amount;
        self::$product->status =  $request->status;
        self::$product->image = self::$imageURL;
        self::$product->save();
        return self::$product;
    }

    public static function deleteProduct($id){
        self::$product = Product::find($id);
        self::$product->delete();
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function subCategory(){
        return $this->belongsTo(SubCategory::class);
    }
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
    public function unit(){
        return $this->belongsTo(Unit::class);
    }
    public function otherImages(){
        return $this->hasMany(OtherImage::class);
    }

}
