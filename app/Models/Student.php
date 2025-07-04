<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    
    public function department() {
        return $this->belongsTo(Department::class);
    }
    
    public function courses() {
        return $this->belongsToMany(Course::class);
    }
    protected $fillable = ['name', 'department_id'];

    
}
