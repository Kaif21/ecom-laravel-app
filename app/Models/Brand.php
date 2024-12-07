<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    private static $brand ,$image,$imageName,$imageURL,$directory;
    public static function getImageUrl($request){
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'upload/brand-image/';
        self::$image->move( self::$directory, self::$imageName);
        self::$imageURL = self::$directory.self::$imageName;
        return self::$imageURL;
    }
    public static function addNewBrand($request){
        self::$brand = new Brand();
        self::$brand->name = $request->name;
        self::$brand->description = $request->description;
        self::$brand->image = self::getImageUrl($request);
        self::$brand->save();
    }
    public static function updateBrand($request,$id){
        self::$brand = Brand::find($id);
        if($request->file('image')){
            self::$imageURL = self::getImageUrl($request);
        }
        else{
            self::$imageURL = self::$brand->image;
        }
        self::$brand->name = $request->name;
        self::$brand->description = $request->description;
        self::$brand->image = self::$imageURL;
        self::$brand->save();
    }
    public static function deleteBrand($id){
        self::$brand = Brand::find($id);
        self::$brand->delete();
    }
}
