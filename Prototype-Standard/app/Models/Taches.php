<?php

namespace App\Models;

use App\Models\Briefs;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taches extends Model
{
    use HasFactory;

    public $timestamps = FALSE;
    protected $fillable=[
        "Task_name",
        "start_Date",
        "end_Date",
        "descreption",
        "Briefs_id",
    ];

    
}
