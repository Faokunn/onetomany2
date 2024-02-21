<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    public function index(){
        $subject = Subject::all();
        return response() -> json(['subject' => $subject]);
    }
    public function store(Request $request){
        $subject = Subject::create($request->all());
        return response()->json([
            'message'=>'Student Added',
            'data'=>$subject
        ],200);
    }
    public function update(Request $request, $id){
        $subject = Subject::find($id);
        $subject -> update($request -> all());
        return response()-> json(['subject' => $subject]);
    }
    public function destroy($id){
        $subject = Subject::find($id);
        $subject -> delete();
        return response()-> json(['message' => 'Subject Removed']);
    }
}
