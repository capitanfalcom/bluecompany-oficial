<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Resources\CategoriasCollection;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/administrador', function () {
    return view('administrador');
})->middleware(['auth'])->name('administrador');




/* VIEWS */
Route::group(['prefix' => 'productos', 'middleware' => 'auth'], function () {
    Route::get('create', [ProductoController::class, 'create']);
    Route::get('edit', [ProductoController::class, 'edit']);
    Route::get('', [ProductoController::class, 'index']);
});

Route::group(['prefix' => 'categorias', 'middleware' => 'auth'], function () {
    Route::get('create', [CategoriaController::class, 'create']);
    Route::get('edit', [CategoriaController::class, 'edit']);
    Route::get('', [CategoriaController::class, 'index']);
});


/* CONTROLLERS */

Route::controller(CategoriaController::class)
    ->name('categorias')
    ->middleware(['auth'])
    ->group(function () {
        /* Route::get('/categorias', 'index'); */
        Route::post('/categorias/store', 'store');
        Route::delete('/categorias/destroy/{id}', 'destroy');
    });

Route::controller(ProductoController::class)
    ->name('productos')
    ->middleware(['auth'])
    ->group(function () {
        /* Route::get('/productos', 'index'); */
        Route::post('/productos/store', 'store');
        Route::delete('/productos/destroy/{id}', 'destroy');
    });

/* API */
Route::group(['prefix' => 'api', 'middleware' => 'auth'], function () {
    Route::get('productosAll', [ProductoController::class, 'getAllProducts']);
    /* Route::get('productoOne', [ProductoController::class, 'getProducto']); */
});

require __DIR__ . '/auth.php';
