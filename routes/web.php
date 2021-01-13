<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('update', function()
{
    return view('update');
});


Route::post('/update', [App\Http\Controllers\HomeController::class, 'edit'])->name('edit');

Route::get('/home', [App\Http\Controllers\ContinutController::class, 'index'])->name('home');

Route::get('programareweb', function()
{
    return view('programareweb');
});
Route::get('retele', function()
{
    return view('retele');
});
Route::get('android', function()
{
    return view('android');
});
Route::get('addarticol', function()
{
    return view('addarticol');
});
Route::get('winapp', function()
{
    return view('winapp');
});
Route::get('readmore', function()
{
    return view('readmore');
});
Route::get('/programareweb', [App\Http\Controllers\ProWebController::class, 'index'])->name('programareweb');
Route::get('/retele', [App\Http\Controllers\ReteleController::class, 'index'])->name('retele');
Route::get('/android', [App\Http\Controllers\AndroidController::class, 'index'])->name('android');
Route::get('/winapp', [App\Http\Controllers\WinAppConntroller::class, 'index'])->name('winapp');
Route::get('/addarticol', [App\Http\Controllers\AddArticleController::class, 'index'])->name('addarticol');

Route::get('/search',[App\Http\Controllers\HomeController::class, 'search'])->name('search');
Route::get('/tags',[App\Http\Controllers\HomeController::class, 'tags'])->name('tags');
Route::get('/post', [App\Http\Controllers\AddArticleController::class, 'post'])->name('post');
Route::get('/readmore',[App\Http\Controllers\HomeController::class, 'readmore'])->name('readmore');
Route::get('/comentariu',[App\Http\Controllers\ContinutController::class, 'comentariu'])->name('comentariu');
