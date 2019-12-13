<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{   
    public $table="categorias";
    public $primaryKey="id";
    public $guarded=[];

    public function categorias(){
        return $this->hasMany("App\Categoria","idCategoria");
    }
}