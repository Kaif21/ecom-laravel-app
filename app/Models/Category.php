<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    private static $category ,$image,$imageName,$imageURL,$directory;
    public static function getImageUrl($request){
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'upload/category-image/';
        self::$image->move( self::$directory, self::$imageName);
        self::$imageURL = self::$directory.self::$imageName;
        return self::$imageURL;
    }
    public static function addNewCategory($request){
        self::$category = new Category();
        self::$category->name = $request->name;
        self::$category->description = $request->description;
        self::$category->image = self::getImageUrl($request);
        self::$category->save();
    }
    public static function updateCategory($request,$id){
        self::$category = Category::find($id);
        if($request->file('image')){
            self::$imageURL = self::getImageUrl($request);
        }
        else{
            self::$imageURL = self::$category->image;
        }
        self::$category->name = $request->name;
        self::$category->description = $request->description;
        self::$category->image = self::$imageURL;
        self::$category->save();
    }
    public static function deleteCategory($id){
        self::$category = Category::find($id);
        self::$category->delete();
    }
    public function subCategory(){
        return $this->hasMany(SubCategory::class);
    }
}
