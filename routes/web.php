<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('Home');
});


Route::get('/about', function () {
    return view('About');
});




Route::get('/admission', function () {
    return view('Admission');
});


Route::get('/course', function () {
    return view('Course');
});



Route::post('/post_course', function (Request $request) {

    return $request;
});







//The nested paraemter value is extracted passing through the function and return which is provided to the views folder contact
Route::get('/contact/{p}/{q}', function ($p, $q) {

    return view("Contact", compact("p", "q"));
});




//in this multiple paaremter is passed throygh function and printed to UI


Route::get('/contact/{p}/{j}', function ($p, $j) {

    return $p . $j;
});
