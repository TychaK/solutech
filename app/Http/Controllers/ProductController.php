<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function index()
    {
        return Product::all();
    }

    public function show($id)
    {
        $product = Product::where('id', '=', $id)->get();
        return $product;
    }

    public function store(Request $request)
    {
        $product = Product::create($request->all());
        return response()->json($product, 201);
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail()->where('id', $id);
        $product->update($request->all());
        return response()->json($product, 200);
    }

    public function delete($id)
    {
        $product = Product::findOrFail()->where('id', $id);
        $product->delete();
        return response()->json($product, 204);
    }
}
