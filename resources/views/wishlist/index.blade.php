
@extends('layouts.header')

@section('content')

<div class="wishlist-page">

    <div class="container">

        <!-- Wishlist Heading -->
        <div class="wishlist-title">

            <h2>
                <i class="fa-regular fa-heart"></i>
                My Wishlist
            </h2>

            <p>
                Your favourite beauty essentials, all in one place.
            </p>

        </div>


        <!-- Success Message -->
        @if(session('success'))

            <div class="wishlist-success">
                <i class="fa-solid fa-circle-check"></i>
                {{ session('success') }}
            </div>

        @endif


        <!-- Wishlist Products -->
        @if($items->count() > 0)

            <div class="row g-4">

                @foreach($items as $item)

                    <div class="col-lg-3 col-md-4 col-sm-6">

                        <div class="wishlist-card">

                            <!-- Product Image -->
                            <div class="wishlist-image">

                                <img
                                    src="{{ asset($item->product->image) }}"
                                    alt="{{ $item->product->name }}"
                                >

                            </div>


                            <!-- Product Details -->
                            <div class="wishlist-details">

                                <h5>
                                    {{ $item->product->name }}
                                </h5>

                                <div class="wishlist-price">
                                    ₹{{ $item->product->price }}
                                </div>


                                <!-- Remove Button -->
                                <form
                                    action="{{ route('wishlist.toggle', $item->product->id) }}"
                                    method="POST"
                                >

                                    @csrf

                                    <button
                                        type="submit"
                                        class="wishlist-remove-btn"
                                    >

                                        <i class="fa-solid fa-heart"></i>

                                        Remove from Wishlist

                                    </button>

                                </form>

                            </div>

                        </div>

                    </div>

                @endforeach

            </div>

            <!-- Continue Shopping -->
            <div class="wishlist-continue-shopping">

                <a
                    href="{{ url('/') }}"
                    class="wishlist-shop-btn"
                >
                    <i class="fa-solid fa-bag-shopping"></i>
                    Continue Shopping
                </a>

            </div>

        @else
            <!-- Empty Wishlist -->
            <div class="empty-wishlist">

                <div class="empty-wishlist-icon">

                    <i class="fa-regular fa-heart"></i>

                </div>

                <h3>
                    Your wishlist is empty
                </h3>

                <p>
                    Add your favourite beauty products here ❤️
                </p>

                <a
                    href="{{ url('/') }}"
                    class="wishlist-shop-btn"
                >
                    <i class="fa-solid fa-bag-shopping"></i>
                    Continue Shopping
                </a>

            </div>

        @endif

    </div>

</div>

@endsection

