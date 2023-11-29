<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  					
    use HasFactory;
    protected $fillable = [
        "Name",
        "description",
        "image1",
        "image2",
        "Stockquantity",
        "Price",
        "CategoryID",
        "MADEFROM",
        "ItemId",
       
  

    ];

    public function carts()
    {
        return $this->hasMany(Cartitem::class);
    }

    public $timestamps = false;
}
