<?php

namespace App\Models;

use App\Models\Term;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'term_id'];

    public function term()
    {
        return $this->belongsTo(Term::class);
    }
}
