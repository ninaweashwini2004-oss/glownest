<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GlowNest - Beauty & Cosmetics Store</title>

    <!--Style.Css --->
    <link rel="stylesheet" href="{{ asset('assests/Css/style.css') }}">
    
    <!-- Bootstrap CSS CDN -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

     
<!-- Font Awesome CDN -->
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
    
    @include('layouts.header')

@if(session('success'))
    <div class="success-message">
        <i class="fa-solid fa-circle-check"></i>
        {{ session('success') }}
    </div>
@endif

    
<!-- Categories Section -->
<section class="categories-section">
    <div class="categories-container">

        <a href="#" class="category-item" data-category="skincare">
            <i class="fa-solid fa-pump-soap"></i>
            <span>Skincare</span>
        </a>

        <a href="#" class="category-item" data-category="makeup">
            <i class="fa-solid fa-palette"></i>
            <span>Makeup</span>
        </a>

        <a href="#" class="category-item" data-category="haircare">
            <i class="fa-solid fa-wand-magic-sparkles"></i>
            <span>Haircare</span>
        </a>

        <a href="#" class="category-item" data-category="fragrance">
            <i class="fa-solid fa-spray-can-sparkles"></i>
            <span>Fragrance</span>
        </a>

        <a href="#" class="category-item" data-category="accessories">
            <i class="fa-solid fa-gem"></i>
            <span>Beauty Accessories</span>
        </a>

        <a href="#" class="category-item" data-category="all">
            <i class="fa-solid fa-border-all"></i>
            <span>All Products</span>
        </a>

    </div>
</section>


<!-- Featured Products Section --> 
<section class="products-section"> 
    <div class="products-heading"> 
        <span class="section-subtitle">YOUR BEAUTY, YOUR GLOW</span> 
        <h2>Our Bestsellers</h2> 
        <p>Discover your new favourite beauty essentials.</p> 
    </div> 

    <!-- Selected Category Heading -->
    <div class="category-heading">
    <h2 id="products-title">All Products</h2>
     </div>
 
    <div class="products-container"> 
 
        {{-- Skincare Products --}} 
        @include('products.skincare') 
 
        {{-- Haircare Products --}} 
        @include('products.haircare') 
 
        {{-- Beauty Accessories Products --}} 
        @include('products.accessories') 
 
        {{-- Makeup Products --}} 
        @include('products.makeup') 
 
        {{-- Fragrance Products --}} 
        @include('products.fragrance') 
 
 
    </div>     
 
</section>


    @include('layouts.footer')

    <!-- JS --->
   <script src="{{ asset('assests/js/category.js') }}"></script>
</body>
</html>