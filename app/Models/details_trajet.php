<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class details_trajet extends Model
{
    protected $table = 'detailestrajets';
    protected $fillable = [ 
        'trajet_id',
        'order_id',
        'point_de_pause',
        'distance',
       
    ];
public function trajet(){
   return $this->belongsTo(trajet::class,'trajet_id');
}

}
