<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'username', 'email', 'password_hash', 'role',
    ];

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function submissions()
    {
        return $this->hasMany(Submission::class);
    }

    public function progress()
    {
        return $this->hasMany(Progress::class);
    }

    public function travelPlans()
    {
        return $this->hasMany(TravelPlan::class);
    }
}