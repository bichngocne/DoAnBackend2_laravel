<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonHangChiTiet extends Model
{
    use HasFactory;
    protected $table="DonHangChiTiet";
    protected $fillable = [
        'phivanchuyen',
        'id_sanpham',
        'id_donhang',
        'soluongsp',
        'gia',
    ];
}
