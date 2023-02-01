<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    protected $fillable = ['contenido', 'usuario_id', 'post_id'];

    //Cada comentario pertenece a un usuario
    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    //Un comentario se hace a un post
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

}
