<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;
use App\Http\Requests\BooksRequest;
use Illuminate\Support\Facades\Auth;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Books::all();
        return view('books.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BooksRequest $request)
    {
        $title = $request->input('title');
        $author = $request->input('author');
        $genre = $request->input('genre');
        $description = $request->input('description');

        $books = Books::create([
            'title' => $title,
            'author' => $author,
            'genre' => $genre,
            'description' => $description,
            'user_id' => 2
        ]);

        return redirect(route('home.index'))->with('message', "Hai aggiunto il tuo libro con successo");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function show(Books $book)
    {
        return view('book.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function edit(Books $book)
    {
        return view('book.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function update(BooksRequest $request, Books $book)
    {
        $book->update($request->all());

        return redirect(route('books.index'))->with('message', "Hai modificato il tuo libro");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function destroy(Books $book)
    {
        $book->delete();

        return redirect(route('books.index'))->with('message', "Hai eliminato il tuo libro con successo");
    }
}
