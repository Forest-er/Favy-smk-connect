<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Jurusan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TaskController extends Controller
{
    // Tampilkan form buat task baru
    public function create()
    {
        $jurusans = Jurusan::all();
        return view('client.orders.task', compact('jurusans'));
    }

    // Tampilkan semua task (JSON)
    public function index()
    {
        try {
            // Jika ingin hanya task milik user login, ganti Task::all() dengan:
            // Task::where('users_id', Auth::id())->get();
            $tasks = Task::all();
            return response()->json($tasks);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Terjadi kesalahan saat menampilkan task.']);
        }
    }

    // Simpan task baru
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

        // Handle upload file
        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('tasks', 'public');
            $data['foto'] = $path;
        }

        // Simpan ke database
        $task = new Task();
        $task->judul = $data['judul'];
        $task->jurusan_id = $data['jurusan_id'];
        $task->deskripsi = $data['deskripsi'] ?? null;
        $task->budget = $data['budget'] ?? null;
        $task->deadline = $data['deadline'] ?? null;
        $task->waktu_estimasi = $data['waktu_estimasi'] ?? null;
        $task->foto = $data['foto'] ?? null;
        $task->status = 'open';
        $task->users_id = Auth::id(); // task milik user yang login
        $task->save();

        return redirect()->route('client.dashboard')
                         ->with('success', 'Task berhasil dibuat dan dipublikasikan!');
    }

    // Tampilkan detail task untuk JSON (misal AJAX)
    public function showJson($id)
    {
        try {
            $task = Task::with(['jurusan', 'user'])->findOrFail($id);

            return response()->json([
                'id' => $task->id,
                'judul' => $task->judul,
                'deskripsi' => $task->deskripsi ?? '-',
                'jurusan' => $task->jurusan->nama_jurusan ?? 'Tidak diketahui',
                'deadline' => $task->deadline ? \Carbon\Carbon::parse($task->deadline)->format('d M Y') : '-',
                'budget' => $task->budget ? 'Rp' . number_format($task->budget, 0, ',', '.') : '-',
                'foto' => $task->foto ? asset('storage/' . $task->foto) : 'https://via.placeholder.com/400x200?text=No+Image',
                'user' => $task->user->nama ?? 'Anonim',
                'waktu_estimasi' => $task->waktu_estimasi ?? '-',
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Task tidak ditemukan.'], 404);
        }
    }

    // Tampilkan detail task untuk view popup
   public function show($id)
{
    $task = Task::findOrFail($id); // Ambil 1 task berdasarkan id
    return view('client.task-detail', compact('task')); // Kirim ke view
}

}
