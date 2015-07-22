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


/* -------------------------------------------- *\
                    Pattern
\* -------------------------------------------- */

Route::pattern('id', '[1-9][0-9]*');
// permet de vérifier que les valeurs qui passent en url sont des entiers qui ne peuvent PAS commencer par "0"

/*----------------------------------------------*\
                     Front
\* -------------------------------------------- */


Route::get('/', 'FrontController@index');
// Route::get('single/{id}/{slug?}', 'FrontController@showPost');
// Route::get('tag/{id}', 'FrontController@showTag');

Route::get('/user', 'UserController@index');
Route::get('/user/{id}', 'UserController@show');


/* -------------------------------------------- *\
                     AUTH
\* -------------------------------------------- */

Route::controllers([
    'auth'      => 'Auth\AuthController',
    'password'  => 'Auth\PasswordController',
]);

/* -------------------------------------------- *\
                   Dashboard
\* -------------------------------------------- */

Route::get('dashboard', 'Admin\DashboardController@index');


/* -------------------------------------------- *\
                Controllers REST
\* -------------------------------------------- */

Route::resource('comment', 'CommentController');
Route::resource('post', 'PostController');



