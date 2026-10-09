@extends('layouts.header')

@section('content')

<div class="login-page">

    <div class="login-box">

        <div class="login-icon">
            <i class="fa-solid fa-circle-user"></i>
        </div>

        <h2>Welcome Back</h2>

        <p>Login to your GlowNest account</p>

        <form action="{{ route('login.store') }}" method="POST">

            @csrf

            <div class="login-field">

                <label for="email">
                    Email Address
                </label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="Enter your email"
                    required
                >

            </div>


            <div class="login-field">

                <label for="password">
                    Password
                </label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Enter your password"
                    required
                >

            </div>

            <div class="forgot-password">
            <a href="{{ route('password.request') }}">
              Forgot Password?
            </a>
            </div>


            <button type="submit" class="login-btn">

                <i class="fa-solid fa-right-to-bracket"></i>

                Login

            </button>

        </form>


        <div class="login-register">

            <p>
                Don't have an account?

                <a href="{{ route('register') }}">
                    Create Account
                </a>
            </p>

        </div>

    </div>

</div>

@endsection