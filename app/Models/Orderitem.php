<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderitem extends Model
{
    use HasFactory;
    
    
    protected $fillable = [	
        "Quantity",
             "Subtotal",
             "OrderID",
             "ProductID",
           
            
             
   ];
   public function product()
   {
       return $this->belongsTo(Product::class, 'ProductID', 'id');
   }
   public $timestamps = false;
}
