<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonHang extends Model
{
    use HasFactory;
    protected $table="DonHang";
    protected $fillable = [
        'tongtien',
        'id_user',
        'trangthai'
    ];
    public function donhangchitiet()
    {
        return $this->hasMany(DonHangChiTiet::class , 'id_donhang');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
