<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'content', 'type', 'audio_file_path'
    ];

    public function submissions()
    {
        return $this->hasMany(Submission::class);
    }

    public function progress()
    {
        return $this->hasMany(Progress::class);
    }
}