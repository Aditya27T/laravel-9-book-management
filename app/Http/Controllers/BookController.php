<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $length = request()->get('length');

        if ($length) {
            $data = Book::paginate($length);
        } else {
            $data = Book::paginate(10);
        }

        return view('pages.book.index', $data);  
    }

    public function create()
    {
        return view('pages.book.create');
    }

    public function store(Request $request)
    {
        //   
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
