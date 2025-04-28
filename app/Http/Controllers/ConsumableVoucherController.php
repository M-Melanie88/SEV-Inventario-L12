<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ConsumableVoucher;
use Illuminate\Http\Request;

class ConsumableVoucherController extends Controller
{
    public function index()
    {
        return ConsumableVoucher::with(['user', 'department', 'signer'])->get();
    }

    public function store(Request $request)
    {
        return ConsumableVoucher::create($request->all());
    }

    public function show(ConsumableVoucher $consumableVoucher)
    {
        return $consumableVoucher->load(['user', 'department', 'signer']);
    }

    public function update(Request $request, ConsumableVoucher $consumableVoucher)
    {
        $consumableVoucher->update($request->all());
        return $consumableVoucher;
    }

    public function destroy(ConsumableVoucher $consumableVoucher)
    {
        $consumableVoucher->delete();
        return response()->noContent();
    }
}
