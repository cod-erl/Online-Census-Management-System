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

Auth::routes();

Route::get('/user', 'UserController@index')->name('user')->middleware('user');
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
Route::get('/enumerator', 'EnumeratorController@index')->name('enumerator')->middleware('enumerator');


//Household Routes
Route::get('household/create','HouseholdController@create')->name('createHousehold'); 
Route::post('household/store', 'HouseholdController@store')->name('storeHousehold');
Route::post('household/update{$id}', 'householdController@update')->name('updateHousehold');
Route::get('citizens/create', 'CitizenController@create')->name('createCitizen');
Route::post('citizens/store', 'CitizenController@store')->name('storeCitizen');
Route::get('animals/create', 'AnimalController@create')->name('createAnimal');
Route::post('animals/store', 'AnimalController@store')->name('storeAnimal');
Route::get('assets/create', 'AssetController@create')->name('createAsset');
Route::post('assets/store', 'AssetController@store')->name('storeAsset'); 




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
