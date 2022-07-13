<?php

use App\Http\Resources\ProductosCollection;
use App\Models\Productos;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

/* Route::middleware('auth:api')->get('/api/productos', function (Request $request) {
    return new ProductosCollection(Productos::all('*'));
    return $request->categorias();
}); */
