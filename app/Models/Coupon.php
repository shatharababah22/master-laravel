<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{


    use HasFactory;


    public $fillable = ['Kiloes', 'percent', 'type'];

    
    public $timestamps = false;

    public function recycling()
    {
        return $this->belongsTo(Recycling::class, 'type', 'id'); // Adjust 'type' and 'id' based on your actual foreign key
    }

}
