<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recycling extends Model
{
    use HasFactory;

    
    protected $fillable = [
       	

             "types",
             "Amount",
             "phone",
             "UserID",
         
             
   ];

   public $timestamps = false;

}
