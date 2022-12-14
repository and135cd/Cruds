<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\Dashboard\CategoriesController;


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
})->name('home');


/* Route::delete('cliente/{id}', function ($id){
    $cliente = Client::findd0Fail($id);
    return view('welcome');
}); */


Route::resource('post', PostController::class);
Route::resource('categories', CategoriesController::class);


