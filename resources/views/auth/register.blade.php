@extends('layouts.header')

@section('content')

<div class="login-page">

    <div class="login-box">

        <div class="login-icon">
            <i class="fa-solid fa-user-plus"></i>
        </div>

        <h2>Create Account</h2>

        <p>Create your GlowNest account</p>

        <form action="{{ route('register.store') }}" method="POST">

            @csrf

            <div class="login-field">

                <label for="name">
                    Full Name
                </label>

                <input
                    type="text"
                    id="name"
                    name="name"
                    placeholder="Enter your name"
                    required
                >

            </div>

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
                    placeholder="Create a password"
                    required
                >

            </div>

            <div class="login-field">

                <label for="password_confirmation">
                    Confirm Password
                </label>

                <input
                    type="password"
                    id="password_confirmation"
                    name="password_confirmation"
                    placeholder="Confirm your password"
                    required
                >

            </div>

            <button type="submit" class="login-btn">

                <i class="fa-solid fa-user-plus"></i>

                Create Account

            </button>

        </form>

        <div class="login-register">

            <p>
                Already have an account?

                <a href="{{ route('login') }}">
                    Login
                </a>
            </p>

        </div>

    </div>

</div>

@endsection