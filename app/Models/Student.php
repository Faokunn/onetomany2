<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;
use App\Models\Subject;

class Student extends Model
{
    protected $fillable = [
        'Name',
        'Course',
        'student_id'
    ];

    public function subject(){
        return $this->hasMany(Subject::class);
    }
    public function book(){
        return $this->hasMany(Book::class);
    }
    use HasFactory;
}
