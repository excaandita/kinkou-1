<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan_Grooming extends Model
{
    protected $table = "layanan_grooming";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','grooming_id','hewan_id','customer_id','total'
    ];

    public function grooming()
    {
        return $this->belongsTo(Grooming::class);
    }

    public function hewan()
    {
        return $this->belongsTo(Hewan::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
