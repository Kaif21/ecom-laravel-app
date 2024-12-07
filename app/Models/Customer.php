<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    private static $customer;
    public static function newCustomer($request){
        self::$customer = new Customer();
        self::$customer->name = $request->name;
        self::$customer->email = $request->email;
        self::$customer->mobile = $request->mobile;
        self::$customer->address = $request->address;
        self::$customer->password = bcrypt($request->password) ;
        self::$customer->image= $request->image;
        self::$customer->nid = $request->nid;
        self::$customer->dob = $request->dob;
        self::$customer->blood_group = $request->blood_group;
        self::$customer->status = $request->status;
        self::$customer->save();
        return self::$customer;

    }
}
