<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class SanPham extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = "sanpham";
    protected $fillable = [
        'id',
        'tensp',
        'mota',
        'soluong',
        'gia',
        'hinhanh'
    ];
}
