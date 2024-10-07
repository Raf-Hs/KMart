<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
        {
            $products = Product::all(); // Obtener todos los productos
            return view('products.index', compact('products')); // Vista de lista de productos
        }

    public function show($id)
        {
            $product = Product::findOrFail($id); // Obtener producto por ID
            return view('products.show', compact('product')); // Vista de detalles del producto
        }
}
