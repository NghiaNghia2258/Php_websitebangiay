<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\sanphammodels;
class ctdhmodels extends Model
{
    use HasFactory;
    protected $table = 'ctdh';

    protected $fillable = [
        'id', 'Donhang_id', 'Sanpham_id', 'Tensanpham', 'Anh', 'Soluong', 'Gia', 'Tongtien', 'Giakhuyenmai'
    ];
    
    public function SanPham(){
        return $this ->hasOne(sanphammodels::class,'Sanpham_id');
    }
}
