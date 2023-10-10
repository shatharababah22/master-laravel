<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = [
   

        "comments",
        "Rating",
        "date",
        "UserID",
        "ProductID",
     
    


        
];

public $timestamps = false;
}
