<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ConsumableType;
use Illuminate\Http\Request;

class ConsumableTypeController extends Controller
{
    public function index()
    {
        return ConsumableType::all();
    }

    public function store(Request $request)
    {
        return ConsumableType::create($request->all());
    }

    public function show(ConsumableType $type)
    {
        return $type;
    }

    public function update(Request $request, ConsumableType $type)
    {
        $type->update($request->all());
        return $type;
    }

    public function destroy(ConsumableType $type)
    {
        $type->delete();
        return response()->noContent();
    }
}
