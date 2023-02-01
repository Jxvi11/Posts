<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Post;
use App\Models\Usuario;
use App\Models\Comentario;
use Faker\Generator as Faker;

class ComentariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /*
        Aplica la migración para reflejar la nueva tabla en la base de datos,
        y utiliza un seeder y un factory para crear 3 comentarios en cada post,
        con el usuario que sea. A la hora de aplicar todo esto,
        borra los contenidos previos de la base de datos (migrate:fresh --seed).
        */
        $posts = Post::all();
        $posts->each(function($element) {
            Comentario::factory()->count(3)->create([
            'usuario_id' => Usuario::inRandomOrder()->first()->id,
            'post_id' => $element->id
            ]);
        });
    }
}
