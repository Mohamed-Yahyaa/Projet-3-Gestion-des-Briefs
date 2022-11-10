<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprenants_Briefs extends Model
{
    use HasFactory;

    protected $table = 'apprenants_brief';
    public $timestamps = FALSE;
    protected $fillable=[
        "apprenant_id",
        "brief_id",
        
    ];

    
}
