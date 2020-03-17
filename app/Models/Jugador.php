<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    protected $table ='jugadores';
    protected $fillable = [
        'Nombre',
        'Apellido',
        'Posicion',
        'reporte',
    ]; 
    protected$hidden = ['created_at', 'update_at'];

    protected $casts = ['reporte' => 'array'];

    PUBLIC FUNCTION     equipos(){
        return $this->hasMany('App\Models\Equipo');
    } 
    public function setNombreAttribute($value){
        $this->Attribute['nombre'] = ucfirst($value);
    }
}
