<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    //menampilkan list buku
    function index()
    {
        $data['books'] = Book::all();
        return view('book.index',$data); 
    }

    function desc($id)
    {
        $book = Book::findOrFail($id); // Ambil buku berdasarkan ID
        return view('book.desc', compact('book')); // Kirim data ke tampilan
    }
    
    //form input data buku
    function create()
    {
        return view('book.create'); 
    }

    function store(Request $request){
        $book = new Book();
        $book->title = $request->title;
        $book->images = $request->images;
        $book->price = $request->price;
        $book->isbn = $request->isbn;
        $book->save();
        return redirect('book');
    }
    //form edit data buku
    function edit($id)
    {
        $data['book'] = Book::find($id); //select
        return view('book.edit',$data); 
    }

    function update($id,request $request){
        $book = Book::find($id);
        $book->title = $request->title;
        $book->price = $request->price;
        $book->isbn = $request->isbn;
        $book->update();
        return redirect('book');
    }

    function destroy($id){
        $book= Book::find($id);
        $book->delete();
        return redirect('book');
    }
}
