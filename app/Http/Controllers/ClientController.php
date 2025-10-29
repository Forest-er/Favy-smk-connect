<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Task;
use App\Models\Jurusan;
use App\Models\LikedTask;

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

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'nama' => 'nullable|string|max:100',
            'bio' => 'nullable|string',
            'places' => 'nullable|string|max:255',
            'foto_profil' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $user->nama = $request->nama ?? $user->nama;
        $user->bio = $request->bio ?? $user->bio;
        $user->places = $request->places ?? $user->places;

        if ($request->hasFile('foto_profil')) {
            if ($user->foto_profil && file_exists(storage_path('app/public/' . $user->foto_profil))) {
                unlink(storage_path('app/public/' . $user->foto_profil));
            }

            $path = $request->file('foto_profil')->store('profile_pictures', 'public');
            $user->foto_profil = $path;
        }

        $user->save();

        return redirect()->back()->with('success', 'Profil berhasil diperbarui!');
    }

    public function uploadPhoto(Request $request)
    {
        $request->validate([
            'foto_profil' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $user = Auth::user();

        if ($user->foto_profil && Storage::disk('public')->exists($user->foto_profil)) {
            Storage::disk('public')->delete($user->foto_profil);
        }

        $path = $request->file('foto_profil')->store('profile_photos', 'public');
        $user->foto_profil = $path;
        $user->save();

        return response()->json(['success' => true, 'foto' => asset('storage/' . $path)]);
    }

    public function dataview(Request $request)
    {
        $search = $request->keyword;
        $jurusanId = $request->jurusan_id;

        // Tentukan jumlah item per halaman: default 9 (desktop), mobile bisa 4
        $perPage = $request->get('per_page', 9);
        $perPage = in_array($perPage, [4, 9]) ? (int) $perPage : 9;

        $totalTasks = Task::where('users_id', auth()->id())->count();
        $totalFreelancer = User::where('role', 'worker')
            ->when($jurusanId, fn($q) => $q->where('jurusan_id', $jurusanId))
            ->count();

        $tasks = Task::with(['jurusan', 'user'])
            ->where('status', 'open')
            ->when($search, function ($query) use ($search) {
                $query->where('judul', 'like', "%{$search}%");
            })
            ->when($jurusanId, function ($query, $jurusanId) {
                $query->where('jurusan_id', $jurusanId);
            })
            ->paginate($perPage)
            ->appends(array_filter([
                'keyword' => $search,
                'jurusan_id' => $jurusanId,
                'per_page' => $perPage,
            ]));

        $jurusans = Jurusan::all();
        $myTasks = Task::where('users_id', auth()->id())->get();

        return view('client.dashboard', compact('jurusans', 'tasks', 'jurusanId', 'totalTasks', 'myTasks', 'totalFreelancer'));
    }

    public function myTask_show()
    {
        $tasks = Task::where('users_id', auth()->id())->get();
        $likedTaskIds = LikedTask::where('user_id', Auth::id())->pluck('task_id');
        $likedTask = Task::whereIn('id_task', $likedTaskIds)->get();

        return view('client.orders.task_show', compact('tasks', 'likedTask'));
    }
}