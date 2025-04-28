<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function store(Request $request)
    {
        $request->merge(['password' => bcrypt($request->password)]);
        return User::create($request->all());
    }

    public function show(User $user)
    {
        return $user->load(['role', 'department']);
    }

    public function update(Request $request, User $user)
    {
        if ($request->has('password')) {
            $request->merge(['password' => bcrypt($request->password)]);
        }
        $user->update($request->all());
        return $user;
    }

    public function destroy(User $user)
    {
        $user->delete();
        return response()->noContent();
    }
}
