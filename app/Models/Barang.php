<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = "barang";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','namabarang','kategori_id','hargabarang','stokbarang'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
