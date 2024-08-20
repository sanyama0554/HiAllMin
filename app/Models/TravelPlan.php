<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TravelPlan extends Model
{
    protected $fillable = [
        'user_id', 'title', 'description', 'planned_date', 'participants',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
