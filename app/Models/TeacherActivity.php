<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TeacherActivity extends Model
{
    use HasFactory;

    protected $casts = [
        'subjects_taught' => 'array'
    ];

    public function teacher(): BelongsTo
    {
        return $this->belongsTo(Teacher::class);
    }

    protected function lastActiveAt(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? Carbon::make($value)->diffForHumans() : null
        );
    }
}
