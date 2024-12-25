@extends('master.admin')
@section('body')
<!-- PAGE-HEADER -->
<div class="page-header">
    <div>
        <h1 class="page-title">Manage Order</h1>
    </div>
    <div class="ms-auto pageheader-btn">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Manage Order</li>
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

                                <thead>
                                    <tr>
                                        <th>SL No</th>
                                        <th>Order Date</th>
                                        <th>Customer Info</th>
                                        <th>Order Total</th>
                                        <th>Order status</th>
                                        <th>Delivery status</th>
                                        <th>Payment status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order )
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$order->order_date}}</td>
                                        <td>{{$order->customer->name}}</td>
                                        <td>BDT.{{$order->order_total}}</td>
                                        <td>{{$order->order_status}}</td>
                                        <td>{{$order->delivery_status}}</td>
                                        <td>{{$order->payment_status}}</td>
                                        <td>
                                            <a class="btn btn-warning fs-14 text-white edit-icn" title="Edit" href="{{ route('admin.order-edit', $order->id) }}">
                                                <i class="fe fe-edit"></i>
                                            </a>
                                            <a class="btn btn-info fs-14 text-white edit-icn" title="details" href="{{ route('admin.order-details', $order->id) }}">
                                                <i class="fe fe-book"></i>
                                            </a>
                                            <a class="btn btn-dark fs-14 text-white edit-icn" title="download-invoice" href="{{ route('admin.download-invoice', $order->id) }}">
                                                <i class="fe fe-download"></i></a>
                                            <a class="btn btn-primary fs-14 text-white edit-icn" title="invoice" href="{{ route('admin.order-invoice', $order->id) }}">
                                                <i class="fa-solid fa-receipt"></i>
                                            </a>
                                            <a class="btn btn-danger fs-14 text-white edit-icn" title="delete" href="{{ route('admin.order-delete', $order->id) }}">
                                                <i class="fe fe-trash"></i>
                                            </a>
                                        </td>
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
