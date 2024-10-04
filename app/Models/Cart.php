<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Cart extends Model
{
    use HasFactory;

    // Specify the table name if it's not the plural form of the model name
    protected $table = 'carts'; // Assuming your table is 'cart' and not 'carts'

    // If there are specific fields that can be mass-assigned, define them
    protected $fillable = [
        'user_id', 
        'prodects_id'
    
    ];
}
