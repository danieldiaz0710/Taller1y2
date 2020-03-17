<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $table ='equipos';
    protected $fillable = [
        'equipo',
        'Cuidad',
        'jugador_id'

    ]; 
    protected $hidden = ['created_at', 'update_at'];
    

    PUBLIC FUNCTION   jugador (){
        return $this->belongsTo('App\Models\Jugador');
    } 
    public function setNombreAttribute($value){
        $this->Attribute['equipo'] = ucwords($value);
    }
}
