<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Marca extends Model
{
    use HasFactory;
    use SoftDeletes;

   /**
     * Obtiene los productos relacionados a la marca
     */
    public function productos()
    {
        return $this->hasMany(Producto::class);
    }
}
