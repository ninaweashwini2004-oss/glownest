<!DOCTYPE html>
<html>
<head>
    <title>GlowNest Products</title>
</head>
<body>

<h1>GlowNest Products</h1>

@foreach($products as $product)

    <div>
        <h2>{{ $product->name }}</h2>

        <p>Category: {{ $product->category }}</p>

        <p>Price: ₹{{ $product->price }}</p>

        <p>Stock: {{ $product->stock }}</p>
    </div>

    <hr>

@endforeach

</body>
</html>