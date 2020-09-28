<?php

use Illuminate\Support\Facades\Route;
use App\Models\Book;
use App\Models\User;

    Route::get('/', function () {
        return view('auth.login');
    });

// student routes
Route::middleware('auth')->group(function() {
    Route::get('/studenthome/{user}',  'App\Http\Controllers\BookController@borrowedbooks');
    Route::get('/myboooks',  'App\Http\Controllers\BookController@myboooks');
    Route::get('/borrow/{book}','App\Http\Controllers\BookController@borrow');
    Route::get('/unborrow/{book}','App\Http\Controllers\BookController@unborrow');
     //go to allbooks view
    Route::get('/allbooks', 'App\Http\Controllers\BookController@studentAllBooks');   
    Route::get('/bookdetailes/{book}','App\Http\Controllers\BookController@bookDetailes');
});

// admin routes
Route::group(['middleware' =>['auth','admin'] ],function (){
    Route::get('/home','App\Http\Controllers\BookController@index' );
    Route::get('/add', 'App\Http\Controllers\BookController@create');
    Route::post('/submit','App\Http\Controllers\BookController@store');
    Route::get('/edit/{book}','App\Http\Controllers\BookController@edit');
    Route::post('/update/{book}','App\Http\Controllers\BookController@update');
    Route::get('/delete/{book}','App\Http\Controllers\BookController@destroy');
    Route::get('/borrow','App\Http\Controllers\BookController@borrowedBooksAdmin');
    Route::post('/search', 'App\Http\Controllers\BookController@search');
    Route::get('/moredetails/{id}', 'App\Http\Controllers\BookController@moreDetails');
    Route::get('/adminbookdetailes/{book}','App\Http\Controllers\BookController@adminBookDetailes');
    //All Students
    Route::get('/liststudents', 'App\Http\Controllers\BookController@showAllStudents'); 
    Route::get('/adminprofile','App\Http\Controllers\BookController@adminprofile' );
});
