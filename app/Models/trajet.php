<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class trajet extends Model
{
    protected $table = 'trajets';
    protected $fillable=[
        'nom',
    ];
    
    public function detailstrajets(){
        return $this->hasEntry(details_trajet::class);
    }

    // public function reservations(){
    //     return $this->hasMany(re::class);
    // }
    
}
