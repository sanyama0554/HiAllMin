<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'user_id', 'name', 'age', 'gender', 'location', 'bio', 'interests', 'languages_spoken', 'profile_picture', 'visited_places', 'travel_preferences',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}