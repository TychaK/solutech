<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //

    public function index()
    {
        return Order::all();
    }

    public function show($id)
    {
        $order = Order::where('order_number', '=', $id)->get();
        return $order;
    }

    public function store(Request $request)
    {
        $order = Order::create($request->all());
        return response()->json($order, 201);
    }

    public function update(Request $request, $id)
    {
        $order = Order::findOrFail()->where('order_number', $id);
        $order->update($request->all());
        return response()->json($order, 200);
    }

    public function delete($id)
    {
        $order = Order::findOrFail()->where('order_number', $id);
        $order->delete();
        return response()->json($order, 204);
    }
}
