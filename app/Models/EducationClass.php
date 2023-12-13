<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class EducationClass extends Model
{
    use HasFactory;

    public function classProgress(): HasOne
    {
        return $this->hasOne(ClassProgress::class);
    }

    public function students(): BelongsToMany
    {
        return $this->belongsToMany(Student::class, 'class_student_enrollments')->withTimestamps();
    }

    protected function createdAt(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Carbon::make($value)->diffForHumans()
        );
    }

    protected function updatedAt(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Carbon::make($value)->diffForHumans()
        );
    }
}
