<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\CustomerAuthController;
use App\Models\Order;
use App\Models\OrderDetails;
use Session;

class CheckOutController extends Controller
{
    public function index(){
        // $customerAuth = new CustomerAuthController();
        // $customerAuth->index();
        if (Session::get('customer_id')) {
            return redirect("/checkout/payment-info");
        }


        return view("customer.auth.index");
    }
    public function paymentinfo(){
        return view("website.checkout.paymentinfo");
    }

    private $order;
    public function newOrder(Request $request){
      $this->order = Order::storeOrder($request);
      OrderDetails::newOrderdetails($this->order->id);
        return redirect('/checkout/complete-order')->with('message','Thank you for letting us buy an ice cream');
    }

    public function completeOrder(){
        return view('website.checkout.complete-order');
    }
}
