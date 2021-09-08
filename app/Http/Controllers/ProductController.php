<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    //crear producto
    public function createProduct(){return view('productos.crear');}
    //listar producto
    public function listProduct(){return view('productos.listarProducto');}
    //Actualizar Producto
    public function updateProduct(){return view('productos.actualizar');}

    //consultar producto por ID
    public function showProductById(){return view('productos.producto');}

    //eliminar producto
    public function deleteProduct(){return view('productos.eliminarProducto');}

    //ultimos productos en venta
    public function newsProducts(){return view('productos.newArrivals');}    
}
