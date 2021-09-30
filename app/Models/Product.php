<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function getRegularPriceAttribute($value)
    {
        return '$'.$value;
    }

    public function getStockStatusAttribute($value)
    {
        return ucfirst($value);
    }
}
