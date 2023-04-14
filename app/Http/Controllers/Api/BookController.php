<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;

class BookController extends Controller
{

    public function index()
    {
        $books = Book::all();
        return $books;
    }

    public function store(BookRequest $request)
    {
        $books = Book::create($request->all());

        return response()->json([
            'message'=> 'creado correctamente',
            'book'=>$books
        ],201);
    }

    public function update(BookRequest $request,$books)
    {
        $books = Book::find($books);
        $books->update($request->all());
        return response()->json([
            'message'=> 'actualizado correctamente',
            'book'=>$books
        ],201);
    }


    public function destroy($books)
    {
        $books = Book::find($books);
        $books->delete();

        return response()->json([
            'message'=> 'eliminado correctamente'
        ],201);
    }
}
