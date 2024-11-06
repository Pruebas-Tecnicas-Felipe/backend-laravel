<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Relación inversa: un post pertenece a una categoría
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id'); // Relación con la categoría usando 'category_id' como clave foránea
    }


}
