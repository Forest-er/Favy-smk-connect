<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Task;
use App\Models\Jurusan;

class ClientController extends Controller
{
    public function dashboard()
    {
        return view('client.dashboard');
    }

    public function explore()
    {
        return view('client.explore.index');
    }

    public function showFreelancer($id)
    {
        return view('client.explore.show', compact('id'));
    }

    public function orders()
    {
        return view('client.orders.index');
    }

    public function messages()
    {
        return view('client.messages.index');
    }

    public function settings()
    {
        return view('client.settings.index');
    }

    public function profile()
    {
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

    // ✅ UPDATE PROFIL (dengan upload foto)
    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'nama' => 'nullable|string|max:100',
            'bio' => 'nullable|string',
            'places' => 'nullable|string|max:255',
            'foto_profil' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Upload foto baru
        if ($request->hasFile('foto')) { // bukan 'foto_profil'
            if ($user->foto && Storage::disk('public')->exists($user->foto)) {
                Storage::disk('public')->delete($user->foto);
            }
            $path = $request->file('foto')->store('profile_photos', 'public');
            $user->foto = $path; // bukan foto_profil
        }

        $user->nama = $request->nama ?? $user->nama;
        $user->bio = $request->bio ?? $user->bio;
        $user->places = $request->places ?? $user->places;
        $user->save();

        return redirect()->back()->with('success', 'Profil berhasil diperbarui!');
    }

    public function dataview(Request $request)
    {
        $search = $request->keyword;
        $jurusanId = $request->jurusan_id;
        $totalTasks = Task::where('users_id', auth()->id())->count();

        $tasks = Task::with(['jurusan', 'user'])
            ->when($search, function ($query) use ($search) {
                $query->where('judul', 'like', "%{$search}%");
            })
            ->when($jurusanId, function ($query, $jurusanId) {
                $query->where('jurusan_id', $jurusanId);
            })
            ->get();

        $jurusans = Jurusan::all();
        $myTasks = Task::where('users_id', auth()->id())->get();

        return view('client.dashboard', compact('jurusans', 'tasks', 'jurusanId', 'totalTasks', 'myTasks'));
    }
}
