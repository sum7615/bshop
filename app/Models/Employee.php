<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',  'email',  'address',  'phone',  'alt_phone',  'joining_date',  
        'status', 'designation','aadhar','pan','bank','other'
    ];
    
}
