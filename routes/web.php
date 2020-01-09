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

Route::get('/all/{boss}', 'Api\VacationsController@index');
Route::get('/vacations/{vacation}', 'Api\VacationsController@show');
// create
// Route::post('/vacations/create', 'Api\VacationsController@create');
Route::post('/vacations', 'Api\VacationsController@store');


// App\Vacation::crudRoutes();