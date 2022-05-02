<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FacultyTimeTable;

class TimeTableController extends Controller
{
    public function create()
    {
        return view('time_tables.create');
    }

    public function index()
    {
        $time_tables = FacultyTimeTable::with('subject', 'term', 'faculty')->get();
        return view('time_tables.index', compact('time_tables'));
    }
}
