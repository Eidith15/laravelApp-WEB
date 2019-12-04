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

Route::get('/', 'PagesController@home'); 
Route::get('/about', 'PagesController@about'); 

Route::get('/mahasiswa', 'MahasiswaController@index'); 

// //Student
// Route::get('/students', 'StudentsController@index'); 
// Route::get('/students/create', 'StudentsController@create'); 
// //Student Show
// Route::get('/students/{student}', 'StudentsController@show');
// Route::post('/students', 'StudentsController@store');
// //Student Delete 
// Route::delete('/students/{student}', 'StudentsController@destroy');
// //Student Edit
// Route::get('/students/{student}/edit', 'StudentsController@edit');
// Route::put('/students/{student}', 'StudentsController@update');

Route::resource('students', 'StudentsController');