<?php

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
	$tasks = DB::table('tasks')->get();
    return view('welcome', compact('tasks'));
});

Route::post('/tasks', 'TasksController@index');
Route::get('/tasks/sorted/{ord}', 'TasksController@index');
Route::get('/tasks','TasksController@index');
Route::get('/tasks/create', 'TasksController@create');
Route::post('/tasks/create', 'TasksController@store');
Route::get('/tasks/edit/{task}', 'TasksController@edit');
Route::post('/tasks/edit/{task}', 'TasksController@update');
Route::delete('/tasks/delete/{task}', 'TasksController@destroy');
Route::get('/tasks/{task}', 'TasksController@show');
Route::post('/tasks/{task}/comments', 'CommentsController@create');

Auth::routes();

Route::get('/home', function () {
	$tasks = DB::table('tasks')->get();
    return view('welcome', compact('tasks'));
})->name('home');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
