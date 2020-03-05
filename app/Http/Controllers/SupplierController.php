<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    //
    public function index()
    {
        return Supplier::with('supplierProduct')->get();
    }

    public function show($id)
    {
        $Supplier = Supplier::where('id', '=', $id)->with('supplierProduct')->get();
        return $Supplier;
    }

    public function store(Request $request)
    {
        $Supplier = Supplier::create($request->all());
        return response()->json($Supplier, 201);
    }

    public function update(Request $request, $id)
    {
        $Supplier = Supplier::firstOrFail()->where('id', $id);
        $Supplier->update($request->all());
        return response()->json($Supplier, 200);
    }

    public function delete($id)
    {
        $Supplier = Supplier::firstOrFail()->where('id', $id);
        $Supplier->delete();
        return response()->json($Supplier, 204);
    }
}
