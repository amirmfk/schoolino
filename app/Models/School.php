<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class School extends Model
{
    use HasFactory;

    protected $fillable = [
        'school-name', 'school-address','manager-name','base'
    ];




    public function schoolClass(): HasMany
    {
        return $this->hasMany(schoolclass::class, 'school-id');
    }


}
