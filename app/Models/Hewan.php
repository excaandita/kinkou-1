<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hewan extends Model
{
    protected $table = "hewan";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','namahewan','jenishewan','customer_id'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
