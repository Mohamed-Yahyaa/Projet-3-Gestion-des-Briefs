<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;

    

    protected $table = 'promotion';
    public $timestamps = true;
    protected $fillable=[
       "Nom_promotion",
   ];

   public function hasManyApprenants(){
     return $this->hasMany(Apprenants::class);
   }


}
