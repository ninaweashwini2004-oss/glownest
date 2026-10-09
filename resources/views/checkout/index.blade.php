@extends('layouts.header')

@section('content')

<div class="checkout-page">

    <div class="container">

        <!-- PAGE TITLE -->
        <div class="checkout-title">
            <h2>Checkout</h2>
            <p>Complete your order securely and easily.</p>
        </div>

        @if($cartItems->count() > 0)

        <!-- MAIN CHECKOUT FORM -->
        <form action="{{ route('checkout.place') }}" method="POST">
            @csrf

            <div class="row g-4">

                <!-- LEFT SIDE -->
                <div class="col-lg-7">

                    <!-- CONTACT DETAILS -->
                    <div class="checkout-card">

                        <div class="checkout-card-title">
                            <i class="fa-solid fa-user"></i>
                            <h4>Contact Information</h4>
                        </div>

                        <div class="row">

                            <div class="col-md-6 mb-3">

                                <label>Full Name</label>

                                <input
                                    type="text"
                                    name="name"
                                    class="checkout-input"
                                    placeholder="Enter your full name"
                                    required
                                >

                            </div>

                            <div class="col-md-6 mb-3">

                                <label>Mobile Number</label>

                                <input
                                    type="tel"
                                    name="phone"
                                    class="checkout-input"
                                    placeholder="Enter mobile number"
                                    required
                                >

                            </div>

                            <div class="col-12 mb-3">

                                <label>Email Address</label>

                                <input
                                    type="email"
                                    name="email"
                                    class="checkout-input"
                                    placeholder="Enter email address"
                                    required
                                >

                            </div>

                        </div>

                    </div>


                    <!-- DELIVERY ADDRESS -->
                    <div class="checkout-card">

                        <div class="checkout-card-title">

                            <i class="fa-solid fa-location-dot"></i>

                            <h4>Delivery Address</h4>

                        </div>

                        <div class="row">

                            <div class="col-12 mb-3">

                                <label>Address</label>

                                <textarea
                                    name="address"
                                    class="checkout-input"
                                    rows="3"
                                    placeholder="House / Flat No., Street, Area"
                                    required
                                ></textarea>

                            </div>

                            <div class="col-md-6 mb-3">

                                <label>City</label>

                                <input
                                    type="text"
                                    name="city"
                                    class="checkout-input"
                                    placeholder="Enter city"
                                    required
                                >

                            </div>

                            <div class="col-md-6 mb-3">

                                <label>State</label>

                                <input
                                    type="text"
                                    name="state"
                                    class="checkout-input"
                                    placeholder="Enter state"
                                    required
                                >

                            </div>

                            <div class="col-md-6 mb-3">

                                <label>PIN Code</label>

                                <input
                                    type="text"
                                    name="pincode"
                                    class="checkout-input"
                                    placeholder="Enter PIN code"
                                    required
                                >

                            </div>

                        </div>

                    </div>


                    <!-- PAYMENT -->
                    <div class="checkout-card">

                        <div class="checkout-card-title">

                            <i class="fa-solid fa-credit-card"></i>

                            <h4>Payment Method</h4>

                        </div>


                        <div class="payment-option">

                            <input
                                type="radio"
                                name="payment_method"
                                value="cod"
                                id="cod"
                                checked
                            >

                            <label for="cod">

                                <i class="fa-solid fa-money-bill-wave"></i>

                                <div>
                                    <strong>Cash on Delivery</strong>
                                    <small>Pay when your order arrives</small>
                                </div>

                            </label>

                        </div>


                        <div class="payment-option">

                            <input
                                type="radio"
                                name="payment_method"
                                value="upi"
                                id="upi"
                            >

                            <label for="upi">

                                <i class="fa-solid fa-mobile-screen-button"></i>

                                <div>
                                    <strong>UPI</strong>
                                    <small>Google Pay, PhonePe, Paytm etc.</small>
                                </div>

                            </label>

                        </div>


                        <div class="payment-option">

                            <input
                                type="radio"
                                name="payment_method"
                                value="card"
                                id="card"
                            >

                            <label for="card">

                                <i class="fa-solid fa-credit-card"></i>

                                <div>
                                    <strong>Credit / Debit Card</strong>
                                    <small>Secure card payment</small>
                                </div>

                            </label>

                        </div>

                    </div>

                </div>


                <!-- RIGHT SIDE -->
                <div class="col-lg-5">

                    <div class="order-summary">

                        <h4>
                            <i class="fa-solid fa-bag-shopping"></i>
                            Order Summary
                        </h4>


                        <!-- PRODUCTS -->

                        @php
                            $subtotal = 0;
                        @endphp


                        @foreach($cartItems as $item)

                            @php

                                $price = $item->product->discount_price
                                    ?? $item->product->price;

                                $itemTotal = $price * $item->quantity;

                                $subtotal += $itemTotal;

                            @endphp


                            <div class="checkout-product">

                                <img
                                    src="{{ asset($item->product->image) }}"
                                    alt="{{ $item->product->name }}"
                                >

                                <div class="checkout-product-info">

                                    <h5>
                                        {{ $item->product->name }}
                                    </h5>

                                    <p>
                                        Qty: {{ $item->quantity }}
                                    </p>

                                    <strong>
                                        ₹{{ number_format($itemTotal, 2) }}
                                    </strong>

                                </div>

                            </div>

                        @endforeach


                        <!-- SUBTOTAL -->

                        <div class="summary-line">

                            <span>Subtotal</span>

                            <strong>
                                ₹{{ number_format($subtotal, 2) }}
                            </strong>

                        </div>


                        <!-- DELIVERY -->

                        @php
                            $delivery = $subtotal >= 999 ? 0 : 49;
                            $total = $subtotal + $delivery;
                        @endphp


                        <div class="summary-line">

                            <span>Delivery</span>

                            <strong>

                                @if($delivery == 0)
                                    FREE
                                @else
                                    ₹49
                                @endif

                            </strong>

                        </div>


                        <!-- TOTAL -->

                        <div class="summary-total">

                            <span>Total</span>

                            <strong>
                                ₹{{ number_format($total, 2) }}
                            </strong>

                        </div>


                        <!-- PLACE ORDER -->

                        <button
                            type="submit"
                            class="place-order-btn"
                        >

                            <i class="fa-solid fa-lock"></i>

                            Place Order

                        </button>


                        <div class="secure-checkout">

                            <i class="fa-solid fa-shield-halved"></i>

                            Secure Checkout

                        </div>

                    </div>

                </div>

            </div>

        </form>

        @else

            <!-- EMPTY CART -->

            <div class="empty-checkout">

                <i class="fa-solid fa-cart-shopping"></i>

                <h3>Your cart is empty</h3>

                <p>
                    Add some beautiful products before checking out.
                </p>

                <a
                    href="{{ url('/') }}"
                    class="wishlist-shop-btn"
                >
                    Continue Shopping
                </a>

            </div>

        @endif

    </div>

</div>

@endsection