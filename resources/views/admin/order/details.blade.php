@extends('master.admin')
@section('body')
<!-- PAGE-HEADER -->
<div class="page-header">
    <div>
        <h1 class="page-title">Order detalis</h1>
    </div>
    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Order detalis</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->
<div class="container">
    <div class="row">
        <div class="row row-sm">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <!-- Changed table ID to match the one in table-editable.js -->
                            <table id="editable-responsive-table" class="table table-bordered text-nowrap border-bottom">
                                <tr>
                                    <th>Order Id</th>
                                    <td>{{$order->id}}</td>
                                </tr>
                                <tr>
                                    <th>Order Date</th>
                                    <td>
                                        {{$order->order_date}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Order Total</th>
                                    <td>
                                        {{$order->order_total}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Tax total</th>
                                    <td>
                                        {{$order->tax_total}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Shipping Total</th>
                                    <td>
                                        {{$order->shipping_total}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Customer Info</th>
                                    <td>
                                        {{$order->customer->name}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Order status</th>
                                    <td>
                                        {{$order->order_status}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Delivery Status</th>
                                    <td>
                                        {{$order->delivery_status}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Delivery Date</th>
                                    <td>
                                        {{$order->delivery_date}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Payment method</th>
                                    <td>
                                        {{$order->payment_method}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Payment Date</th>
                                    <td>
                                        {{$order->payment_date}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Payment amount</th>
                                    <td>
                                        {{$order->payment_amount}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>TRX ID</th>
                                    <td>
                                        {{$order->transaction_id}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Currency</th>
                                    <td>
                                        {{$order->currency}}
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-sm">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <!-- Changed table ID to match the one in table-editable.js -->
                            <table id="editable-responsive-table" class="table table-bordered text-nowrap border-bottom">
                                <h2>Order Product Details</h2>
                                <thead>
                                    <tr>
                                        <th>SL No</th>
                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $order->orderDetail as $productOrder )
                                    <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$productOrder->product_name}}</td>
                                    <td>{{$productOrder->product_price}}</td>
                                    <td>{{$productOrder->product_qty}}</td>
                                    <td>{{$productOrder->product_price * $productOrder->product_qty}}</td>
                                </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
