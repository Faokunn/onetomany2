<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index(){
        $book = Book::all();
        return response() -> json(['book' => $book]);
    }
    public function store(Request $request){
        $book = Book::create($request->all());
        return response()->json([
            'message'=>'Book Added',
            'data'=>$book
        ],200);
    }
    public function update(Request $request, $id){
        $book = Book::find($id);
        $book -> update($request -> all());
        return response()-> json(['book' => $book]);
    }
    public function destroy($id){
        $book = Book::find($id);
        $book -> delete();
        return response()-> json(['message' => 'Book Removed']);
    }
}
