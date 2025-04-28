<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\LoanHistory;
use Illuminate\Http\Request;

class LoanHistoryController extends Controller
{
    public function index()
    {
        return LoanHistory::with('loan')->get();
    }

    public function store(Request $request)
    {
        return LoanHistory::create($request->all());
    }

    public function show(LoanHistory $loanHistory)
    {
        return $loanHistory->load('loan');
    }

    public function update(Request $request, LoanHistory $loanHistory)
    {
        $loanHistory->update($request->all());
        return $loanHistory;
    }

    public function destroy(LoanHistory $loanHistory)
    {
        $loanHistory->delete();
        return response()->noContent();
    }
}
