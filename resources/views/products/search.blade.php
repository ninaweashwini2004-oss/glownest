@extends('layouts.header')

@section('content')

<div class="search-results-page">

    <div class="container">

        <div class="search-results-title">

            @if($query)

                <h2>
                    Search Results for "{{ $query }}"
                </h2>

            @endif

        </div>


        @if($products->count() > 0)

            <div class="row g-4">

                @foreach($products as $product)

                    <div class="col-lg-3 col-md-4 col-sm-6">

                        <div class="product-card">

                            <div class="product-image">

                                <img
                                    src="{{ asset($product->image) }}"
                                    alt="{{ $product->name }}"
                                >

                                <!-- Wishlist -->

                                <form
                                    action="{{ route('wishlist.toggle', $product->id) }}"
                                    method="POST"
                                >

                                    @csrf

                                    <button
                                        type="submit"
                                        class="wishlist-btn"
                                        aria-label="Add to wishlist"
                                    >

                                        <i class="fa-regular fa-heart"></i>

                                    </button>

                                </form>

                            </div>


                            <div class="product-info">

                                <span class="product-category">
                                    {{ strtoupper($product->category) }}
                                </span>

                                <h3>
                                    {{ $product->name }}
                                </h3>


                                <div class="product-price">

                                    <strong>
                                        ₹{{ number_format($product->discount_price ?? $product->price, 2) }}
                                    </strong>

                                    @if($product->discount_price)

                                        <del>
                                            ₹{{ number_format($product->price, 2) }}
                                        </del>

                                    @endif

                                </div>


                                <!-- Add to Cart -->

                                <form
                                    action="{{ route('cart.add', $product->id) }}"
                                    method="POST"
                                >

                                    @csrf

                                    <input
                                        type="hidden"
                                        name="quantity"
                                        value="1"
                                    >

                                    <button
                                        type="submit"
                                        class="add-cart-btn"
                                    >

                                        <i class="fa-solid fa-cart-shopping"></i>

                                        Add to Cart

                                    </button>

                                </form>

                            </div>

                        </div>

                    </div>

                @endforeach

            </div>


        @else

            <div class="no-search-results">

                <div class="no-search-icon">

                    <i class="fa-solid fa-magnifying-glass"></i>

                </div>

                <h3>
                    Product not available
                </h3>

                <p>
                    Sorry, we couldn't find any product matching
                    "{{ $query }}".
                </p>

                <a href="{{ url('/') }}" class="wishlist-shop-btn">
                    Continue Shopping
                </a>

            </div>

        @endif

    </div>

</div>

@endsection