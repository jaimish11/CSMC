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

Route::get('/projects', 'ProjectController@index');
Route::get('/projects/{id}','ProjectController@viewMilestones');
//Route::get('projects/{project_id}/image','ImageController@')


// GET projects/{project_id}/milestones/{milestone_id}
// <td>
// 	<img  src="{{}}"
// post
// PUT
// DELETE
Route::get('/dashboard','AdminController@index'); 
Route::get('/dashboard/{project_id}','AdminController@viewMilestones'); 
Route::delete('/dashboard/{id}','AdminController@destroy'); 
Route::get('/dashboard/{milestones_id}/edit','AdminController@edit');
Route::post('/dashboard/{mileid}','AdminController@update'); 
 
//Route::group(['middleware' => ['web', 'auth']], function () {
   
//});
//Route::get('/dashboard/{id}','ProjectController@destroy');
