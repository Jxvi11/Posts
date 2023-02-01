<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Usuario;
use Illuminate\Database\Seeder;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(Usuario::class, 3)->create();

        Usuario::factory()->count(3)->create();

    }
}
