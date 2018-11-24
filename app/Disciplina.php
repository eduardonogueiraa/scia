<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    public function postagens(){ 
    	return $this->hasMany(Postagem::class,'id_disciplina');
    }

}
