<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    use HasFactory;

    //Un Post puede tener un unico usuario
    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    //Un Post puede tener muchos comentarios
    public function comentarios()
    {
        return $this->hashMany(Comentario::class);
    }
}
