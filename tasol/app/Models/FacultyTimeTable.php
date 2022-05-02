<?php

namespace App\Models;

use App\Models\Term;
use App\Models\Faculty;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FacultyTimeTable extends Model
{
    use HasFactory;
    protected $table = 'time_tables';
    protected $guarded = [];

    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function term()
    {
        return $this->belongsTo(Term::class);
    }
}
