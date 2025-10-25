<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Jurusan;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function create()
    {
        $jurusans = Jurusan::all();
        return view('client.orders.task', compact('jurusans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'jurusan_id' => 'required|exists:jurusans,id_jurusan',
            'deskripsi' => 'nullable|string',
            'budget' => 'nullable|numeric',
            'deadline' => 'nullable|date|after_or_equal:today',
            'waktu_estimasi' => 'nullable|string|max:50',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:5120',
        ]);

        $data = $request->all();

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('tasks', 'public');
        }

        $task = new Task();
        $task->fill([
            'judul' => $data['judul'],
            'jurusan_id' => $data['jurusan_id'],
            'deskripsi' => $data['deskripsi'] ?? null,
            'budget' => $data['budget'] ?? null,
            'deadline' => $data['deadline'] ?? null,
            'waktu_estimasi' => $data['waktu_estimasi'] ?? null,
            'foto' => $data['foto'] ?? null,
            'status' => 'open',
            'users_id' => Auth::id(),
        ]);
        $task->save();

        return redirect()->route('client.dashboard')->with('success', 'Task berhasil dibuat!');
    }

   public function showApi($id)
{
    $task = Task::with(['jurusan', 'user'])->find($id);

    if (!$task) {
        return response()->json(['error' => 'Task tidak ditemukan'], 404);
    }

    return response()->json([
        'id' => $task->id_task,
        'judul' => $task->judul,
        'deskripsi' => $task->deskripsi,
        'budget' => 'Rp' . number_format($task->budget, 0, ',', '.'),
        'deadline' => \Carbon\Carbon::parse($task->deadline)->format('d M Y'),
        'jurusan' => $task->jurusan->nama_jurusan ?? 'Tidak diketahui',
        'user' => $task->user->nama ?? 'Anonim',
        'foto' => $task->foto ? asset('storage/' . $task->foto) : 'https://images.pexels.com/photos/1181244/pexels-photo-1181244.jpeg',
        'skills' => $task->user->skills ? explode(',', $task->user->skills) : [],
    ]);
}

}
    