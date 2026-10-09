@extends('layouts.header')

@section('content')

<div class="login-page">

    <div class="login-box">

        <div class="login-icon">
            <i class="fa-solid fa-lock"></i>
        </div>

        <h2>Forgot Password?</h2>

        <p>
            Enter your email and we'll send you a password reset link.
        </p>

        <form action="#" method="POST">

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

            <button type="submit" class="login-btn">

                <i class="fa-solid fa-paper-plane"></i>

                Send Reset Link

            </button>

        </form>

        <div class="login-register">

            <p>
                Remember your password?

                <a href="{{ route('login') }}">
                    Back to Login
                </a>
            </p>

        </div>

    </div>

</div>

@endsection