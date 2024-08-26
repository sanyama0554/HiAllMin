<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AssignmentsTableSeeder extends Seeder
{
    public function run()
    {
        $now = Carbon::now();

        DB::table('assignments')->insert([
            [
                'title' => 'Dictation Assignment',
                'content' => 'Content for dictation assignment',
                'type' => 'dictation',
                'audio_file_path' => 'path/to/dictation/audio.mp3',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Listening Assignment',
                'content' => 'Content for listening assignment',
                'type' => 'listening',
                'audio_file_path' => 'path/to/listening/audio.mp3',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Speaking Assignment',
                'content' => 'Content for speaking assignment',
                'type' => 'speaking',
                'audio_file_path' => 'path/to/speaking/audio.mp3',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}