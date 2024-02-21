<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class Subject extends Model
{
    protected $fillable = [
        'Code',
        'Title',
        'student_id'
    ];

    public function student(){
        return $this->belongsTo(Student::class);
    }
    use HasFactory;
}
