<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Http\Request;
use App\Http\Controllers\GroceryListController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

$router->post('/login', 'Auth\LoginController@login');
$router->post('/login/refresh', 'Auth\LoginController@refresh');
$router->post('/logout', 'Auth\LoginController@logout');

Route::resource('grocery_lists', 'GroceryListController');
