<!--================Latest News Area =================-->
<section class="latest_news_area p_100">
    <div class="container">
        <div class="b_center_title">
            <h2>Restaurant Review</h2>
            <p>We Are A Creative Digital Agency. Focused on Growing Brands Online</p>
        </div>
        <div class="l_news_inner">
            <div class="row">
            @foreach($listRestaurant as $restaurant)
                <div class="col-lg-4 col-md-6">
                    <div class="l_news_item">
                        <div class="l_news_img"><a href="#"><img class="img-fluid" src="img/blog/l-news/l-news-1.jpg" alt=""></a></div>
                        <div class="l_news_content">
                            <i class="fa fa-birthday-cake" aria-hidden="true"></i> {{ $restaurant['rating'] }}
                            <a href="{{ URL::route('client-review', $restaurant['restaurant_id']) }}"><h4>{{ $restaurant['name'] }}</h4></a>
                            <p style="word-break: break-all">{{  substr(strip_tags($restaurant->desc,'<pre>,<code>'),0,100) }}{{ strlen(strip_tags($restaurant->desc)) > 100 ? "..." : "" }}.</p>
                            <a class="more_btn" href="{{ URL::route('client-review', $restaurant['restaurant_id']) }}">Go to Review</a>
                        </div>
                    </div>
                </div>
            @endforeach
            <div id="remove-row">
                <button id="btn-more" data-id="{{ $restaurant->restaurant_id }}"> Load More </button>
            </div>
            </div>
        </div>
        
    </div>
</section>
<!--================End Latest News Area =================-->