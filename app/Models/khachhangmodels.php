<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class khachhangmodels extends Model
{
    use HasFactory;
    protected $table='khachhang';
    // protected $primaryKey = 'Khachhang_id';
    protected $fillable=['id', 'Tenkhachhang', 'Anhdaidien', 'Ngaysinh', 'Sdt', 'Diachi', 'Email'];
}
