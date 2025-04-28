<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ConsumableVoucherDetail;
use Illuminate\Http\Request;

class ConsumableVoucherDetailController extends Controller
{
    public function index()
    {
        return ConsumableVoucherDetail::with(['voucher', 'consumableType'])->get();
    }

    public function store(Request $request)
    {
        return ConsumableVoucherDetail::create($request->all());
    }

    public function show(ConsumableVoucherDetail $detail)
    {
        return $detail->load(['voucher', 'consumableType']);
    }

    public function update(Request $request, ConsumableVoucherDetail $detail)
    {
        $detail->update($request->all());
        return $detail;
    }

    public function destroy(ConsumableVoucherDetail $detail)
    {
        $detail->delete();
        return response()->noContent();
    }
}
