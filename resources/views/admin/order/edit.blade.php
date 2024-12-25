@extends('master.admin')
@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Edit Order Details</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Order Details</li>
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
                            <form action="{{route('admin.order-update',['id'=>$order->id])}}" method="POST">
                                @csrf
                                <div class="row my-2">
                                    <label class="col-md-3">
                                        order Total
                                    </label>
                                    <div class="col-md-9">
                                        <input type="text" readonly class="form-control" value="{{$order->order_total}}">
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <label class="col-md-3">
                                        Customer info
                                    </label>
                                    <div class="col-md-9">
                                        <input type="text" readonly class="form-control" value="{{$order->customer->name}}">
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <label class="col-md-3">
                                        Order Status
                                    </label>
                                    <div class="col-md-9">
                                        <select name="order_status" id="" class="form-control">
                                            <option value="">--Select an status--</option>
                                            <option value="pending" @selected($order->order_status == 'pending')>Pending</option>
                                            <option value="processing" @selected($order->order_status == 'processing')>Processing</option>
                                            <option value="complete" @selected($order->order_status == 'complete')>Complete</option>
                                            <option value="cancelled" @selected($order->order_status == 'cancelled')>Cancelled</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <label class="col-md-3">
                                        Curior Info
                                    </label>
                                    <div class="col-md-9">
                                        <select name="courier_id" id="" class="form-control">
                                            <option value="">--Select Courior--</option>
                                            <option value="1">SA Paribahan</option>
                                            <option value="2">SundhorBan</option>
                                            <option value="3">Redex</option>
                                            <option value="4">Pathao</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <label class="col-md-3">
                                        Delivery Address
                                    </label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="delivery_address"> {{$order->delivery_address}}</textarea>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <label class="col-md-3">

                                    </label>
                                    <div class="col-md-9">
                                        <button type="submit" class="btn btn-success">Upadted order Info</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
