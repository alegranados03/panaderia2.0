<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{

    protected $table = 'categorias';

    public $timestamps = false;
    protected $fillable = ['nombre_categoria','descripcion'];

    public function productos(){
    return $this->hasMany(Producto::class);
    }
}
