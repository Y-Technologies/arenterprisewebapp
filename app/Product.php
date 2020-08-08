<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = ['product_serial', 'name', 'type', 'quantity', 'price', 'stock'];
}
