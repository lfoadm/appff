<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable = [
        'user_id',
        'active',
        'name',
        'gender',
        'cpf',
        'zip_code',
        'address_name',
        'address_number',
        'address_complement',
        'neighborhood_name',
        'city_name',
        'cell_phone',
        'email',
        'date_birth',
        
    ];

}
