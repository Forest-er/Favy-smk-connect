<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientProfileController extends Controller
{
    public function uploadPhoto(Request $request)
{
    $user = Auth::user();

    if ($request->hasFile('foto_profil')) {
        $file = $request->file('foto_profil');
        $path = $file->store('profile_photos', 'public');

        if ($user->foto_profil) {
            Storage::disk('public')->delete($user->foto_profil);
        }

        $user->foto_profil = $path;
        $user->save();

        return response()->json(['success' => true]);
    }

    return response()->json(['success' => false]);
}

}

