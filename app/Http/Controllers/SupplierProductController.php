<?php

namespace App\Http\Controllers;

use App\SupplierProduct;
use Illuminate\Http\Request;

class SupplierProductController extends Controller
{
    //

    public function index()
    {
        return SupplierProduct::all();
    }

    public function show($supply_id, $product_id)
    {
        $order_detail = SupplierProduct::where('supply_id', $supply_id)->where('product_id', $product_id)->get();
        return response()->json($order_detail);
    }

    public function store(Request $request)
    {
        $order_detail = SupplierProduct::create($request->all());
        return response()->json($order_detail, 201);
    }

    public function update(Request $request, $supply_id, $product_id)
    {
        $order_detail = SupplierProduct::firstOrFail()->where('supply_id', $supply_id)->where('product_id', $product_id);
        $order_detail->update($request->all());
        return response()->json($order_detail, 200);
    }

    public function delete($supply_id, $product_id)
    {
        $order_detail = SupplierProduct::firstOrFail()->where('supply_id', $supply_id)->where('product_id', $product_id);
        $order_detail->delete();
        return response()->json($order_detail, 204);
    }
}
