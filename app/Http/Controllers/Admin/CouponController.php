<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KhuyenMai;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    //
    public function list_coupon()
    {
        $coupon = KhuyenMai::orderby('id','DESC')->get();
        return view('admin.list_coupon')->with(compact('coupon'));
    }
}
