<?php

use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('Home');
});


Route::get('/about', function () {
    return view('About');
});


Route::get('/about/{p}', function ($p) {
    return view('About', compact("p"));
});


//The nested paraemter value is extracted passing through the function and return which is provided to the views folder contact
Route::get('/contact/{p}/{q}', function ($p, $q) {


        return view("Contact", compact("p", "q"));
    
   
});




//in this multiple paaremter is passed throygh function and printed to UI


Route::get('/contact/{p}/{j}', function ($p, $j) {

    return $p . $j;
    
    
   
});





