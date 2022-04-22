@extends('layouts.frontmaster')
@section('title','Registration and Login page')
@section('main-Content')
<section class="container_section">
    <section class="login_page">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12"></div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 mt-2 mb-2">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 login">
                            <h2>Login Account</h2>
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="inputslidercaption">Email <span>*</span></label>
                                    <input type="email" name="email" class="form-control" value=""
                                        placeholder="Your email"
                                        pattern="^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$"
                                        required="">
                                </div>
                                <div class="form-group">
                                    <label for="inputslidercaption">Password <span>*</span></label>
                                    <input type="password" class="form-control" name="password" value=""
                                        placeholder="Your password" required="">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-info">Submit</button>
                                </div>
                            </form>
                            <p>if you forgot your password? <a href="#">forgot password</a></p>
                            <p>Go Back? <a href="{{ URL::to('/') }}">Home</a></p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 create_a">
                            <h3>New to grow cleaners ? Create an account</h3>
                            <a href="{{ route('useregister') }}">Registration</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12"></div>
            </div>
        </div>
    </section>
</section>
@endsection
