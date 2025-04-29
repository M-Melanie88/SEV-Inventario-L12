<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\LoanDetail;
use App\Models\LoanDetails;
use Illuminate\Http\Request;

class LoanDetailController extends Controller
{
    public function index()
    {
        return LoanDetails::with(['loan', 'equipmentType'])->get();
    }

    public function store(Request $request)
    {
        return LoanDetails::create($request->all());
    }

    public function show(LoanDetails $loanDetail)
    {
        return $loanDetail->load(['loan', 'equipmentType']);
    }

    public function update(Request $request, LoanDetails $loanDetail)
    {
        $loanDetail->update($request->all());
        return $loanDetail;
    }

    public function destroy(LoanDetails $loanDetail)
    {
        $loanDetail->delete();
        return response()->noContent();
    }
}
