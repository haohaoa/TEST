@extends('frontend.master')
@section('title','login || register')
@section('main-content')
@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="main-wrapper">

    <!-- main-content-wrap start -->
    <div class="main-content-wrap section-ptb login-and-register-page" style="background: url('https://images2.thanhnien.vn/528068263637045248/2024/1/25/e093e9cfc9027d6a142358d24d2ee350-65a11ac2af785880-17061562929701875684912.jpg') no-repeat center center; background-size: cover;">
        <div class="container">
            <div class="row justify-content-end"> <!-- Aligning form to the right -->
                <div class="col-lg-5 col-md-12">
                    <div class="login-register-wrapper" style="background-color: rgba(255, 255, 255, 0.8); padding: 20px; border-radius: 10px;">
                        <!-- login-register-tab-list start -->
                        <div class="login-register-tab-list nav">
                            <a class="active" data-bs-toggle="tab" href="#lg1">
                                <h4> login </h4>
                            </a>
                            <a data-bs-toggle="tab" href="#lg2">
                                <h4> register </h4>
                            </a>
                        </div>
                        <!-- login-register-tab-list end -->
                        <div class="tab-content">
                            <div id="lg1" class="tab-pane active">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <img src="https://inkythuatso.com/uploads/thumbnails/800/2021/12/logo-truong-dai-hoc-kien-truc-da-nang-inkythuatso-01-25-15-58-10.jpg" alt="Logo" style="display: block; margin: 0 auto 20px;">
                                        <form action="{{ route('post.login') }}" method="post">
                                            @csrf
                                            <div class="login-input-box">
                                                <input type="text" name="user-name" placeholder="Email" required>
                                                <input type="password" name="user-password" placeholder="Password" required>
                                            </div>
                                            <div class="button-box">
                                                <div class="login-toggle-btn">
                                                    <input type="checkbox">
                                                    <label>Remember me</label>
                                                    <a href="#">Forgot Password?</a>
                                                </div>
                                                <div class="button-box">
                                                    <button class="login-btn btn" type="submit"><span>Login</span></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div id="lg2" class="tab-pane">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <img src="https://inkythuatso.com/uploads/thumbnails/800/2021/12/logo-truong-dai-hoc-kien-truc-da-nang-inkythuatso-01-25-15-58-10.jpg" alt="Logo" style="display: block; margin: 0 auto 20px;">
                                        <form action="{{ route('register.login')}}" method="POST">
                                            @csrf
                                            <div class="login-input-box">
                                                <input type="text" name="name" placeholder="Enter your username" required>
                                                <input type="password" name="password" placeholder="Enter your password" required>
                                                <input type="password" name="password_confirmation" placeholder="Confirm your password" required>
                                                <input name="email" placeholder="Enter your email" type="email" required>
                                            </div>
                                            <div class="button-box">
                                                <button class="register-btn btn" type="submit"><span>Register</span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main-content-wrap end -->

@endsection
