<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price'];

    protected $rules = [
        'name' => 'required|string|max:255',
        'price' => 'required|numeric|min:0'
    ];

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
