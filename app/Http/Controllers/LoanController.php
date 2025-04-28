<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Loan;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function index()
    {
        return Loan::with(['user', 'signer', 'detail', 'history'])->get();
    }

    public function store(Request $request)
    {
        return Loan::create($request->all());
    }

    public function show(Loan $loan)
    {
        return $loan->load(['user', 'signer', 'detail', 'history']);
    }

    public function update(Request $request, Loan $loan)
    {
        $loan->update($request->all());
        return $loan;
    }

    public function destroy(Loan $loan)
    {
        $loan->delete();
        return response()->noContent();
    }
}
