<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //

    public function getOrderDetailsRelationship()
    {
        return Order::with('orderDetail')->get();
    }

    public function index()
    {
        return Order::with('orderDetail')->get();
    }

    public function show($id)
    {
        $order = Order::where('id', '=', $id)->with('orderDetail')->first();
        return $order;
    }

    public function store(Request $request)
    {
        $order = Order::create($request->all());
        return response()->json($order, 201);
    }

    public function update(Request $request, $id)
    {
        $order = Order::firstOrFail()->with('orderDetail')->where('id', $id);
        $order->update($request->all());
        return response()->json($order, 200);
    }

    public function delete($id)
    {
        $order = Order::firstOrFail()->where('id', $id);
        $order->delete();
        return response()->json($order, 204);
    }
}
