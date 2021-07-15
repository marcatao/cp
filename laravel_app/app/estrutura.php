<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estrutura extends Model
{
    protected $table = 'estrutura'; 

    public function estrutura_tipo(){
        return $this->belongsTo('App\estrutura_tipo','estrutura_tipo_id','id');
    }
}
