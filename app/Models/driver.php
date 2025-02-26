<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class driver extends Model
{

    protected $table = 'drivers';
    protected $fillable = [
         'user_id',
        'license_number',
        'current_location',

    ];


}
