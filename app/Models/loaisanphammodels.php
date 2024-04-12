<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loaisanphammodels extends Model
{
    use HasFactory;
    protected $table='LoaiSanPham';
    
    protected $fillable=['id', 'Tenloai'];

    // public funtion loaisanpham() {
    //     return $this->hasMany()
    // }
}
