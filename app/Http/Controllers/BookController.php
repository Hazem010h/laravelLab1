<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::orderBy('id', 'desc')->paginate(10);
        $page = "Books";
        return view('books', [
            "page" => $page,
            "books" => $books
        ]);
    }

    public function create()
    {
        $page = "create book";
        return view('create-book', ['page' => $page]);
    }

    public function store(Request $request)
    {
        Book::create([
            "title" => $request->title,
            "price" => $request->price,
            "description" => $request->description,
        ]);
        return redirect()->route('books.index');
    }

    public function show($book)
    {
        $book = Book::findOrFail($book);
        $page = "Show Book";
        return view('show-book', [
            "page" => $page,
            "book" => $book
        ]);
    }

    public function destroy($book)
    {
        $book = Book::find($book);
        $book->delete();
        return redirect()->back();
    }
    public function edit($book)
    {
        $book = Book::findOrFail($book);
        $page = "Edit Book";
        return view('edit-book', compact('page', 'book'));
    }

    public function update(Request $request, $book)
    {
        $book = Book::findOrFail($book);

        $request->validate([
            'title' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        $book->update([
            "title" => $request->title,
            "price" => $request->price,
            "description" => $request->description,
        ]);

        return redirect()->route('books.index', $book->id)->with('success', 'Book updated successfully!');
    }
}
