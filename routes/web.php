<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $tasks = ['HTML', 'CSS', 'PHP', 'JavaScript', 'Laravel', 'MySQL', 'Vue'];
    $links = ['About Us', 'Shop', 'Login'];

    return view('home', compact('tasks', 'links'));
})->name('home');

Route::get('/aboutus', function () {
    return view('links.aboutus');
})->name('About Us');

Route::get('/shop', function () {
    return view('links.shop');
})->name('Shop');

Route::get('/login', function () {
    return view('links.login');
})->name('Login');
