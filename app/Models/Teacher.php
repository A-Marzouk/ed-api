<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Teacher extends Model
{
    use HasFactory;

    public function teacherActivity(): HasOne
    {
        return $this->hasOne(TeacherActivity::class);
    }

    public function coachInteractions(): HasMany
    {
        return $this->hasMany(CoachTeacherInteractions::class);
    }
}
