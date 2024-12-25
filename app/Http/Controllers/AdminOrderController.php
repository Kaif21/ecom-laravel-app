<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetails;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminOrderController extends Controller
{
    private $order;
    public function index(){

        return view('admin.order.index',['orders'=> Order::latest()->get()]);
    }
    public function details($id){

        return view('admin.order.details',['order'=> Order::find($id)]);
    }
    public function edit($id){

        return view('admin.order.edit',['order'=> Order::find($id)]);
    }
    public function orderInvoice($id){

        return view('admin.order.orderInvoice',['order'=> Order::find($id)]);
    }
    private $pdf;
    public function downloadInvoice($id){

        $this->pdf = PDF::loadView('admin.order.download-invoice',['order'=> Order::find($id)]);
        return $this->pdf->stream('invoice.pdf');
        // return view('admin.order.downloadInvoice',['order'=> Order::find($id)]);
    }
    public function update(Request $request,$id){

        $this->order = Order::find($id);

        if ($request->order_status == 'pending'){

            $this->order->order_status = $request->order_status;
            $this->order->payment_status = $request->order_status;
            $this->order->delivery_status = $request->order_status;
        }
        elseif ($request->order_status == 'processing'){

            $this->order->order_status = $request->order_status;
            $this->order->payment_status = $request->order_status;
            $this->order->delivery_status = $request->order_status;
            $this->order->delivery_address  = $request->delivery_address;
            $this->order->courier_id = $request->courier_id;
        }
        elseif ($request->order_status == 'complete'){

            $this->order->order_status = $request->order_status;
            $this->order->payment_status = $request->order_status;
            $this->order->delivery_status = $request->order_status;
            $this->order->delivery_date = date('Y-m-d');
            $this->order->delivery_timestamp = strtotime(date('Y-m-d'));
            $this->order->payment_amount = $this->order->order_total;
            $this->order->payment_date = date('Y-m-d');
            $this->order->payment_timestamp = strtotime(date('Y-m-d'));
        }
        elseif ($request->order_status == 'cancelled'){
            $this->order->order_status = $request->order_status;
            $this->order->payment_status = $request->order_status;
            $this->order->delivery_status = $request->order_status;
        }

        $this->order->save();

        return redirect('/admin/all-order')->with('message','Updated order details');
    }
    public function delete($id)
{
    // First, delete related order details
    OrderDetails::where('order_id', $id)->delete();

    // Then delete the main order
    Order::find($id)->delete();

    return redirect('/admin/all-order')->with('message', 'Order info delete successfully.');
}
}
