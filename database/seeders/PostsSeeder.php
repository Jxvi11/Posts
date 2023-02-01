<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Post;
use App\Models\Usuario;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuarios = Usuario::all();
        $usuarios->each(function($element) {
            Post::factory()->count(3)->create([
            'usuario_id' => $element->id
            ]);
        });
    }
}
