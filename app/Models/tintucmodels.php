<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tintucmodels extends Model
{
    use HasFactory;
    protected $table='tintuc';
    // protected $primaryKey = 'Matin_id';
    protected $fillable=['id', 'Nhanvien_id', 'Ngaynhap', 'Anh', 'Mota', 'Tentieude'];

    public function nhanVien() {
        return $this->belongsTo(nhanvienmodels::class, 'id', 'id');
    }

    // public function nhanVien() {
    //     return $this->belongsTo(nhanvienmodels::class, 'Nhanvien_id', 'Nhanvien_id');
    // }
}
