@extends('client.layout')

@section('content')
<!--================Banner Area =================-->
<section class="banner_area">
  <div class="container">
    <div class="banner_text_inner">
      <h4>Review Restaurant Name</h4>
      <ul>
        <li><a href="{{ URL::route('client-index') }}"><i class="fa fa-file" aria-hidden="true"></i>Home</a></li>
        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Restaurant Name</a></li>                    
      </ul>
    </div>
  </div>
</section>
<!--================End Banner Area =================-->

<!--================Static Area =================-->
<section class="static_area">
<div class="container">
    <div class="static_inner">
        <div class="row">
            <div class="col-lg-9">
                <div class="static_main_content">
                    <div class="static_img">
                        <img class="img-fluid" src="img/static-1.jpg" alt="">
                    </div>
                    <div class="static_text">
                        <p>Tiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea. Liusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, qui s nostrud exercitation ullamLorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <p>Duis aute irure Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                    </div>
                    <div class="static_text2">
                        <h3>The best Wordpress Theme 2017</h3>
                        <p>Tiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea. Liusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, qui s nostrud exercitation ullamLorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="media">
                        <div class="d-flex">
                            <h6>“</h6>
                        </div>
                        <div class="media-body">
                            <p>“If you’re going to try, go all the way. There is no other feeling like that. You will be alone with the gods, and the nights will flame with fire. You will ride life straight to perfect laughter. It’s the only good fight there is.” </p>
                            <h5><a href="#">Aigars Silkalns</a> - CEO DeerCreative</h5>
                        </div>
                    </div>
                    <div class="static_text2">
                        <h3>Unique Design & Easy Custom</h3>
                        <p>Tiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea. Liusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, qui s nostrud exercitation ullamLorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <p>Duis aute irure Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="right_sidebar_area">
                    <aside class="right_widget r_news_widget">
                        <div class="r_w_title">
                            <h3>Recent Review</h3>
                        </div>
                        <div class="news_inner">
                            <div class="news_item">
                                <a href="#"><h4>In order to succeed, we must first believe that we can.</h4></a>
                                <a href="#"><h6>October 7, 2017</h6></a>
                            </div>
                            <div class="news_item">
                                <a href="#"><h4>The way to get started is to quit talking and begin doing.</h4></a>
                                <a href="#"><h6>October 7, 2017</h6></a>
                            </div>
                            <div class="news_item">
                                <a href="#"><h4>In order to succeed, we must first believe that we can.</h4></a>
                                <a href="#"><h6>October 7, 2017</h6></a>
                            </div>
                            <div class="news_item">
                                <a href="#"><h4>The way to get started is to quit talking and begin doing.</h4></a>
                                <a href="#"><h6>October 7, 2017</h6></a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>

    @include('client.review_user')
</div>
</section>
<!--================End Static Area =================-->
@endsection

@section('script')
@endsection