<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assignment;

class TaskController extends Controller
{
    public function index()
    {
        $assignments = Assignment::all()->groupBy('type');
        return view('tasks.index', compact('assignments'));
    }
}