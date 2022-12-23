<?php

use App\Exports\BookExport;
use App\Import\BookImport;

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
    public function export()
    {
        return Excel::download(new BooksExport, 'books.xlsx');
    }
    public function import(Reuest $req)
    {
        Excel::import(new BooksImport, $req->file('file'));

        $notification = array(
            'message' => 'Import data berhasil dilakukan',
            'alert-type' => 'succes'
        );
        return redirect()->route('admin.books') ->with($notification);
    }
    
} 
