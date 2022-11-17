<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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
    return view('form');
});
Route::get('add-blog-post-form', [PostController::class, 'index']);
Route::post('store-form', [PostController::class, 'store']);

Route::get('/read',[PostController::class,'read']);
Route::get('/edit/{id}', [PostController::class, 'edit']);
Route::get('/delete/{id}', [PostController::class, 'destroy']);
Route::put('/update/{id}', [PostController::class, 'update']);