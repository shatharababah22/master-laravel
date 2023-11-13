<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    

    protected $fillable = [
        "OrderDate",
             "TotalAmount",
             "Status",
             "UserID",
             "billingsId",
             "PaymentMethodID",
            
             
   ];

   public $timestamps = false;

 public function orderItems()
{
    return $this->hasMany(Orderitem::class, 'OrderID', 'id');
}

   
}
