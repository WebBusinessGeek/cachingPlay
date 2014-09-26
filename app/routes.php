<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});


//show storing of data to the cache
Route::get('/store', function(){

return Cache::put('key', 'value', 60);

});

//show checking if data exists in the cache
Route::get('/check', function(){


});

//show retrieval of data from the cache
Route::get('/retrieve', function(){


});

//show removal of data from the cache
Route::get('/remove', function(){

});

