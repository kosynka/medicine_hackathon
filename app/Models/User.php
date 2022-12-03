<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Authorizable;

    const ROLE_DOCTOR = 'DOCTOR';
    const ROLE_PATIENT = 'PATIENT';
    const ROLE_ADMIN = 'ADMIN';

    const SEX_MALE = 'MALE';
    const SEX_FEMALE = 'FEMALE';

    protected $fillable = [
        'id',
        'iin',
        'birth_date',
        'sex',
        'fio',
        'email',
        'photo_id',
        'city_id',
        'role',
        'doctor_id',
        'hospital_id',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function photo(): BelongsTo
    {
        return $this->belongsTo(File::class);
    }

    public function doctor(): BelongsTo
    {
        return $this->belongsTo(Doctor::class, 'doctor_id', 'id');
    }

    public function hospital(): BelongsTo
    {
        return $this->belongsTo(Hospital::class);
    }

    public function patientRecords(): HasMany
    {
        return $this->hasMany(Record::class, 'id', 'patient_id');
    }

    public function doctorRecords(): HasMany
    {
        return $this->hasMany(Record::class, 'id', 'doctor_id');
    }

    public function getRole(): string
    {
        switch ($this->status) {
            case self::ROLE_DOCTOR:
                return 'доктор';
                break;
            case self::ROLE_PATIENT:
                return 'пациент';
                break;
            case self::ROLE_ADMIN:
                return 'админ';
                break;
            default:
                return 'не указан';
                break;
        }
    }

    public function getSex(): string
    {
        switch ($this->status) {
            case self::SEX_MALE:
                return 'мужчина';
                break;
            case self::SEX_FEMALE:
                return 'женщина';
                break;
            default:
                return 'не указан';
                break;
        }
    }
}
