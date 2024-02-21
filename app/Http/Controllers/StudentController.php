<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
        $student = Student::with('subject', 'book')->get();
        return response()->json(['student' => $student]);
    }
    public function store(Request $request){
        $student=Student::create([
            'Name'=>$request->Name,
            'Course'=>$request->Course
        ]);

        if($request->has('subject')){
            $student->subject()->createMany($request->input('subject'));
        }
        if($request->has('book')){
            $student->book()->createMany($request->input('book'));
        }
        

        return response()->json([
            'message'=>'Student Added',
            'data'=>$student
        ],200);
    }
    public function update(Request $request, $id){
        $student = Student::find($id);
        $student -> update($request -> all());
        return response()-> json(['student' => $student]);
    }
    public function destroy($id){
        $student = Student::find($id);
        $student -> book()->delete();
        $student -> subject()->delete();
        $student -> delete();
        return response()-> json(['message' => 'Student Removed']);
    }
}
