@extends('client.layout')

@section('content')
<!--================Banner Area =================-->
<section class="banner_area">
  <div class="container">
    <div class="banner_text_inner">
      <h4>Partnership</h4>
      <ul>
        <li><a href="{{ URL::route('client-partnership') }}"><i class="fa fa-credit-card-blank" aria-hidden="true"></i>Partnership</a></li>
      </ul>
    </div>
  </div>
</section>
<!--================End Banner Area =================-->

<!--================Latest News Area =================-->
<section class="latest_news_area p_100">
    <div class="container">
        <div class="b_center_title">
            <h2>Partnership</h2>
            <p>We Are A Creative Digital Agency. Focused on Growing Brands Online</p>
        </div>
        <div class="l_news_inner">
            <div class="row">
                @foreach($listRestaurant as $restaurant)
                <div class="col-lg-4 col-md-6">
                    <div class="l_news_item">
                        <div class="l_news_img"><a href="{{ URL::route('client-review', $restaurant['restaurant_id']) }}"><img class="img-fluid" src="img/blog/l-news/l-news-1.jpg" alt=""></a></div>
                        <div class="l_news_content">
                            <i class="fa fa-birthday-cake" aria-hidden="true"></i> {{ $restaurant['rating'] }}
                            <a href="{{ URL::route('client-review', $restaurant['restaurant_id']) }}"><h4>{{ $restaurant['name'] }}</h4></a>
                            <a class="more_btn" href="{{ URL::route('client-review', $restaurant['restaurant_id']) }}">Go to Review</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!--================End Latest News Area =================-->
@endsection

@section('script')
@endsection