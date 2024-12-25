<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Session;
class Order extends Model
{
private static $order;

    public static function storeOrder($request){
        self::$order = new Order();
        self::$order->customer_id = Session::get('customer_id');
        self::$order->order_date = date('Y-m-d');
        self::$order->order_timestamp = strtotime(date('Y-m-d'));
        self::$order->order_total = Session::get('orderTotal');
        self::$order->tax_total = Session::get('taxTotal');
        self::$order->shipping_total = Session::get('shippingTotal');
        self::$order->delivery_address = $request->delivery_address;
        self::$order->payment_method = $request->payment_method;
        self::$order->save();
        return self::$order;
    }
    public function customer(){
        return $this->belongsTo(Customer::class);
    }
    public function orderDetail(){
        return $this->hasMany(OrderDetails::class);
    }
}
