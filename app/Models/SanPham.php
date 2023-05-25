<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\LoaiSanPham;

use function GuzzleHttp\Promise\all;

class SanPham extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = "sanpham";
    protected $fillable = [
        'tensp',
        'mota',
        'soluong',
        'gia',
        'hinhanh',
        'id_loaisp',
        'id_khuyenmai',
    ];
    protected $primaryKey = 'id';
    public function loaisanpham()
    {
        return $this->belongsTo(Loaisanpham::class, 'id_loaisp', 'id');
    }
    use HasApiTokens, HasFactory, Notifiable;
    protected $table="Sanpham";
    protected $fillable = [
        'tensp',
        'mota',
        'soluong',
        'gia',
        'hinhanh',
        'luotxem',
        'luotthich',
        'id_loaisp',
        'id_khuyenmai',
    ];
    public function loaisanpham()
    {
        return $this->belongsTo(Loaisanpham::class, 'id_loaisp', 'id');
    }
    public function carts()
    {
        return $this->belongsTo(Cart::class, 'id','id_sanpham');
    }
}
