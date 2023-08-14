<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\School;
use App\Models\Student;

class schoolclass extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'base','Major','school_id'
    ];


    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class, 'school_id');
    }

    public function student(): HasMany
    {
        return $this->hasMany(Student::class);
    }
}
