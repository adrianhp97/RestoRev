<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ModelController\RestaurantController;
use App\Http\Controllers\ModelController\TopRestaurantController;

class HomeController extends Controller
{
    public function index()
    {
        $topRestaurant = TopRestaurantController::getAllTopRestaurant();
        $listRestaurant = RestaurantController::getLimitRestaurant();
        $data = array(
            'topRestaurant' => $topRestaurant,
            'listRestaurant' => $listRestaurant
        );
        return view('client.index')
            ->with($data);
    }
    
    public function loadDataAjax(Request $request)
    {
        $output = '';
        $restaurant_id = $request->restaurant_id;
        
        $restaurant = RestaurantController::getLimitRestaurantByCondition($restaurant_id);
        
        if(!empty($restaurant))
        {
            foreach($restaurant as $res)
            {
                $url = url('review/'.$res->name);
                $body = substr(strip_tags($res->desc),0,100);
                $body .= strlen(strip_tags($res->desc)) > 100 ? " ..." : "";
                                
                // $output .= '<div class="col-lg-4 col-md-6">
                //         <div class="l_news_item">
                //             <div class="l_news_img"><a href="'.$url.'"><img class="img-fluid" src="img/blog/l-news/l-news-1.jpg" alt=""></a></div>
                //             <div class="l_news_content">
                //                 <i class="fa fa-birthday-cake" aria-hidden="true"></i>'.$res['rating'].'
                //                 <a href="'.$url.'"</h4>'.$res['name'].'</a>
                //                 <p style="word-break: break-all">'.$body.'</p>
                //                 <a class="more_btn" href="'.$url.'">Go to Review</a>
                //             </div>
                //         </div>
                //     </div>';
            }
            
            $output .= '<div id="remove-row">
                            <button id="btn-more" data-id="'.$restaurant[5]->restaurant_id.'"> Load More </button>
                        </div>';

            return $restaurant;
        }
    }
}
