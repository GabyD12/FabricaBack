<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaccion extends Model
{
    use HasFactory;
    protected $fillable = ['id_tipo_transaccion','Motivo','fecha','Monto','user_id'];
    protected $allowIncluded = ['tipoTransaccion','user'];

    public function tipoTransaccion (){
        return $this->belongsTo(Tipo_Transaccion::class,'id_tipo_transaccion');
    }


        public function user(){
            return $this->belongsTo(User::class);
        }

        public function scopeIncluded(Builder $query)
    {

        if(empty($this->allowIncluded)||empty(request('included'))){
            return;
        }

        
        $relations = explode(',', request('included')); 

       // return $relations;

        $allowIncluded = collect($this->allowIncluded); 

        foreach ($relations as $key => $relationship) { 

            if (!$allowIncluded->contains($relationship)) {
                unset($relations[$key]);
            }
        }
        $query->with($relations); 

      


    }
    }

