<?php

namespace App\Http\Controllers;

use App\Models\Term;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::with('term')->get();
        return view('subjects.index', compact('subjects'));
    }
    public function create()
    {
        $terms = Term::all();
        return view('subjects.create', compact('terms'));
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'string|required|max:199|min:1',
            'term_id' => 'required|integer'
        ]);
        unset($data['_token']);
        $subject = Subject::create($data);
        return redirect()->route('subjects.index');
    }
}
