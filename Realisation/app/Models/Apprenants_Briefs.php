<?php

namespace App\Models;
use App\Models\Appranants;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprenants_Briefs extends Model
{
    use HasFactory;

    protected $table = 'apprenants_briefs';
    public $timestamps = FALSE;
    protected $fillable=[
        "apprenants_id",
        "briefs_id",
        
    ];

    
}
