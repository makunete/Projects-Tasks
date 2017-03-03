<?php
//Route::get('/', 'ProjectsController@index');
 


//Route::get('home', 'HomeController@index');
//
//Route::controllers([
//	'auth' => 'Auth\AuthController',
//	'password' => 'Auth\PasswordController',
//]);
Route::model('tasks', 'Task');
Route::model('projects', 'Project');


Route::bind('tasks', function($value, $route) {
	return App\Task::whereSlug($value)->first();
});
Route::bind('projects', function($value, $route) {
	return App\Project::whereSlug($value)->first();
});
 
Route::resource('projects', 'ProjectsController');
Route::resource('projects.tasks', 'TasksController');

