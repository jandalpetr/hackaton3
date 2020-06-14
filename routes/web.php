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
Route::get('/pet/create/{id}', 'PetController@create')      ->name('pet.create');
Route::post('/pet/store', 'PetController@store')            ->name('pet.store');
Route::get('/pet/{id}', 'PetController@show')               ->name('pet.show');

Route::get('/client/create', 'ClientsController@create')     ->name('client.create');
Route::post('/client', 'ClientsController@store')             ->name('client.store');
Route::get('/client/{id}', 'ClientsController@show')->where('id', '[0-9]+');
Route::get('/client/{id}/edit', 'ClientsController@edit')         ->name('client.edit');
Route::post('client/update/{id}', 'ClientsController@update')         ->name('client.update');

