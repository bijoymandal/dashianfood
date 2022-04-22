@extends('layouts.frontmaster')
@section('title',"Contact")
@section('main-Content')
<section class="slider slider-inner">
    <ul>
        <li>
            <img src="{{ asset('front/images/inner3.jpg') }}" alt="">
            <div class="text_w">
            <div class="container">
                <div class="text">
                    <h1>Contact Us Now</h1>
                </div>
            </div>
            </div>
        </li>
    </ul>
</section>
<section class="container_section">
    <section class="contact">
        <div class="container">
            <div class="row ">
            <div class="col-md-12">
                <p> Mobile :+66(0)81 597 6819 </p>
                <p>Email:info@anthonysboutique.com </p>
                <p>Open Daily :10:00-23:00 </p>
                <p>Call for free pick up :076-396326 </p>
                <h2> GET IN <span>TOUCH</span> </h2>
                <form id="form" class="blocks" action="#" method="post">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-xl-6">
                        <p> <label>Name:</label><input type="text" class="text" name="name"></p>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6">
                        <p><label>Email:</label><input type="text" class="text" name="email"></p>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6">
                        <p><label>Phone:</label><input type="text" class="text" name="telephone"></p>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6">
                        <p><label>Subject:</label><input type="text" class="text" name="departure" ></p>
                        </div>
                        <div class="col-md-12 col-lg-12 col-xl-12">
                        <p><label>Message:</label><textarea class="textarea" name="comments"></textarea></p>
                        </div>
                        <p><input type="submit" class="btn" value="Submit"></p>
                    </div>
                </form>
            </div>
            </div>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7904.989224743194!2d98.29081083488771!3d7.8431876000000145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30502571b48ba1fb%3A0x5355f7d551200aa5!2sAnthony&#39;s%20Boutique!5e0!3m2!1sen!2sin!4v1647259730727!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>
</section>
@endsection
