<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Signer;
use Illuminate\Http\Request;

class SignerController extends Controller
{
    public function index()
    {
        return Signer::with('department')->get();
    }

    public function store(Request $request)
    {
        return Signer::create($request->all());
    }

    public function show(Signer $signer)
    {
        return $signer->load('department');
    }

    public function update(Request $request, Signer $signer)
    {
        $signer->update($request->all());
        return $signer;
    }

    public function destroy(Signer $signer)
    {
        $signer->delete();
        return response()->noContent();
    }
}
