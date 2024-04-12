<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nhanvienmodels extends Model
{
    use HasFactory;

    protected $table='nhanvien';
    // protected $primaryKey = 'Nhanvien_id';
    protected $fillable=['id', 'Tennhanvien', 'Ngaysinh', 'Sdt', 'Diachi', 'Email', 'Anh'];

    // public function tinTucs() {
    //     return $this->hasMany(tintucmodels::class, 'Nhanvien_id', 'Nhanvien_id');
    // }
}
