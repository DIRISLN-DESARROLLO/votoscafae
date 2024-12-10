<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Lista;
use Carbon\Carbon;

class VotosSeeder extends Seeder
{

    public function run()
    {
        $usuarios = User::all();
        $listas = Lista::all();

        $cantidadUsuariosParaVotar = (int) ($usuarios->count() * 0.8);

        $usuariosQueVotaran = $usuarios->random($cantidadUsuariosParaVotar);

        foreach ($usuariosQueVotaran as $usuario) {
            $lista = $listas->random();
            DB::table('votos')->insert([
                'user_id' => $usuario->id,
                'lista_id' => $lista->id,
                'hash_votacion' => hash('sha256', $usuario->id . now()),  // Generar un hash de votación único
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        echo "Votos de prueba insertados correctamente para el 20% de los usuarios.\n";
    }
}
