<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $fillable = ['idcategoria','codigo','nombre','precio_vente','stock','descripcion','condicion'];
    public function categoria(){
        return $this->belognsTo('App\Categoria');
    }
}
