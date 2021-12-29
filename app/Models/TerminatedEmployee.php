<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TerminatedEmployee extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',  'email',  'address',  'phone',  'alt_phone',  'joining_date',  
        'termination_date', 'status', 'designation','aadhar','pan','bank','other',
        'termination_letter','resignation_letter','termination_reason'
    ];
}
