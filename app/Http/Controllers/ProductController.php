<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(); //fetch all products from DB

        // dump($products);
        // print_r($products);
        return view('products.list', ['products' => $products]);
    }
    public function create()
    {
        return view('products.add');
    }
    public function store(Request $request)
    {
        // dd($request);
        $newPost = Product::create([
            'title' => $request->title,
            'short_notes' => $request->short_notes,
            'price' => $request->price,
            'slug'=> $request->slug,
            'short_notes' => $request->short_notes,
            'description' => $request->description,
            'image' => $request->image,
        ]);
        
        return redirect('product/' . $newPost->id . '/edit');
    }
    public function show(Product $product)
    {
        // dump($product);
       return view('products.product',['product' => $product]);
    }
    public function edit(Product $product)
    {
        return view('product.edit', [
            'product' => $product,
        ]);
    }
    public function update(Request $request, Product $product)
    {
        $product->update([
            'title' => $request->title,
            'short_notes' => $request->short_notes,
            'price' => $request->price,
            'slug'=> $request->slug,
            'short_notes' => $request->short_notes,
            'description' => $request->description,
            'image' => $request->image,
        ]);
        
        return redirect('product/' . $product->id . '/edit');
    }
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('product/');
    }
    
}