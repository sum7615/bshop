<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',  'brand',  'mrp',  'expired_date',  'quantity',  'stock_in',  
       
    ];
}
