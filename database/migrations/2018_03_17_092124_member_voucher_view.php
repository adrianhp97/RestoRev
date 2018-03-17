<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MemberVoucherView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW member_voucher AS
        SELECT restaurant_id, get_promotion.user_id AS user_id, email
        FROM get_promotion JOIN users ON get_promotion.user_id = users.user_id;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXIST member_voucher");
    }
}
