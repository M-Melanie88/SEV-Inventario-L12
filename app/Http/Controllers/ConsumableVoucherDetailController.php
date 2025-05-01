<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ConsumableVoucherDetail;
use App\Models\DetailVoucher;
use Illuminate\Http\Request;

class ConsumableVoucherDetailController extends Controller
{
    public function index()
    {
        return DetailVoucher::with(['voucher', 'consumableType'])->get();
    }

    public function store(Request $request)
    {
        return DetailVoucher::create($request->all());
    }

    public function show(DetailVoucher $detail)
    {
        return $detail->load(['voucher', 'consumableType']);
    }

    public function update(Request $request, DetailVoucher $detail)
    {
        $detail->update($request->all());
        return $detail;
    }

    public function destroy(DetailVoucher $detail)
    {
        $detail->delete();
        return response()->noContent();
    }
}
