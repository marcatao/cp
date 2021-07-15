<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estrutura_tipo extends Model
{
    protected $table = 'estrutura_tipo'; 

    public function categoria(){
        return $this->belongsTo('App\estrutura','id','estrutura_tipo_id');
    }
}
