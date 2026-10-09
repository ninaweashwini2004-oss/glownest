@extends('layouts.header')

@section('content')

<div class="order-success-page">

    <div class="order-success-box">

        <div class="order-success-icon">
            <i class="fa-solid fa-check"></i>
        </div>

        <h2>Order Placed Successfully!</h2>

        <p>
            Thank you for shopping with GlowNest.
            Your order has been placed successfully.
        </p>

        <div class="order-id-box">

            <span>Order ID</span>

            <strong>
                #{{ $orderId }}
            </strong>

        </div>

        <div class="success-summary">

            <div>
                <span>Items</span>
                <strong>{{ $cartItems->sum('quantity') }}</strong>
            </div>

            <div>
                <span>Subtotal</span>
                <strong>₹{{ number_format($subtotal, 2) }}</strong>
            </div>

            <div>
                <span>Delivery</span>

                <strong>
                    @if($delivery == 0)
                        FREE
                    @else
                        ₹{{ number_format($delivery, 2) }}
                    @endif
                </strong>

            </div>

            <div class="success-total">

                <span>Total Paid</span>

                <strong>
                    ₹{{ number_format($total, 2) }}
                </strong>

            </div>

        </div>

        <div class="success-message">

            <i class="fa-solid fa-truck"></i>

            Your order is being prepared.
            You will receive your order soon.

        </div>

        <a
            href="{{ url('/') }}"
            class="continue-shopping-btn"
        >
            <i class="fa-solid fa-bag-shopping"></i>
            Continue Shopping
        </a>

    </div>

</div>

@endsection