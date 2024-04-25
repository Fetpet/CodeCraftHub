<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('about');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/courses', function () {
    return view('courses');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/playlist', function () {
    return view('playlist');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/prof', function () {
    return view('prof');
});
Route::get('/teachers', function () {
    return view('teachers');
});
Route::get('/update', function () {
    return view('update');
});
Route::get('/video', function () {
     return view('video');
});