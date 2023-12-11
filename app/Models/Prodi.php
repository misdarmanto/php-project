<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Prodi extends Model
{
	
    protected $table ='prodi';
   protected $fillable= ['id','program_studi','department'];


   public function repo()
    {
        return $this->hasMany(Repo::class,'id_prodi','id');
    }

}
