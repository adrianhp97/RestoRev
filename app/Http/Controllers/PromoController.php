<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ModelController\VoucherController;

class PromoController extends Controller
{
    public function index()
    {
        $listVoucher = VoucherController::getAllVoucher();
        $data = array(
            'listVoucher' => $listVoucher
        );
        return view('client.promo')
            ->with($data);
    }
}
