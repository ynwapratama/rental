<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
	$router->post('admin/login', 'Admin\AdminController@login');
	$router->get('admin/get_all', 'Admin\AdminController@get_all');

	$router->group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function () use ($router) {
		$router->get('logout', 'Admin\AdminController@logout');
	});
