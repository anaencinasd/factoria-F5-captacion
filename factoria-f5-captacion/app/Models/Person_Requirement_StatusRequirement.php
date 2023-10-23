<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;



class Person_Requirement_StatusRequirement extends Model
{
    use HasFactory;
   
  

    protected $hidden = [];
    
    protected $fillable = [
        'id_person', 
        'id_requirement',
        'id_statusRequirement',
        
    ];

    protected $table = 'person__requirement_statusrequirements';

   

    public function person()
    {
        return $this->belongsToMany(Person::class,'person__requirement_statusrequirements', 'id_person', 'id_requirement', 'id_statusRequirement')
        ->withTimestamps();;
    }

    public function requirement()
    {
        return $this->belongsToMany(Person::class,'person__requirement_statusrequirements', 'id_person', 'id_requirement', 'id_statusRequirement')
        ->withTimestamps();
    }

    public function statusRequirement()
    {
        return $this->belongsToMany(Person::class,'person__requirement_statusrequirements', 'id_person', 'id_requirement', 'id_statusRequirement')
        ->withTimestamps();;
    }
}
