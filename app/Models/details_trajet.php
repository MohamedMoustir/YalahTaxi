<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class details_trajet extends Model
{
    protected $table = 'detailetrajets';
    protected $fillable = [ 
        'id_trajet',
        'order_id',
        'point_de_pause',
       
    ];
public function trajet(){
   return $this->belongsTo(trajet::class);
}

}
