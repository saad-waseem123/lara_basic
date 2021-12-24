<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    use HasFactory;
    public function student()
    {
        return $this->hasMany(Student::class, 'lab_id');
    }

    /**
     * Get all of the comments for the Lab
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function teacher()
    {
        return $this->hasMany(Teacher::class, 'lab_id');
    }
}
