<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/dashboard', function(){
    return "dashboard";
});

Route::get('admin/users', function(){
    return "users";
});

Route::get('admin/client', function(){
    return "client";
});
