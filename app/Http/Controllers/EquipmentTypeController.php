<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\EquipmentType;
use Illuminate\Http\Request;

class EquipmentTypeController extends Controller
{
    public function index()
    {
        return EquipmentType::all();
    }

    public function store(Request $request)
    {
        return EquipmentType::create($request->all());
    }

    public function show(EquipmentType $equipmentType)
    {
        return $equipmentType;
    }

    public function update(Request $request, EquipmentType $equipmentType)
    {
        $equipmentType->update($request->all());
        return $equipmentType;
    }

    public function destroy(EquipmentType $equipmentType)
    {
        $equipmentType->delete();
        return response()->noContent();
    }
}
