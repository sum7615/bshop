<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompletedOrder extends Model
{
    use HasFactory;
    protected $fillable = [
        'product','quantity','rate','amount','delivery_date','delivery_time','status'
        
    ];
}
