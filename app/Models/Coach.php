<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Coach extends Model
{
    use HasFactory;

    public function coachDetails(): HasOne
    {
        return $this->hasOne(CoachDetails::class);
    }

    public function teacherInteractions(): HasMany
    {
        return $this->hasMany(CoachTeacherInteractions::class);
    }
}
