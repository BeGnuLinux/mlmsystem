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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'users', 'middleware' => 'auth'], function () use ($router) {
    $router->get('all', 'UsersController@all');
    $router->post('register', 'UsersController@register');
});
$router->group(['prefix' => 'admin'], function () use ($router) {
    // Countries Routes
    $router->get('countries/all', 'CountriesController@all');
    $router->post('countries/add', 'CountriesController@add');

    // Continents Routes
    $router->get('continents/all', 'ContinentsController@all');
});

$router->post('/auth/login', 'AuthController@postLogin');