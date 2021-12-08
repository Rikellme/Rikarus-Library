<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\User;

class BookController extends Controller
{
    public function index() {
        $search = request('search');

        if($search) {
            $books = Book::where('name', 'like', '%' . $search . '%')->get();
        } else {
            $books = Book::all();

        }

        return view('exhibitions', ['books' => $books, 'search' => $search]);
    }

    public function myExhibitions() {
        $user = auth()->user();

        $books = $user->books;

        return view('my-exhibitions', ['books' => $books]);
    }

    public function store(Request $request) {
        $books = new Book();

        $books->name = $request->txtLivro;
        $books->author = $request->txtGenero;
        $books->synopsi = $request->txtSynopsis;
        $books->resume = $request->txtResume;
        // $books->image = $request->txtImage;



        if($request->hasFile('image') && $request->file('image')->isValid()) {

            // $books->image = url('/img/logo.png');
            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('/img/events'), $imageName);

            $books->image = $imageName;
        }

        $user = auth()->user();
        $books->user_id = $user->id;



        $books->save();

        return redirect('/my-exhibitions');
    }

    public function show($id) {
        $book = Book::findOrFail($id);

        $bookOwner = User::where('id', $book->user_id)->first()->toArray();

        return view('show', ['book' => $book, 'bookOwner' => $bookOwner]);
    }

    public function destroy($id) {

        Book::findOrFail($id)->delete();

        return redirect('/my-exhibitions');
    }

}
