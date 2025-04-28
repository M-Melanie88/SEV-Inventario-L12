<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\LoanDetail;
use Illuminate\Http\Request;

class LoanDetailController extends Controller
{
    public function index()
    {
        return LoanDetail::with(['loan', 'equipmentType'])->get();
    }

    public function store(Request $request)
    {
        return LoanDetail::create($request->all());
    }

    public function show(LoanDetail $loanDetail)
    {
        return $loanDetail->load(['loan', 'equipmentType']);
    }

    public function update(Request $request, LoanDetail $loanDetail)
    {
        $loanDetail->update($request->all());
        return $loanDetail;
    }

    public function destroy(LoanDetail $loanDetail)
    {
        $loanDetail->delete();
        return response()->noContent();
    }
}
