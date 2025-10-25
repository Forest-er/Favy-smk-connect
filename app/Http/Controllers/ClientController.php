<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class ClientController extends Controller
{
    public function dashboard() {
        return view('client.dashboard');
    }

    public function explore() {
        return view('client.explore.index');
    }

    public function showFreelancer($id) {
        return view('client.explore.show', compact('id'));
    }

    public function orders() {
        return view('client.orders.index');
    }

    public function messages() {
        return view('client.messages.index');
    }

    public function settings() {
        return view('client.settings.index');
    }
    public function profile() {
        return view('client.profile.index');
    }
     public function freelancer()
    {
        return view('auth.register.freelancer');
    }
public function getTaskDetail($id)
{
    $task = Task::with('user', 'jurusan', 'skills', 'portfolio')->findOrFail($id);
    return view('client.partials.task_popup', compact('task'));
}
    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'nama' => 'nullable|string|max:100',
            'bio' => 'nullable|string',
            'places' => 'nullable|string|max:255',
        ]);

        // Update data ke database
        $user->update([
            'nama' => $request->nama ?? $user->nama,
            'bio' => $request->bio ?? $user->bio,
            'places' => $request->places ?? $user->places,
        ]);

        return redirect()->back()->with('success', 'Profil berhasil diperbarui!');
    }


    public function uploadPhoto(Request $request)
    {
        $request->validate([
            'foto_profil' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $user = Auth::user();

        if ($user->foto_profil && Storage::exists('public/'.$user->foto_profil)) {
            Storage::delete('public/'.$user->foto_profil);
        }

        $path = $request->file('foto_profil')->store('profile_photos', 'public');
        $user->foto_profil = $path;
        $user->save();

        return back()->with('success', 'Profile photo updated successfully!');
    }

}
