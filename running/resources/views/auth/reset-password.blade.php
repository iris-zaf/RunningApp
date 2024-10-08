@extends('frontend.layouts.master')

@section('content')
    <!--=============================
                                                                                                                                                    BREADCRUMB START
                                                                                                                                                ==============================-->
    <section class="fp__breadcrumb" style="background: url({{ asset('frontend/images/counter_bg.jpg') }});">
        <div class="fp__breadcrumb_overlay">
            <div class="container">
                <div class="fp__breadcrumb_text">
                    <h1>reset password</h1>
                    <ul>
                        {{-- When the user clicks on the "home" link, nothing happens because the JavaScript code after javascript: is empty (;) --}}
                        <li><a href="javascript:;">home</a></li>//
                        <li><a href="#">reset password</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
                                                                                                                                                    BREADCRUMB END
                                                                                                                                                ==============================-->


    <!--=========================
                                                                                                                                                    FORGOT PASSWORD START
                                                                                                                                                ==========================-->
    <section class="fp__signin" style="background: url({{ asset('frontend/images/login_bg.jpg') }});">
        <div class="fp__signin_overlay pt_125 xs_pt_95 pb_100 xs_pb_70">
            <div class="container">
                <div class="row wow fadeInUp" data-wow-duration="1s">
                    <div class="col-xxl-5 col-xl-6 col-md-9 col-lg-7 m-auto">
                        <div class="fp__login_area">
                            <h2>Welcome back!</h2>
                            <p>forgot password</p>
                            <form method="POST" action="{{ route('password.store') }}">
                                @csrf
                                <div class="row">
                                    <!-- Password Reset Token -->
                                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                    <div class="col-xl-12">
                                        <div class="fp__login_imput">
                                            <label>Email</label>
                                            <input type="email" value="{{ old('email', $request->email) }}"
                                                placeholder="Email" name="email">
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                        <div class="fp__login_imput">
                                            <label>Password</label>
                                            <input type="password" value="{{ old('email') }}" placeholder="Password"
                                                name="password">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="fp__login_imput">
                                            <label>confirm password</label>
                                            <input type="password" placeholder="Confirm Password"
                                                name="password_confirmation">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="fp__login_imput">
                                            <button type="submit" class="common_btn">Reset Password</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <p class="create_account d-flex justify-content-between">
                                <a href="{{ route('login') }}">login</a>
                                <a href="{{ route('register') }}">Create Account</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
                                                                                                                                                    FORGOT PASSWORD END
                                                                                                                                        ==========================-->
@endsection
