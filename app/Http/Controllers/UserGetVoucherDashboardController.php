<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ModelController\VoucherController;
use App\Http\Controllers\ModelController\GetPromotionController;

class UserGetVoucherDashboardController extends Controller
{
    public function index()
    {
        $listVoucher = VoucherController::getAllVoucher();
        return view('dashboard.member_voucher')
            ->with('listVoucher', $listVoucher);
    }

    public function getAllUserByVoucher($code)
    {
        return GetPromotionController::getAllUserByVoucher($$code);
    }

    public function getVoucherById($code)
    {
        $voucher = VoucherController::getVoucherByCode($code);
        return view('dashboard.member_voucher_specific')
            ->with('voucher', $voucher);
    }

    public function destroy(Request $request, $code)
    {
        return GetPromotionController::destroy($user_id, $code);
    }
}
