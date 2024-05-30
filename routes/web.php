<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;

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
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/articles', function(){
    return view('articles', ['articles' => Article::all()]);
});

Route::get('/articles/{slug}', function($slug){
    
    $article = Article::find($slug);
    return view('article', ['article' => $article]);
});

Route::get('/video', [VideoController::class, 'index']);
Route::get('/video/{id}', [VideoController::class, 'detail']);
// Route::get('/video', [VideoController::class, 'watch']);

Route::get('/konsultasi', function () {
    return view('konsultasi');
});