<?php

namespace App\Http\Controllers;

use App\OrderDetail;
use App\User;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    //

    public function index()
    {
        return OrderDetail::all();
    }

    public function show($order_id, $product_id)
    {

        $order_detail = OrderDetail::where('order_id', $order_id)->where('product_id', $product_id)->first();
        return response()->json($order_detail);
    }

    public function store(Request $request)
    {
        $order_detail = OrderDetail::create($request->all());
        return response()->json($order_detail, 201);
    }

    public function update(Request $request, $id)
    {
        $order_detail = OrderDetail::firstOrFail()->where('id', $id);

        $order_detail->update($request->all());
        return response()->json($order_detail, 200);
    }

    public function find_()
    {
//        User::find(1);
    }

    public function delete($id)
    {
        $order_detail = OrderDetail::firstOrFail()->where('id', $id);
        $order_detail->delete();
        return response()->json($order_detail, 204);
    }
}
