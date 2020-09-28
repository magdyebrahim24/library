<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Book;
use App\Models\Pivot;
use App\Models\User;
use App\Models\admin;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class BookController extends Controller
{
    // list all books for admin
    public function index()
    {
        $book = Book::all();
        return view('library.admin.home',['book'=>$book]);   
    }
    // list all books in student
    public function studentAllBooks()
    {
        $book = Book::all();
        return view('library.student.allbooks',['book'=>$book]);
    }
    // go to add view in admin
    public function create()
    {
        return view('library.admin.add');
    }
    // store in book table book info that added
    public function store(Request $request)
    {
        request()->validate(['book_name'=>'required|min:5','book_description'=>'required','author_name'=>'required']);
          Book::create($request->all());
          return redirect('/home') ;
    }
    // show book detailes by id
    public function show(Book $book)
    {
        $book_data=Book::findOrFail($book->id);
         return view('posts.admin.show',['book'=>$book_data]);
    }
    // edit book info
    public function edit(Book $book)
    {
        $book_data=Book::findOrFail($book->id);
        return view('library.admin.edit',['book'=>$book_data]);
    }
    // update book info
    public function update(Request $request, Book $book)
    {
        request()->validate(['book_name'=>'required|min:5','book_description'=>'required|min:10','author_name|min:5'=>'required']);
        $book_data=Book::findOrFail($book->id);
        $book_data->book_name=request('book_name');
        $book_data->book_description=request('book_description');
        $book_data->author_name=request('author_name');
        $book_data->save();
        return redirect('/home');    
    }
    // delete book 
    public function destroy(Book $book)
    {
        $book_data=Book::findOrFail($book->id);
        $book_data->delete($book->id);
         return redirect('/home');
    }
    // store in pivot table user_id and Book_id 
    public function borrow( Request $request, $id)
    {
        $user = auth()->user()->id;
        auth()->user()->Book()->detach($id);
        auth()->user()->Book()->attach($id);
        return redirect('studenthome/'.$user);
    }
    // show borrowed books for student
    public function borrowedbooks(User $user){
        $books = auth()->user()->book()->get();
        return view('library.student.studenthome', compact('books'));
    }
    // un borrowed book in student from pivot table
    public function unborrow( Request $request, $id)
    {
        $user = auth()->user()->id;
        auth()->user()->Book()->detach($id);
         return redirect('studenthome/'.$user);
    }
    // function for search box for admin 
    public function search()
    {
        request()->validate(["id"=>"numeric"]);
        $input = request('id');
        $student = User::where('id', 'LIKE', '%' . $input  . '%')->get();
        return view('library.admin.search', ['student'=>$student]);
    }
    // list all student for admin
    public function showAllStudents()
    {
        $all_students = User::all();
        return view('library.admin.liststudents', ['all_students'=>$all_students]);
    }
    // show student detailes in student list view for admin
    public function moreDetails()
    {
        $input = request('id');
        $student_details = User::where('id', $input)->get();
        return view('library.admin.studentdetails', ['student_details'=>$student_details]);
    }
    // borrowed books list for admin
    public function borrowedBooksAdmin(User $user)
    {
       $books =  DB::table('books')
        ->join('pivots', function ($join) {
            $join->on('books.id', '=', 'pivots.book_id');
        })->get();
      return view('library.admin.borrow',compact('books'));
    }  
    // show book detailes for student 
    public function bookDetailes(Book $book)
    {
        $book_data=Book::findOrFail($book->id);
        return view('library.student.bookdetailes',['book_data'=>$book_data]);
    }
    //show book detailes for admin 
    public function adminBookDetailes(Book $book)
    {
        $book_data=Book::findOrFail($book->id);
        return view('library.admin.adminbookdetailes',['book_data'=>$book_data]);
    }
    // show student borrowed books (in student)
    public function myboooks()
    {
        $user = auth()->user()->id;
        return redirect('studenthome/'.$user);
    }
    // redirect the acount button to admin profile
    public function adminprofile()
    {
        return view('library.admin.adminprofile');
    }
}
