<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Student extends Model
{
    use HasFactory;

    public function educationClasses(): BelongsToMany
    {
        return $this->belongsToMany(EducationClass::class, 'class_student_enrollments')->withTimestamps();
    }
}
