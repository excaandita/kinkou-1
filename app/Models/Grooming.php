<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grooming extends Model
{
    protected $table = "grooming";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','namagrooming','hargagrooming','ketgrooming'
    ];
}
