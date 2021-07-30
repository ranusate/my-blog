<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'name' => 'Ranus'
    ]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About', 'name' => 'Ranus', 'email' => 'ranusate19@gmail.com', 'image' => 'ranus.png']);
});

Route::get('/blog', [PostController::class, "index"]);


Route::get('/post/{post:slug}', [PostController::class, 'show']);
