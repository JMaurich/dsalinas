<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
    
        'code', 'business_name', 'fantasy_name', 'legal_address', 'subsidiary', 'locality_1', 'postal_code', 'province_1', 'business_address', 'locality_2', 'postal_code', 'province_2', 'cuit', 'iva_condition', 'start_date', 'phones','email', 'web', 'logo',
    ];
}
