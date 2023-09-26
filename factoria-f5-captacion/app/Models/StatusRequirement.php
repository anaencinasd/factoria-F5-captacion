<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusRequirement extends Model
{
    use HasFactory;
    protected $hidden = [];

    protected $fillable = [
        'name',
        
       
    ];
}
