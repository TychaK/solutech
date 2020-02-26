<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    //
    public function index()
    {
        return Supplier::all();
    }

    public function show($id)
    {
        $Supplier = Supplier::where('id', '=', $id)->get();
        return $Supplier;
    }

    public function store(Request $request)
    {
        $Supplier = Supplier::create($request->all());
        return response()->json($Supplier, 201);
    }

    public function update(Request $request, $id)
    {
        $Supplier = Supplier::findOrFail()->where('id', $id);
        $Supplier->update($request->all());
        return response()->json($Supplier, 200);
    }

    public function delete($id)
    {
        $Supplier = Supplier::findOrFail()->where('id', $id);
        $Supplier->delete();
        return response()->json($Supplier, 204);
    }
}
