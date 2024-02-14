<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
// Import the HTTP client facade
use Illuminate\Support\Facades\Http;

class BookController extends Controller
{
    public function index()
    {
        return view('book');
    }

    public function new()
    {
        return view('bookNew');
    }

    public function add_book(Request $request)
    {
        $data = new Book;

        $data->img_url = $request->img_url;
        $data->title = $request->title;
        $data->read_date = $request->readDate;
        $data->rating = $request->rating;
        $data->notes = $request->notes;
        $data->author = $request->author_name;
        $data->first_publish_year = $request->first_publish_year;

        $data->save();
        return redirect('/booksApp/collections');
    }

    public function update_book($id)
    {
        $data = Book::find($id);
        return view('bookUpdate', compact('data'));
    }

    public function collections()
    {
        $data = Book::all();
        return view('bookCollections', compact('data'));
    }

    public function search(Request $request)
    {
        // Make a GET request to an API
        $response = Http::get('https://openlibrary.org/search.json?limit=10&q=' . $request->searchQuery);

        // Get the response body as an array
        $data = $response->json();

        /* return response()->json($data['docs']); */

        $dataDocs = $data['docs'];

        dd($dataDocs);
        // Return a view along with a JSON response
        /* return view('bookSearch', compact('dataDocs')); */
    }
}
