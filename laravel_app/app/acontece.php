<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class acontece extends Model
{
    protected $table = 'acontece'; 

    public function categoria(){
        return $this->belongsTo('App\categorias','categoria_id','id');
    }
    public function fotos(){
        return $this->hasMany('App\acontece_imagens','acontece_id','id');
    }
    public function img_capa(){
        return $this->belongsTo('App\acontece_imagens','capa','id');
    }
}
