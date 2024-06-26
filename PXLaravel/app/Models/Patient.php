<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use HasFactory;
    use SoftDeletes;
    public function medicalRecords(): HasMany
    {
        return $this->hasMany(MedicalRecord::class);
    }
    public function lastMedicalRecords(): HasMany
    {
        return $this->HasMany(MedicalRecord::class)->latest();
    }
}
