<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class HomesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $books = Book::all();
        return view('Site', compact('books'));
    }

    public function contact()
    {
        return view('Contact');
    }


    
}
