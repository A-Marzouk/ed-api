<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResourceManagement extends Model
{
    use HasFactory;

    protected $casts = [
        'allocated_teachers' => 'array',
    ];
}
