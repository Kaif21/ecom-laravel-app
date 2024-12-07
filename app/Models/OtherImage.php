<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OtherImage extends Model
{
    private static $otherImage, $image, $imageName, $imageURL, $directory;

    public static function newOtherImage($images, $id)
    {
        foreach ($images as $image) {
            self::$imageName = $image->getClientOriginalName();
            self::$directory = ('upload/product-image/');
            $image->move(self::$directory, self::$imageName);
            self::$imageURL = self::$directory . self::$imageName;

            self::$otherImage = new OtherImage();
            self::$otherImage->product_id = $id;
            self::$otherImage->image =  self::$imageURL;
            self::$otherImage->save();
        }
    }
    public static function updateOtherImage($images, $id)
    {
        $otherImages = OtherImage::where('product_id',$id)->get();

        foreach ($otherImages as $otherImage) {
           $otherImage->delete();
        }
        OtherImage::newOtherImage($images, $id);
    }
}
