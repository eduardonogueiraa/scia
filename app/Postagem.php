<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postagem extends Model
{
	protected $table = 'postagens';
   public function users(){
		return $this->belongsTo(User::class,'id_usuario');
   }

   public function disciplinas(){
   		return $this->belongsTo(Disciplina::class, 'id'); 
   }
 
}
