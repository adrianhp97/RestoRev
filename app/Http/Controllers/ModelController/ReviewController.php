<?php

namespace App\Http\Controllers\ModelController;

use App\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReviewController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy($review_id)
    {
        DB::table('review')->where('review_id', '=', $review_id)->delete();
    }

    public static function getAllReview() {
        $review = Review::All();
        return $review->toArray();
    }

    public static function getAllReviewByRestaurant($restaurant_id) {
        return Review::All()->where('restaurant_id', $restaurant_id)->toJson();
    }
}
