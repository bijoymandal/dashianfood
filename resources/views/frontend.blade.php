@extends('layouts.frontmaster')
@section('main-Content')
    @include('layouts.slider')
    <section class="container_section">
        @include('frontend.category')
        <section class="products">
            <div class="container">
                <div class="row">
                <h2>our Products</h2>
                <div class="col-md-3 col-lg-3 col-xl-3">
                    <div class="products_w">
                        <img src="{{ asset('front/images/product1.jpg') }}" alt=" ">
                        <p>Kohinoor Traditional Authentic Basmati Rice 5kg</p>
                        <div class="price_w">
                            <div class="price">$ 110.00</div>
                            <div class="add-cart"><a href="#">Add to card</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3">
                    <div class="products_w">
                        <img src="{{ asset('front/images/product2.jpg') }}" alt=" ">
                        <p>Kohinoor Traditional Authentic Basmati Rice 5kg</p>
                        <div class="price_w">
                            <div class="price">$ 110.00</div>
                            <div class="add-cart"><a href="#">Add to card</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3">
                    <div class="products_w">
                        <img src="{{ asset('front/images/product3.jpg') }}" alt=" ">
                        <p>Kohinoor Traditional Authentic Basmati Rice 5kg</p>
                        <div class="price_w">
                            <div class="price">$ 110.00</div>
                            <div class="add-cart"><a href="#">Add to card</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3">
                    <div class="products_w">
                        <img src="{{ asset('front/images/product4.jpg') }}" alt=" ">
                        <p>Kohinoor Traditional Authentic Basmati Rice 5kg</p>
                        <div class="price_w">
                            <div class="price">$ 110.00</div>
                            <div class="add-cart"><a href="#">Add to card</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3">
                    <div class="products_w">
                        <img src="{{ asset('front/images/product1.jpg') }}" alt=" ">
                        <p>Kohinoor Traditional Authentic Basmati Rice 5kg</p>
                        <div class="price_w">
                            <div class="price">$ 110.00</div>
                            <div class="add-cart"><a href="#">Add to card</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3">
                    <div class="products_w">
                        <img src="{{ asset('front/images/product2.jpg') }}" alt=" ">
                        <p>Kohinoor Traditional Authentic Basmati Rice 5kg</p>
                        <div class="price_w">
                            <div class="price">$ 110.00</div>
                            <div class="add-cart"><a href="#">Add to card</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3">
                    <div class="products_w">
                        <img src="{{ asset('front/images/product3.jpg') }}" alt=" ">
                        <p>Kohinoor Traditional Authentic Basmati Rice 5kg</p>
                        <div class="price_w">
                            <div class="price">$ 110.00</div>
                            <div class="add-cart"><a href="#">Add to card</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3">
                    <div class="products_w">
                        <img src="{{ asset('front/images/product4.jpg') }}" alt=" ">
                        <p>Kohinoor Traditional Authentic Basmati Rice 5kg</p>
                        <div class="price_w">
                            <div class="price">$ 110.00</div>
                            <div class="add-cart"><a href="#">Add to card</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3">
                    <div class="products_w">
                        <img src="{{ asset('front/images/product1.jpg') }}" alt=" ">
                        <p>Kohinoor Traditional Authentic Basmati Rice 5kg</p>
                        <div class="price_w">
                            <div class="price">$ 110.00</div>
                            <div class="add-cart"><a href="#">Add to card</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3">
                    <div class="products_w">
                        <img src="{{ asset('front/images/product2.jpg') }}" alt=" ">
                        <p>Kohinoor Traditional Authentic Basmati Rice 5kg</p>
                        <div class="price_w">
                            <div class="price">$ 110.00</div>
                            <div class="add-cart"><a href="#">Add to card</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3">
                    <div class="products_w">
                        <img src="{{ asset('front/images/product3.jpg') }}" alt=" ">
                        <p>Kohinoor Traditional Authentic Basmati Rice 5kg</p>
                        <div class="price_w">
                            <div class="price">$ 110.00</div>
                            <div class="add-cart"><a href="#">Add to card</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3">
                    <div class="products_w">
                        <img src="{{ asset('front/images/product4.jpg') }}" alt=" ">
                        <p>Kohinoor Traditional Authentic Basmati Rice 5kg</p>
                        <div class="price_w">
                            <div class="price">$ 110.00</div>
                            <div class="add-cart"><a href="#">Add to card</a></div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
        <section class="paymentp_bg">
            <div class="container">
                <div class="row">
                <div class="col-md-3 col-lg-3 col-xl-3">
                    <img src="{{ asset('front/images/icon1.png')}}"  alt="">
                    <h4>Payment & Delivery</h4>
                    <p>Free shipping for orders over $50</p>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3">
                    <img src="{{ asset('front/images/icon2.png')}}"  alt="">
                    <h4>Payment & Delivery</h4>
                    <p>Free 100% money back guarantee</p>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3">
                    <img src="{{ asset('front/images/icon3.png')}}"  alt="">
                    <h4>Payment & Delivery</h4>
                    <p>100% Secqure payment</p>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3">
                    <img src="{{ asset('front/images/icon4.png')}}"  alt="">
                    <h4>Payment & Delivery</h4>
                    <p>Alway online feedback 24/7</p>
                </div>
                </div>
            </div>
        </section>
        @include('frontend.testimonials')
    </section>
@endsection
