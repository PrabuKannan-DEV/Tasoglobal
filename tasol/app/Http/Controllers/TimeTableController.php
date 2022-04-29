<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimeTableController extends Controller
{
    public function create()
    {
        return view('time_tables.create');
    }
}
