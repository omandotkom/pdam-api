<?php

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
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
$router->post('/login', function (Request $request) {
    $token = app('auth')->attempt($request->only('id', 'password'));
    $id = $request->id;
    if ($token != false) {
        return response()->json(compact('id', 'token'));
    } else {
        return response()->json(compact('id', 'token'),401);
        
     }
});
