<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\sanphammodels;

class donhangmodels extends Model
{
    use HasFactory;
    protected $table = 'donhang';

    protected $fillable = [
        'id', 'Khachhang_id', 'Hoten', 'Sdt', 'Email', 'Diachi', 'Ngaydat', 'Tongtien', 'Trangthai'
    ];
    public function SanPham(){
        return $this ->hasOne(sanphammodels::class,'Sanpham_id');
    }
}
