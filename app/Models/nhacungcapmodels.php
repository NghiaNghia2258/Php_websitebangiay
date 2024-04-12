<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nhacungcapmodels extends Model
{
    use HasFactory;
    protected $table='ncc';
    // protected $primaryKey = 'Ncc_id';
    protected $fillable=['id', 'Tenncc','Diachi','Sdt'];
}
