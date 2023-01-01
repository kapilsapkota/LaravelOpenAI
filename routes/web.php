<?php

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
    return view('welcome');
});

Route::get('/write', function () {
    $title = '';
    $content = '';
    return view('write', compact('title', 'content'));
});
Route::post('/write/generate', [\App\Http\Controllers\ArticleGeneratorController::class, 'index']);

