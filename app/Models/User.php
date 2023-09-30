<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = [
         "Image",
              "Username",
              "Firstname",
              "Lastname",
              "Email",
              "Password",
              "Phone",
              "Birthday"
              
    ];

    public $timestamps = false;
}
