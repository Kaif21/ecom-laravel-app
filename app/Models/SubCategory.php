<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    private static $subcategory, $image, $imageName, $imageURL, $directory;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = ('upload/subCategory-image/');
        self::$image->move(self::$directory, self::$imageName);
        self::$imageURL = self::$directory . self::$imageName;
        return self::$imageURL;
    }

    public static function addNewSubCategory($request)
    {
        self::$subcategory = new SubCategory();
        self::$subcategory->name =  $request->name;
        self::$subcategory->description =  $request->description;
        self::$subcategory->image = self::getImageUrl($request);
        self::$subcategory->category_id =  $request->category_id;
        self::$subcategory->status =  $request->status;
        self::$subcategory->save();
    }
    public static function updateSubCategory($request, $id)
    {
        self::$subcategory = SubCategory::find($id);
        if ($request->file('image')) {
            self::$imageURL = self::getImageUrl($request);
        } else {
            self::$imageURL = self::$subcategory->image;
        }
        self::$subcategory->name =  $request->name;
        self::$subcategory->description =  $request->description;
        self::$subcategory->image = self::$imageURL;
        self::$subcategory->category_id =  $request->category_id;
        self::$subcategory->status =  $request->status;
        self::$subcategory->save();
    }

    public static function deleteSubCategory($id){
        self::$subcategory = SubCategory::find($id);
        self::$subcategory->delete();
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
}

