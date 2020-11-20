<?php

use App\Models\User;

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->post('/register', 'UsersController@register');
$router->get('/products', 'ProductsController@index');
$router->get('/products/all', 'ProductsController@allProducts');
$router->get('/cart/{id}', 'CartController@show');
$router->get('/users/{id}', 'UsersController@get');
$router->get('/users', 'UsersController@index');

$router->group(['middleware' => 'auth'], function () use ($router) {
    $router->get('user/{id}/details', function ($id){
        $user = User::find($id);
        return $user->toArray();
    });
    // $router->post('/users/update', 'UsersController@update');
    // $router->post('/users/delete', 'UsersController@delete');
});

