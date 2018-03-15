<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GetPromotion extends Migration
{
    public function up()
    {
        Schema::create('get_promotion', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('restaurant_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('get_promotion', function($table) {
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->foreign('restaurant_id')->references('restaurant_id')->on('restaurant');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('get_promotion');
    }
}