<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
$api = app('Dingo\Api\Routing\Router');

Route::get('/', function () {
    return view('welcome');
});

// Route::post('/api/berita/store', 'CBerita@store');

$api->version('v1', function ($api)
	{
		//Berita
		$api->post('berita/store', [
				'as'=>'berita.store', 
				'uses'=>'App\Http\Controllers\CBerita@store'
			]);

		$api->get('berita/index', [
				'as'=>'berita.index', 
				'uses'=>'App\Http\Controllers\CBerita@index'
			]);


		//User
		$api->post('user/store', [
				'as'=>'user.store', 
				'uses'=>'App\Http\Controllers\CUser@store'
			]);

		$api->get('user/index', [
				'as'=>'user.index', 
				'uses'=>'App\Http\Controllers\CUser@index'
			]);

		//Kategori Berita
		$api->post('KategoriBerita/store', [
				'as'=>'KategoriBerita.store', 
				'uses'=>'App\Http\Controllers\CKategoriBerita@store'
			]);

		$api->get('KategoriBerita/index', [
				'as'=>'KategoriBerita.index', 
				'uses'=>'App\Http\Controllers\CKategoriBerita@index'
			]);
	});