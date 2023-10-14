<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;









class Address extends Model
{
    use HasFactory;
    protected $fillable = [
        "address1",
             "city",
             "email",
             "mobile",
             "street",
             "UserID",
            
             
   ];

   public $timestamps = false;
}
