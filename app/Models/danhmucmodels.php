<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class danhmucmodels extends Model
{
    use HasFactory;
    protected $table='danhmuc';
    
    protected $fillable=['id', 'Maloai_id','Tendanhmuc'];

    // public funtion loaisanpham() {
    //     return $this->hasMany()
    // }
}
