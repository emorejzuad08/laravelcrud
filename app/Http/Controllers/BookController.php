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
