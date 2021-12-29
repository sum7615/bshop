<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cash extends Model
{
    use HasFactory;
    protected $fillable = [
       'one','two','five','ten','twenty','fifty','hundred','2_hundred','5_hundred','2_thousand','others',
    ];
}
