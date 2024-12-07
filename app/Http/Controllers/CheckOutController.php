<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\CustomerAuthController;
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
}
