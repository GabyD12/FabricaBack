<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_Transaccion extends Model
{
    use HasFactory;
    protected $fillable = ['TipoTransaccion'];
    
    public function transaccion (){
        return $this->hasMany(transaccion::class);
    }
    
    
}
