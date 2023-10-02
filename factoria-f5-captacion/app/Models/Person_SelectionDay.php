<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SelectionDay;

class Person_SelectionDay extends Model
{
    use HasFactory;
    protected $hidden = [];

    protected $fillable = [
        'id_person', 
        'id_selection_day',
        'comments',
        'turn',
        'school',
        'decission',
    ];

    



    public function person()
    {
        return $this->belongsToMany(Person::class, 'person__selection_days', 'id_person', 'id_selectionDay')
        ->withPivot('school', 'comments', 'turn', 'decission');
    }

    public function SelectionDay()
    {
        return $this->belongsToMany(SelectionDay::class, 'person__selection_days', 'id_person', 'id_selectionDay')
        ->withPivot('school', 'comments', 'turn', 'decission');
    }
}
