<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    public function stores(StoreProductRequest $request)
    {
        echo "prueba";
        $product = Product::create($request->all());
        $product->save();
        return back();
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('products.show', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        dd($request->all(), $product);
        // La validación ya se ha manejado por `UpdateProductRequest`
        $data = $request->validated();
        // Actualizar el slug si el nombre del producto ha cambiado
        if ($product->name !== $data['name']) {
            $data['slug'] = Str::slug($data['name'], '-');
        }
        $product->update($data);
        // Redirigir a una ruta deseada con un mensaje
        return redirect()->route('admin.index');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('admin.index')->with('success', 'Product deleted successfully.');
    }
}
