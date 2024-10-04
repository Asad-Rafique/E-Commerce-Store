<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodects extends Model
{
    protected $fillable = [
        
        'NameProdect',
        "DiscriptionProdect",
        "ImageProdect",
        "PriceProdect",
        "CategryProdect",
        "QuntetyProdect",    

    ];

    use HasFactory;
}
