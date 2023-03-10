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
    $data = ['name' => 'Victor', 'role' => "studente Boolean"];
    return view('home', $data);
});
Route::get('/presentation', function () {
    $data = ['text' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro iste animi quos. Quis eveniet officia error voluptatibus deleniti porro iusto, culpa repellendus accusantium reiciendis, quod doloremque perspiciatis quasi id odio!'];
    return view('presentation', $data);
});
Route::get('/credits', function () {
    $credits = ['Lorem', 'ipsum', 'dolor', 'sit', 'amet'];
    return view('credits', $credits);
});
