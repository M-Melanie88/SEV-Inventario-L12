<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ReturnEntry;
use Illuminate\Http\Request;

class ReturnEntryController extends Controller
{
    public function index()
    {
        return ReturnEntry::with('loan')->get();
    }

    public function store(Request $request)
    {
        return ReturnEntry::create($request->all());
    }

    public function show(ReturnEntry $returnEntry)
    {
        return $returnEntry->load('loan');
    }

    public function update(Request $request, ReturnEntry $returnEntry)
    {
        $returnEntry->update($request->all());
        return $returnEntry;
    }

    public function destroy(ReturnEntry $returnEntry)
    {
        $returnEntry->delete();
        return response()->noContent();
    }
}
