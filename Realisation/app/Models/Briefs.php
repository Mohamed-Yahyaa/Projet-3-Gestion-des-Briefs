<?php

namespace App\Models;

use App\Models\Taches;
use App\Models\Appranants;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Briefs extends Model
{
    use HasFactory;

    public $timestamps = FALSE;
    protected $fillable=[
        "Brief_name",
        "dateDelivery",
        "dateRecovery"
    ];

    public function Taches(){
        return $this->hasMany(taches::class);
    }
    public function Apprenants(){
        return $this->belongsToMany(apprenants::class);
    }

}
