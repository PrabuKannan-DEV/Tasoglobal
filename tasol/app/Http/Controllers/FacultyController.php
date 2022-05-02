<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function create()
    {
        return view('faculties.create');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'string|required|max:199|min:1',
            'email' => 'required|email'
        ]);
        unset($data['_token']);
        Faculty::create($data);
        return redirect()->route('faculties.index');
    }

    public function index()
    {
        $faculties = Faculty::all();
        return view('faculties.index', compact('faculties'));
    }
}
