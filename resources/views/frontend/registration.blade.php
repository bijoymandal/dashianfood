@extends('layouts.frontmaster')
@section('title','user Registration')
@section('main-Content')
<section class="container_section">
    <section class="login_page">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12"></div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 mt-2 mb-2">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 login_a">
                            <h3>Already have an account yet? </h3>
                            <a href="{{ route('userlogin') }}">Login.</a>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 login">
                            <h2>Supplier Registration and Account</h2>
                            <p>Registering for this site is easy. Just fill in the fields below, and we'll get a new
                                account set up for you in no time.</p>
                            <!--<h3>Account Details</h3>-->
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="inputslidercaption">Name <span>*</span></label>
                                    <input type="text" name="name" class="form-control" value="" placeholder="Your name"
                                        required="">
                                </div>
                                <div class="form-group">
                                    <label for="inputslidercaption">Email <span>*</span></label>
                                    <input type="email" name="email" class="form-control" value=""
                                        placeholder="Your email"
                                        pattern="^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$"
                                        required="">
                                </div>
                                <div class="form-group">
                                    <label for="inputslidercaption2">Phone :<span>*</span></label>
                                    <input name="phone" type="tel" class="form-control" placeholder="Enter Phone"
                                        value="" required="">
                                </div>
                                <div class="form-group">
                                    <label for="inputslidercaption">Password <span>*</span></label>
                                    <input type="password" class="form-control" name="password" value=""
                                        placeholder="Your password" required="">
                                </div>
                                <div class="form-group">
                                    <label for="inputslidercaption">Confirm Password <span>*</span></label>
                                    <input type="password" class="form-control" name="confirm_password" value=""
                                        placeholder="Retype password" required="">
                                </div>
                                <div class="form-group"><button type="submit" class="btn btn-info">Submit</button></div>
                            </form>
                            <p>Go Back? <a href="{{ URL::to('/') }}">Home</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12"></div>
            </div>
        </div>
    </section>
</section>
@endsection
