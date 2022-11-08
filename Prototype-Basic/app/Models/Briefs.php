<?php

namespace App\Models;

use App\Models\Taches;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Briefs extends Model
{
    use HasFactory;

    public $timestamps = FALSE;
    protected $fileable=[
        "Brief_name",
        "dateDelivery",
        "dateRecovery"
    ];

    public function Taches(){
        return $this->hasMany(taches::class);
    }
    

}
