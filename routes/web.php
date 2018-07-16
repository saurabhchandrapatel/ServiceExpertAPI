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


$router->post(
    'auth/login', 
    [
       'uses' => 'AuthController@authenticate'
    ]
);


$router->group(
    ['middleware' => 'jwt.auth'], 
    function() use ($router) {


        //READ ONLY
	    $router->get('accounts', [
		    'uses' => 'UserController@accounts'
	    ]);

	    $router->get('category', [
		    'uses' => 'CategoriesController@gelAll'
	    ]);

	    $router->get('product', [
		    'uses' => 'ProductController@getAll'
	    ]);

	    $router->get('/product/{id}', [
		    'uses' => 'ProductController@details'
	    ]);


	    $router->get('order', [
		    'uses' => 'OrderController@getAll'
	    ]);

	    $router->get('/filter-product/{type}/{id}', [
		    'uses' => 'ProductController@filter'
	    ]);

        //user WRITE
        $router->post('accounts', [
            'uses' => 'UserController@update'
        ]);

        $router->post('add-address', [
            'uses' => 'UserController@saveAddress'
        ]);

        $router->put('add-address/{id}', [
            'uses' => 'UserController@updateAddress'
        ]);

        $router->post('order', [
            'uses' => 'OrderController@add'
        ]);


    }
);

