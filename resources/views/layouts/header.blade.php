
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>GlowNest</title>

    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >


    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    >


    <!-- GlowNest Main CSS -->
    <link
        rel="stylesheet"
        href="{{ asset('assests/Css/style.css') }}"
    >

</head>


<body>


<!-- =========================================
     TOP HEADER
========================================= -->

<div class="header-top">

    <div class="header-top-left">

        <h5>
            Free Shipping on Orders Above ₹9999
        </h5>

    </div>


    <div class="header-top-right">

        <h5>

            Contact Us +91 1234567890 |

            <a href="#">
                Track Your Order
            </a>

            |

            <a href="#">
                Help
            </a>

        </h5>

    </div>

</div>



<!-- =========================================
     NAVBAR
========================================= -->

<nav class="glownest-navbar">

    <div class="navbar-container">


        <!-- LEFT SIDE : LOGO -->

        <div class="navbar-logo">

            <a href="/" class="glownest-brand">

                <img
                    src="{{ asset('assests/images/glownest-logo.png') }}"
                    alt="GlowNest Logo"
                    class="logo-image"
                >

                <h5>
                    GlowNest
                </h5>

            </a>

        </div>



        <!-- CENTER : SEARCH -->

        <div class="navbar-search">

            <form
                action="{{ route('products.search') }}"
                method="GET"
                class="search-form"
            >

                <input
                    type="search"
                    name="search"
                    placeholder="Search beauty products..."
                    aria-label="Search beauty products"
                >

                <button
                    type="submit"
                    aria-label="Search"
                >

                    <i class="fa-solid fa-magnifying-glass"></i>

                </button>

            </form>

        </div>



        <!-- RIGHT SIDE : LOGIN / WISHLIST / CART -->

        <div class="navbar-actions">


            <!-- Login -->

            @if(Auth::check())

    <div class="user-profile">

        <div class="user-profile-info">

            <div class="user-profile-icon">
                <i class="fa-solid fa-user"></i>
            </div>

            <div class="user-profile-text">
                <span class="welcome-text">Welcome</span>
                <strong>{{ Auth::user()->name }}</strong>
            </div>

        </div>

        <form action="{{ route('logout') }}" method="POST" class="logout-form">

            @csrf

            <button type="submit" class="logout-btn" title="Logout">
                <i class="fa-solid fa-right-from-bracket"></i>
            </button>

        </form>

    </div>

@else

    <a href="{{ route('login') }}" class="navbar-action">
        <i class="fa-solid fa-circle-user"></i>
    </a>

@endif


            <!-- Wishlist -->

            <a
                href="{{ route('wishlist.index') }}"
                class="navbar-action"
            >

                <i class="fa-solid fa-heart"></i>

            </a>



            <!-- Cart -->

            <a
                href="#"
                class="navbar-action cart-link"
            >

                <i class="fa-solid fa-cart-shopping"></i>

                <span>
                    Cart
                </span>

            </a>


        </div>


    </div>

</nav>



<!-- =========================================
     PAGE CONTENT
========================================= -->

@yield('content')



<!-- Bootstrap JS -->

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>


</body>

</html>






