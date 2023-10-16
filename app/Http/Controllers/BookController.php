<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Carbon\Carbon;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::paginate(10);
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'isbn' => 'required|string|min:13|max:13',
            'judul' => 'required|string',
            'halaman' => 'required|integer',
            'kategori' => 'required|string',
            'penerbit' => 'required|string',
        ]);

        $book = Book::create([
            'isbn' => $validated['isbn'],
            'judul' => $validated['judul'],
            'halaman' => $validated['halaman'],
            'kategori' => $validated['kategori'],
            'penerbit' => $validated['penerbit'],
        ]);

        return $book;
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }
}
