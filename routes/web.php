<?php

use App\Models\Video;
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

// Route::get('/video', function() {
//     return view('video', ['videos' => Video::all()]);
// });
// Route::get('/video/{slug}', function($slug) {
//     $video = Article::find($slug);
//     return view('video', ['video' => $slug]);
// });
// Route::get('/video', [VideoController::class, 'watch']);

Route::get('/video', function () {
    return view('video');
});
Route::get('/konsultasi', function () {
    return view('konsultasi');
});