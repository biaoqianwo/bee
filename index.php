<?php
require __DIR__ . '/vendor/autoload.php';
use \NoahBuscher\Macaw\Macaw;
use \Bee\PDO\Model;

Model::config(require_once __DIR__ . '/config/db.php');

Macaw::get('/', function () {
    echo 'Welcome to Bee!';
});
Macaw::get('/users', 'Bee\Controllers\Users@index');
Macaw::post('/users', 'Bee\Controllers\Users@store');
Macaw::get('/users/(:num)', 'Bee\Controllers\Users@show');
Macaw::put('/users', 'Bee\Controllers\Users@update');
Macaw::delete('/users/(:num)', 'Bee\Controllers\Users@destroy');
Macaw::dispatch();