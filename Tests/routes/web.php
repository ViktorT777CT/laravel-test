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
    return redirect('/question');
});

Route::get('/question', 'App\Http\Controllers\QuestionController@index');
Route::get('/question/create', 'App\Http\Controllers\QuestionController@create');
Route::get('/question/update', 'App\Http\Controllers\QuestionController@update');
Route::get('/question/delete', 'App\Http\Controllers\QuestionController@delete');
Route::get('/question/first_or_create', 'App\Http\Controllers\QuestionController@firstOrCreate');
Route::get('/question/update_or_create', 'App\Http\Controllers\QuestionController@updateOrCreate');


Route::get('/answer', 'App\Http\Controllers\AnswerController@answer');

Route::get('/test', 'App\Http\Controllers\TestController@test');

Route::get('/one', 'App\Http\Controllers\OneController@test');

Route::get('/two', 'App\Http\Controllers\TwoController@test');

Route::get('/three', 'App\Http\Controllers\TreeController@test');

Route::get('/four', 'App\Http\Controllers\FourController@test');

Route::get('/five', 'App\Http\Controllers\FiveLikeController@test');
