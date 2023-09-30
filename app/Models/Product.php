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
        "image3",
        "image5",
        "image5",
        "stockquantity",
        "Price",
        "CategoryID",
        "MADEFROM",
        "STATUS",
        "Brand",
        "NOTES",
        "ItemId",
       


    ];

    public $timestamps = false;
}
