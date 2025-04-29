<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ReturnEntry;
use App\Models\Returns;
use Illuminate\Http\Request;

class ReturnEntryController extends Controller
{
    public function index()
    {
        return Returns::with('loan')->get();
    }

    public function store(Request $request)
    {
        return Returns::create($request->all());
    }

    public function show(Returns $returnEntry)
    {
        return $returnEntry->load('loan');
    }

    public function update(Request $request, Returns $returnEntry)
    {
        $returnEntry->update($request->all());
        return $returnEntry;
    }

    public function destroy(Returns $returnEntry)
    {
        $returnEntry->delete();
        return response()->noContent();
    }
}
