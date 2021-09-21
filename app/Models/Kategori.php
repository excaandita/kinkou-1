<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = "kategori";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','namakategori'
    ];

    public function barang()
    {
        return $this->hasMany(Barang::class);
    }
}
