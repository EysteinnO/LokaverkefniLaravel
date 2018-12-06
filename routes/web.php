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

/*
HTTP URI       METHOD
GET /Projects (index)
GET /Projects/create (create)
GET /Projects/1 (show)
POST /Projects (store)
GET /Projects/1/edit (edit)
PATCH /Projects/1 (update)
DELETE /Projects/1 (destroy) 
*/


Route::get('/index', 'HomeController@index');
Route::get('/flights', 'HomeController@flights');
Route::get('/arrivals', 'HomeController@arrivals');
Route::get('/departures', 'HomeController@departures');
//Projects 
Route::resource('projects', 'ProjectsController');

