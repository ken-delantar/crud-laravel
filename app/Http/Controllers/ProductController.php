<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    public function index(){
        $products = Products::all();
        return view('products.index', ['products' => $products]);
    }

    public function add(){
        return view('products.create');
    }
    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal: 0, 2'
        ]);

        Products::create($data);
    }
    public function edit($id){
        $product = Products::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id){
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal: 0, 2'
        ]);

        $product = Products::findOrFail($id);
        $product->update($data);

        return redirect()->route('product.index')->with('success', 'Product updated successfully');
    }

    public function destroy($id){
        $product = Products::findOrFail($id);
        $product->delete();

        return redirect()->route('product.index')->with('success', 'Product deleted successfully');
    }
}
