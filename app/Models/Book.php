<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class Book extends Model
{
    protected $fillable = [
        'Subject',
        'Title',
        'student_id'
    ];

    public function student(){
        return $this->belongsTo(Student::class);
    }
    use HasFactory;
}
