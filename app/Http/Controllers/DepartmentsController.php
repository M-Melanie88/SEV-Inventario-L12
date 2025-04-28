<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Departments;
use Illuminate\Http\Request;


class DepartmentsController extends Controller
{
    public function index()
    {
        return Departments::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        return Departments::create($request->all());
    }

    public function show(Departments $department)
    {
        return $department;
    }

    public function update(Request $request, Departments $department)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $department->update($request->all());
        return $department;
    }

    public function destroy(Departments $department)
    {
        $department->delete();
        return response()->noContent();
    }
}
