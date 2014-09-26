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
	//return View::make('hello');

	return storage_path();
});


//show storing of data to the cache
Route::get('/store', function(){

return Cache::put('kevin', 'this is data', 60);

});

//show checking if data exists in the cache
Route::get('/check', function(){

	 if(Cache::has('kevin')){
	 	return 'True';
	 }
	 else{
	 	return 'Not in cache';
	 }

});

//show retrieval of data from the cache
Route::get('/retrieve', function(){

	 if(Cache::has('kevin')){
	 	
	 	return Cache::get('kevin');
	 }
	 else{
	 	
	 	return 'not in cache';
	 }

});

//show removal of data from the cache
Route::get('/remove', function(){


	 if(Cache::has('kevin')){
	 	
	 	return Cache::pull('kevin');
	 }
	 else{
	 	
	 	return 'not in cache';
	 }


});



