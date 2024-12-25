@extends('master.website')
@section('body')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">checkout</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="index.html"><i class="lni lni-home"></i> Home</a></li>
                        <li><a href="index.html">Shop</a></li>
                        <li>checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <section class="checkout-wrapper section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="checkout-steps-form-style-1">
                        <ul id="accordionExample">
                            <li>
                                <h6 class="title" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                    aria-expanded="true" aria-controls="collapseThree">Order and delivery Info </h6>
                                <form action="{{ route('checkout.new-order') }}" method="post">
                                    @csrf
                                    <section class="checkout-steps-form-content collapse show" id="collapseThree"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="single-form form-default">
                                                    <label>Biling Address</label>
                                                    <div class="row">
                                                        <div class="col-md-12 form-input form">
                                                            <textarea type="text" placeholder="Full address" name="delivery_address"></textarea>
                                                        </div>
                                                        <br>
                                                        <div class="col-md-12 form-input form">
                                                            <label for=""><input type="radio" checked
                                                                    placeholder="" name="payment_method" value="COD">Cash
                                                                on Delivery</label>
                                                            <label for=""><input type="radio" placeholder=""
                                                                    name="payment_method" value="Online">Online
                                                                payment</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-form button">
                                                    <button class="btn" type="submit">confirm order</button>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="checkout-sidebar">
                        <div class="checkout-sidebar-price-table">
                            <h5 class="title">Cart Summary</h5>
                            <div class="sub-total-price">
                                @php($sum = 0)
                                @foreach (Cart::content() as $item)
                                    <div class="total-price">
                                        <p class="value">{{ $item->name }} X {{ $item->price }}</p>
                                        <p class="price">{{ $itemTotal = $item->price * $item->qty }}</p>
                                    </div>
                                    @php($sum = $sum + $itemTotal)
                                @endforeach
                                <div class="total-price shipping">
                                    <p class="value">Shipping:</p>
                                    <p class="price">{{ $shipping = 100 }}</p>
                                </div>
                                <div class="total-price shipping">
                                    <p class="value">Tax:</p>
                                    <p class="price">{{ $tax = $sum * 0.15 }}</p>
                                </div>
                            </div>
                            <div class="total-payable">
                                <div class="payable-price">
                                    <p class="value">Total amount:</p>
                                    <p class="price">{{ $orderTotal = $sum + $tax + $shipping }}</p>
                                </div>
                            </div>

                            <?php
                            Session::put('orderTotal', $orderTotal);
                            Session::put('taxTotal', $tax);
                            Session::put('shippingTotal', $shipping);
                            ?>


                            <div class="price-table-btn button">
                                <a href="javascript:void(0)" class="btn btn-alt">Checkout</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
