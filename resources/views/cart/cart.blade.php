
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>GlowNest - My Cart</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        body {
            background: #fff8fa;
            font-family: Arial, sans-serif;
            color: #333;
        }

        .cart-header {
            text-align: center;
            padding: 45px 20px 25px;
        }

        .cart-header h1 {
            color: #c45b7c;
            font-weight: 700;
        }

        .cart-header p {
            color: #777;
        }

        .cart-item {
            background: white;
            border: 1px solid #f3dce4;
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 5px 15px rgba(196, 91, 124, 0.08);
        }

        .cart-product-image {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 12px;
            background: #fcecef;
        }

        .product-name {
            color: #333;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .product-category {
            color: #c45b7c;
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .product-price {
            color: #c45b7c;
            font-size: 18px;
            font-weight: 700;
        }

        .old-price {
            color: #999;
            margin-left: 8px;
            font-size: 14px;
        }

        .quantity-box {
            display: inline-flex;
            align-items: center;
            border: 1px solid #e5c5cf;
            border-radius: 8px;
            overflow: hidden;
        }

        .quantity-box button {
            border: none;
            background: #fce4ec;
            color: #c45b7c;
            width: 35px;
            height: 35px;
        }

        .quantity-box span {
            width: 40px;
            text-align: center;
        }

        .remove-btn {
            border: none;
            background: none;
            color: #dc3545;
            font-size: 14px;
        }

        .summary-card {
            background: white;
            border: 1px solid #f3dce4;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(196, 91, 124, 0.08);
            position: sticky;
            top: 20px;
        }

        .summary-title {
            color: #c45b7c;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 12px;
        }

        .total-row {
            border-top: 1px solid #eee;
            padding-top: 15px;
            font-size: 20px;
            font-weight: 700;
        }

        .checkout-btn {
            width: 100%;
            border: none;
            padding: 13px;
            border-radius: 8px;
            background: #c45b7c;
            color: white;
            font-weight: 600;
            margin-top: 15px;
        }

        .checkout-btn:hover {
            background: #a94666;
        }

        .continue-btn {
            color: #c45b7c;
            text-decoration: none;
            font-weight: 600;
        }

        .empty-cart {
            text-align: center;
            background: white;
            padding: 60px 20px;
            border-radius: 15px;
            border: 1px solid #f3dce4;
        }

        .empty-cart i {
            font-size: 60px;
            color: #e7a8ba;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

<div class="container">

    <!-- Header -->
    <div class="cart-header">
        <h1>My Shopping Bag 🛍️</h1>
        <p>Your beauty journey starts here ✨</p>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($cartItems->count() > 0)

        <div class="row">

            <!-- Cart Products -->
            <div class="col-lg-8">

                @foreach($cartItems as $item)

                    <div class="cart-item">

                        <div class="row align-items-center">

                            <!-- Image -->
                            <div class="col-md-2 text-center">

                                <img src="{{ asset($item->product->image) }}"
                                     alt="{{ $item->product->name }}"
                                     class="cart-product-image">

                            </div>

                            <!-- Product Details -->
                            <div class="col-md-4">

                                <div class="product-category">
                                    {{ $item->product->category }}
                                </div>

                                <h5 class="product-name">
                                    {{ $item->product->name }}
                                </h5>

                                <div class="product-price">

                                    ₹{{ number_format(
                                        $item->product->discount_price
                                        ?? $item->product->price,
                                        2
                                    ) }}

                                    @if($item->product->discount_price)

                                        <del class="old-price">
                                            ₹{{ number_format($item->product->price, 2) }}
                                        </del>

                                    @endif

                                </div>

                            </div>

                            <!-- Quantity -->
                            <div class="col-md-3 text-center">

                                <small class="d-block mb-2">
                                    Quantity
                                </small>

                                <div class="quantity-box">

    <!-- Decrease Quantity -->
    <form action="{{ route('cart.update', $item->id) }}"
          method="POST"
          style="display:inline;">

        @csrf
        @method('PATCH')

        <input type="hidden"
               name="quantity"
               value="{{ $item->quantity - 1 }}">

        <button type="submit"
                {{ $item->quantity <= 1 ? 'disabled' : '' }}>
            −
        </button>

    </form>


    <!-- Current Quantity -->
    <span>
        {{ $item->quantity }}
    </span>


    <!-- Increase Quantity -->
    <form action="{{ route('cart.update', $item->id) }}"
          method="POST"
          style="display:inline;">

        @csrf
        @method('PATCH')

        <input type="hidden"
               name="quantity"
               value="{{ $item->quantity + 1 }}">

        <button type="submit">
            +
        </button>

    </form>

</div>

                            </div>

                            <!-- Remove -->
                            <div class="col-md-3 text-end">

                                <form action="{{ route('cart.remove', $item->id) }}"
                                      method="POST">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="remove-btn">

                                        <i class="fa-solid fa-trash"></i>
                                        Remove

                                    </button>

                                </form>

                            </div>

                        </div>

                    </div>

                @endforeach

                <a href="{{ url('/') }}" class="continue-btn">
                    <i class="fa-solid fa-arrow-left"></i>
                    Continue Shopping
                </a>

            </div>


            <!-- Order Summary -->
            <div class="col-lg-4 mt-4 mt-lg-0">

                <div class="summary-card">

                    <h4 class="summary-title">
                        Order Summary
                    </h4>

                    @php
                        $subtotal = 0;

                        foreach ($cartItems as $item) {
                            $price = $item->product->discount_price
                                   ?? $item->product->price;

                            $subtotal += $price * $item->quantity;
                        }

                        $shipping = $subtotal >= 999 ? 0 : 50;

                        $total = $subtotal + $shipping;
                    @endphp

                    <div class="summary-row">
                        <span>Subtotal</span>
                        <span>₹{{ number_format($subtotal, 2) }}</span>
                    </div>

                    <div class="summary-row">

                        <span>Shipping</span>

                        <span>
                            @if($shipping == 0)
                                <strong class="text-success">FREE</strong>
                            @else
                                ₹{{ number_format($shipping, 2) }}
                            @endif
                        </span>

                    </div>

                    <div class="summary-row total-row">

                        <span>Total</span>

                        <span>
                            ₹{{ number_format($total, 2) }}
                        </span>

                    </div>

                    <a href="{{ route('checkout.index') }}" class="checkout-btn">
                     <i class="fa-solid fa-lock"></i>
                          Proceed to Checkout
                    </a>
                </div>

            </div>

        </div>

    @else

        <!-- Empty Cart -->

        <div class="empty-cart">

            <i class="fa-solid fa-bag-shopping"></i>

            <h3>Your cart is empty</h3>

            <p>
                Looks like you haven't added any beauty products yet.
            </p>

            <a href="{{ url('/') }}"
               class="btn"
               style="background:#c45b7c;color:white;">
                Start Shopping
            </a>

        </div>

    @endif

</div>

</body>
</html>
