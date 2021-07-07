<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('usuarios')->insert(['Nombre' => 'Juan',
        'Apellido' => 'Ruiz',
        'Cedula' => '10101010',
        'Direccion' => 'Calle 64 # 7-05',
        'Telefono' => '31580806924'
    ]);
    }
}
