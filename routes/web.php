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
    return view('welcome');
});

Route::resource('characters', 'CharacterController');

// Route that contemplates the use of a controller
Route::get('practice/{name?}', 'PracticeController@practice');

// Route that receives parameters, one of them does not live it and sets value by default last name.
Route::get('/name/{name}/lastname/{lastname?}', function ($name, $lastname = 'Apellido') {
    return 'Hello, my name is '.$name.$lastname;
});
