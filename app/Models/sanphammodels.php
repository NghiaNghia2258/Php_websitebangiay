<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sanphammodels extends Model
{
    use HasFactory;
    protected $table='SanPham';
    
    protected $fillable=['id', 'Maloai_id', 'Tensanpham', 'Anh', 'Soluong', 'Gia', 'Mota', 'Giakhuyenmai', 'Viewcount', 'ReducePrice'];

  
    
}
