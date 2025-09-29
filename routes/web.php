<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', function () {
    return view('form');
});

Route::post('/submit', function (Request $request) {
    // Get the form data
    $name = $request->input('name');
    $surname = $request->input('surname');

    // Process the data (store, validate, etc.)

    return (response()->json([
        'name' => $name,
        'surname' => $surname
         
    ]));
    
});
