<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\sanphammodels;
class hoadonnhapmodels extends Model
{
    use HasFactory;
    protected $table = 'hoadonnhap';

    protected $fillable = [
        'id', 'Nhanvien_id', 'Thanhtien', 'Ngaynhap', 'Ncc_id'
    ];
    public function SanPham(){
        return $this ->hasOne(sanphammodels::class,'Sanpham_id');
    }
}
