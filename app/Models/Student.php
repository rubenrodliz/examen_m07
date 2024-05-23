<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'birthDate', 'course_id'];

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'birthDate' => 'required|date',
        'course_id' => 'required|exists:courses,id'
    ];

    protected $with = ['course'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
