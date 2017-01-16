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

Route::get('/', 'GitHubController@list_results');

Route::get('/repo/download', 'GitHubController@download_data');
Route::get('/repo/{id}', 'GitHubController@show_repo_details');

//-- Test URL --//
//Route::get('/test', 'GitHubController@list_results');
