<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    //crear producto
    public function createProduct(){return view('productos.crear');}
    //listar producto
    public function listProduct(){return view('productos.listarProducto');}
    //eliminar producto
    public function deleteProduct(){return view('cursos.index');}
    //eliminar producto
    public function updateProduct(){return view('productos.actualizar');}
    //consultar producto por ID
    public function showProductById(){return view('productos.producto');}

}
