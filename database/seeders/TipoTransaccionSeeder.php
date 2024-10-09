<?php

namespace Database\Seeders;

use App\Models\Tipo_Transaccion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoTransaccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Tipo_Transaccion::create ([
            'TipoTransaccion'=>'Egreso'
        ]);
        Tipo_Transaccion::create ([
            'TipoTransaccion'=>'Ingreso'
        ]);
    }
}
