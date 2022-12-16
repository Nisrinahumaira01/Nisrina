<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class AdminController extends Controller
{
    public function print_books()
    {
        $books = Book::all();
        $pdf = PDF::loadview('print_books',['books'=> $books]);
            return $pdf->download('data_buku.pdf');
    }
    public function index()
    {
        $user = Auth::user();
        return view('home', compact('user'));
    }
} 
