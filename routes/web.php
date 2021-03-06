<?php

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

// Set the route for get all empleados api
$router->get('/api/empleados', 'EmpleadosController@getAll');
// Set the route for get empleados by id api
$router->get('/api/empleados/{id}', 'EmpleadosController@getById');
// Set the route for create empleado
$router->post('/api/empleados', 'EmpleadosController@create');

// Set the route for get all pedidos api
$router->get('/api/pedidos', 'PedidosController@getAll');
// Set the route for get pedidos by date and hour and client api
$router->get(
    '/api/pedidos/{date}/{hour}/{client}',
    'PedidosController@getByDateHourClient'
);
// Set the route for create pedidos
$router->post('/api/pedidos', 'PedidosController@create');
// Pagos pedidos
$router->get('/api/pagos_pedidos', 'PagosPedidosController@getAll');
$router->post('/api/pagos_pedidos', 'PagosPedidosController@create');


// Set the route for mesas
$router->get('/api/mesas', 'MesasController@getAll');
$router->get('/api/mesas/{id}', 'MesasController@getById');
