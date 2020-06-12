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
Route::get('/index', 'HomepageController@alphabeticalSort') ->name('index.alphabeticalSort');
Route::get('/index/{id}', 'HomepageController@show')        ->name('index.detail');
Route::get('/pet/create', 'PetController@create')           ->name('pet.create');
Route::post('/pet', 'PetController@store')                  ->name('pet.store');
Route::get('/pet/{id}', 'PetController@show')               ->name('pet.show');

