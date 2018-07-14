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
        $router->get('users', function() {
            $users = \App\Models\Users::all();
            return response()->json($users);
        });

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



    }
);

