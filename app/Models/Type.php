<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Type extends Model
{
	
    protected $table ='types';
   protected $fillable= ['id','type'];


   public function repo()
    {
        return $this->hasMany(Repo::class,'id_type','id');
    }
}

 