<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SelectionDay extends Model
{
    use HasFactory;
    protected $hidden = [];

    protected $fillable = [
        'school',
        'date',
        
       
    ];
}
