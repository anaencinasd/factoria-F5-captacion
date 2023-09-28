<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    use HasFactory;
    protected $hidden = [];

    protected $fillable = [
        'name',
<<<<<<< HEAD
        'id_status_requirement'
=======
        'id_status_requirement',
        'description'
>>>>>>> fc02885 (bugs requirements subsanate + update 'description')

    ];
}
