<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RegisterController extends Controller
{
    public function registerFreelancer(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'jurusan_id' => 'required|exists:jurusans,id_jurusan',
        ]);

        $user = User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'worker', // role otomatis worker
            'jurusan_id' => $request->jurusan_id,
        ]);

        Auth::login($user);

        return redirect()->route('role.dashboard', ['role' => $user->role]);
    }

    public function registerClient(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'client', // role otomatis client
        ]);

        Auth::login($user);

        return redirect()->route('role.dashboard', ['role' => $user->role]);
    }
}
