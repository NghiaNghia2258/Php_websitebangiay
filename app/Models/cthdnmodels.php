<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\sanphammodels;

class cthdnmodels extends Model
{
    use HasFactory;
    protected $table = 'cthdn';

    protected $fillable = [
        'id', 'Hoadonnhap_id', 'Sanpham_id', 'Dongia', 'Soluong',
    ];
    public function SanPham(){
        return $this ->hasOne(sanphammodels::class,'Sanpham_id');
    }
}
