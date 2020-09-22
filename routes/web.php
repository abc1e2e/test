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
// Route::get('index',[
// 	'as'=>'test',
// 	'uses'=>'PageController@getIndex'
// ]);
// Route::get('them',[
// 		'as'=>'insert',
// 		'uses'=>'PageController@getInsert'
// 	]);
// 	Route::post('them',[
// 		'as'=>'insert',
// 		'uses'=>'PageController@postInsert'
// 	]);
Route::get('dang-ki',[
	'as'=>'insert',
	'uses'=>'PageController@insertform'
]);

Route::post('dang-ki',[
	'as'=>'insert',
	'uses'=>'PageController@insert'
]);
// Route for insert data
// Route::get('insert','PageController@insertform');
// Route::post('create','PageController@insert');
// Route::get('view','ViewController@view');

// //View Page
// Route::get('ViewPages', 'ViewController@index');
// Route::post('ViewPages', 'ViewController@index');

// Route::get('ajax-form-submit', 'FormController@index');
// Route::post('ajax-form-submit', 'FormController@index');
// Route::post('save-form', 'FormController@store');

//edite 
Route::get('edit-records','PageController@index');
Route::get('edit/{id}','PageController@show');
Route::post('edit/{id}','PageController@edit');

// //delete data
// Route::get('delete-records','StudDeleteController@index');
// Route::get('delete/{id}','StudDeleteController@destroy');
	
