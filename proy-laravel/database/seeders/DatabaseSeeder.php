<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Encargado;
use App\Models\Refugio;
use App\Models\Mascota;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Encargado::create(['nombre'=>'Carmen', 'correo'=>'carmen@gmail.com','estado'=>1]);

        Refugio::create (['encargado_id'=>1,'nombre'=>'Patitas en acción', 'direccion'=>'Bolivar #234','tipo'=>'refugio','estado'=>1]);

        Mascota::create (['refugio_id'=>1,'nombre'=>'Tomas','especie'=>'perro', 'talla'=>23,'genero'=>'macho','fecha_rescate'=>'2026-06-16','edad_mes_rescate'=>6,
        'edad_anio_rescate'=>0,
 'estado'=>'en adopcion']);



        User::firstOrCreate(
            ['email' => 'admin@adopta.com'],
            ['name' => 'admin432', 'password' => Hash::make('admin2026')],
        );
    }
}
