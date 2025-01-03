<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Session;

class CustomerAuthController extends Controller
{
    private $customer;
    public function index()
    {

        return view("customer.auth.index");
    }

    public function dashboard()
    {

        return view("customer.dashboard");
    }
    public function loginView(Request $request)
    {
        return view("website.auth.login");
    }
    public function registerView(Request $request)
    {
        return view("website.auth.register");
    }

    public function login(Request $request)
    {
        $this->customer = Customer::where("email", $request->email)->first();
        if ($this->customer) {
            if (password_verify($request->password, $this->customer->password)) {
                Session::put("customer_id", $this->customer->id);
                Session::put("customer_name", $this->customer->name);
                return redirect("/customer/dashboard");
            }

            else {
                return back()->with("error","Password Wrong");
            }
        }
    }
    public function register(Request $request)
    {
        $this->customer = Customer::newCustomer($request);

        Session::put("customer_id", $this->customer->id);
        Session::put("customer_name", $this->customer->name);
        return redirect("/checkout/payment-info");
    }
    // logout
    public function logout()
    {
        Session::forget("customer_id");
        Session::forget("customer_name");
        return redirect("/");
    }
}
