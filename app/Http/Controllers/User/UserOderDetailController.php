<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\LoaiSanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserOderDetailController extends Controller
{
    public function index()
    {
      $user = auth()->user();       
      if (!$user) {
          abort(404); // Chuyển hướng đến trang lỗi 404 nếu không tồn tại ID
      }       
      $donhang = $user->donhang()->with('donhangchitiet')->get();
      $productTypes = LoaiSanPham::all(); 
     
  
        return view('user.oderDetail.index', compact('donhang' ,'user','productTypes'));
    }
    public function status_dangGiao()
    {
     
      $user = auth()->user();       
      if (!$user) {
          abort(404); // Chuyển hướng đến trang lỗi 404 nếu không tồn tại ID
      }
      $donhang = $user->donhang()->with('donhangchitiet')->get();
      $productTypes = LoaiSanPham::all(); 
     
  
        return view('user.oderDetail.status_dangGiao', compact('donhang' ,'user','productTypes'));
    }
    public function status_daGiao()
    {
      $user = auth()->user();       
      if (!$user) {
          abort(404); // Chuyển hướng đến trang lỗi 404 nếu không tồn tại ID
      }  
      $donhang = $user->donhang()->with('donhangchitiet')->get();
      $productTypes = LoaiSanPham::all(); 
     
  
        return view('user.oderDetail.status_daGiao', compact('donhang' ,'user','productTypes'));
    }
    
}
