<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ConsumableVoucher;
use App\Models\Voucher;
use Illuminate\Http\Request;

class ConsumableVoucherController extends Controller
{
    public function index()
    {
        return Voucher::with(['user', 'department', 'signer'])->get();
    }

    public function store(Request $request)
    {
        return Voucher::create($request->all());
    }

    public function show(Voucher $consumableVoucher)
    {
        return $consumableVoucher->load(['user', 'department', 'signer']);
    }

    public function update(Request $request, Voucher $consumableVoucher)
    {
        $consumableVoucher->update($request->all());
        return $consumableVoucher;
    }

    public function destroy(Voucher $consumableVoucher)
    {
        $consumableVoucher->delete();
        return response()->noContent();
    }
}
