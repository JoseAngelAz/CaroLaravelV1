<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CaroWController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;

//agregar otro controlador


//para componente Home
Route::get('/', [HomeController::class,'index']);

Route::get('cw/index', [HomeController::class,'index']);

Route::get('cw/aboutUs', [HomeController::class,'about']);

Route::get('cw/contact',[HomeController::class,'contact']);

/*Route::get('cursos/{curso}/{categoria?}', function($curso, $categoria=null) {
    //si queremos una variable como opcional, agregar un ? en parametro route
    if ($categoria) {
    return "Bienvenido al curso $curso, de la categoria $categoria";    
    }
    return "Bienvenido al curso $curso";
});*/

//Rutas para los productos
//Crear
Route::get('cw/producto/crearProducto',[ProductController::class,'createProduct']);
//Consultar
Route::get('cw/producto/listarProductos',[ProductController::class,'listProduct']);
//Encontrar por su ID
Route::get('cw/producto/findByIdProducto/{idProducto?}',[ProductController::class,'showProductById']);
//Actualizar
Route::get('cw/producto/actualizarProducto',[ProductController::class,'updateProduct']);
//Eliminar/para mientras es get
Route::get('cw/producto/eliminarProducto',[ProductController::class,'deleteProduct']);
//nuevos productos calientitos
Route::get('cw/producto/newsArrivals',[ProductController::class,'newsProducts']);

//Admin Dashboard
Route::get('cw/admin/dashboard',[DashboardController::class,'index']);