<?php

namespace App\Models;
use App\Models\Briefs;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprenants extends Model
{
    use HasFactory;
    
    protected $table = 'apprenants';
    public $timestamps = FALSE;
    protected $fillable=[
        "Nom",
        "Prenom",
        "Email"
    ];

    public function Briefs(){
        return $this->belongsToMany(Briefs::class);
    }
    
}
