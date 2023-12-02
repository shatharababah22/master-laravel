<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;
    
    // id	name	Percent	active	CategoryID	UserID	created_at	updated_at	

    protected $fillable = [
      
             "name",
             "Percent",
             "active",
             "UserID",
        
             
   ];

   public $timestamps = false;
}
