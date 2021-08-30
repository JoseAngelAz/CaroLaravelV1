<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CaroWController;
use App\Http\Controllers\ProductController;

//agregar otro controlador

//aqui usaremos el HomeController
Route::get('/', HomeController::class);

Route::get('/cursos', [CaroWController::class,'index']);

Route::get('cursos/create', [CaroWController::class,'create']);

Route::get('cursos/{curso}',[CaroWController::class,'show']);

/*Route::get('cursos/{curso}/{categoria?}', function($curso, $categoria=null) {
    //si queremos una variable como opcional, agregar un ? en parametro route
    if ($categoria) {
    return "Bienvenido al curso $curso, de la categoria $categoria";    
    }
    return "Bienvenido al curso $curso";
});*/

//Rutas para los productos
Route::get('producto/crear',[ProductController::class,'createProduct']);
Route::get('producto/listar',[ProductController::class,'listProduct']);
Route::get('producto/byId',[ProductController::class,'showProductById']);
Route::get('producto/actualizar',[ProductController::class,'updateProduct']);
Route::post('producto/eliminar',[ProductController::class,'deleteProduct']);
//comentario para probar git