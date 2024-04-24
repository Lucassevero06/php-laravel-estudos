<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function(){

    Route::get('dashboard', function(){
        return "Dashboard";
    });
    
    Route::get('users', function(){
        return "Users";
    });
    
    Route::get('client', function(){
        return "Client";
    });
    
});