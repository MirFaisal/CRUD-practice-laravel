<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }
    public function create()
    {
        return view("products.create");
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required',
            'discription' => 'required|nullable'
        ]);

        $newProduce = Product::create($data);

        return redirect(route('INDEX'));
    }

    public function edit(Product $product)
    {
        return view("Products.edit", ['product' => $product]);
    }

    public function update(Product $product, Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required',
            'discription' => 'required|nullable'
        ]);

        $product->update($data);

        return redirect(route('INDEX'));
    }
}