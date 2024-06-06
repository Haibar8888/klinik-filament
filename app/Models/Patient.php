<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\PatientAppointment;

class Patient extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nik',
        'name',
        'gender',
        'date_of_birth',
        'address',
    ];

    // public function patientsAppointments(): HasMany
    // {
    //     return $this->hasMany(PatientAppointment::class);
    // }
}
