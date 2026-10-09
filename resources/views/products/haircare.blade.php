@foreach($haircareProducts as $product)

<div class="product-card" data-category="{{ $product->category }}">

    <div class="product-image">

        <span class="product-badge">POPULAR</span>

        <img src="{{ asset($product->image) }}"
             alt="{{ $product->name }}">

        <!-- Wishlist -->
        <form action="{{ route('wishlist.toggle', $product->id) }}" method="POST">
            @csrf

            <button type="submit"
                    class="wishlist-btn"
                    aria-label="Add to wishlist">

                <i class="fa-regular fa-heart"></i>

            </button>
        </form>

    </div>


    <div class="product-info">

        <span class="product-category">
            {{ strtoupper($product->category) }}
        </span>

        <h3>{{ $product->name }}</h3>


        <div class="product-rating">
            ★★★★★
            <span>(4.9)</span>
        </div>


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
        <form action="{{ route('cart.add', $product->id) }}"
              method="POST">

            @csrf

            <input type="hidden"
                   name="quantity"
                   value="1">

            <button type="submit" class="add-cart-btn">

                <i class="fa-solid fa-cart-shopping"></i>

                Add to Cart

            </button>

        </form>

    </div>

</div>

@endforeach