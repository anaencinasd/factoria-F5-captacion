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
        'description'

    ];

    public function statusRequirement()
    {
        return $this->belongsToMany(Person::class,'person__requirement_statusrequirements', 'id_person', 'id_requirement', 'id_statusRequirement')
        ->withTimestamps();;
    }
}
