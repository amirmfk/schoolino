<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\schoolclass;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'lastname','father-name','Base','Major','schoolclass_id'
    ];



    public function schoolclass(): BelongsTo
    {
        return $this->belongsTo(schoolclass::class);
    }
}


