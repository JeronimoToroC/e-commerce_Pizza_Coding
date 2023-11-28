<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $products = Product::all(); // Cargar todos los productos
        $categories = Category::all(); // Cargar todas las categorías
        $users = User::all(); // Cargar todos los usuarios

        return view('admin.index', compact('products', 'categories', 'users'));
    }
}
