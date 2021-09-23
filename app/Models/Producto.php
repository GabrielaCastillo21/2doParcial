<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * Obtiene la marca asociada al producto
     */
    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }
}
