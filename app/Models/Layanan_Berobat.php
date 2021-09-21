<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan_Berobat extends Model
{
    protected $table = "layanan_berobat";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','hewan_id','customer_id','penyakit_id'
    ];

    public function hewan()
    {
        return $this->belongsTo(Hewan::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function penyakit()
    {
        return $this->belongsTo(Penyakit::class);
    }
}
