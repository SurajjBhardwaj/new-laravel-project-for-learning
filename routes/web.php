<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    echo "hey buddy";
});


Route:: post ("/test",function(){
    return "test";
});


// for any method 


Route:: any ("/new", function () {


    echo "hey bro ";

});