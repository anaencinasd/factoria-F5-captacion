<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SelectionDay extends Model
{
    use HasFactory;
    protected $hidden = [];
    protected $fillable = [ 'school', 'date', 'link', 'comment'];

    public function people()
{
    return $this->belongsToMany(Person::class, 'person_selection_day', 'id_selection_day', 'id_person')
        ->withPivot(['school', 'comments', 'turn', 'decision'])
        ->withTimestamps();
}
}


