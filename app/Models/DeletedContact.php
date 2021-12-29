<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeletedContact extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',  'email',  'address',  'phone',  'alt_phone',  'contract_date',  
        'status', 'company_type','company_address','contract','company_name','company_post',
    ];
}
