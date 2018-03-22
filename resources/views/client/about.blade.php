@extends('client.layout')

@section('content')
<!--================Banner Area =================-->
<section class="banner_area">
  <div class="container">
    <div class="banner_text_inner">
      <h4>About Eclair</h4>
      <ul>
        <li><a href="{{ URL::route('client-about') }}"><i class="fa fa-address-book" aria-hidden="true"></i>About</a></li>
      </ul>
    </div>
  </div>
</section>
<!--================End Banner Area =================-->

<!--================Contact Us Area =================-->
<section class="contact_us_area">
  <div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="contact_text">
                <div class="main_title">
                    <h2>Contact Us</h2>
                    <p>There are many ways to contact us. You may drop us a line, give us a call or send an email, choose what suits you the most</p>
                </div>
                <div class="contact_d_list">
                    <div class="contact_d_list_item">
                        <a href="#">(800) 686-6688</a>
                        <a href="#">info.deercreative@gmail.com</a>
                    </div>
                    <div class="contact_d_list_item">
                        <p>40 Baria Sreet 133/2 <br /> NewYork City, US</p>
                    </div>
                    <div class="contact_d_list_item">
                        <p>Open hours: 8.00-18.00 Mon-Fri <br />Sunday: Closed</p>
                    </div>
                </div>
                <div class="static_social">
                    <div class="main_title">
                        <h2>Follow Us:</h2>
                    </div>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="contact_form">
                <div class="main_title">
                    <h2>Get In Touch With Us!</h2>
                    <p>Fill out the form below to recieve a free and confidential.</p>
                </div>
                <form class="contact_us_form row" action="/insertContact" method="post" id="contactForm" novalidate="novalidate">
                    <div class="form-group col-lg-12">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                    </div>
                    <div class="form-group col-lg-12">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group col-lg-12">
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Website">
                    </div>
                    <div class="form-group col-lg-12">
                        <textarea class="form-control" name="message" id="message" rows="1" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group col-md-12">
                        <button type="submit" value="submit" class="btn submit_btn2 form-control">Send Messages</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>
</section>
<!--================End Contact Us Area =================-->
@endsection

@section('script')
@endsection