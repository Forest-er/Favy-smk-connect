<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Jurusan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TaskController extends Controller
{
    /* ===============================
       📌 BAGIAN CLIENT
    =============================== */

    // 🟣 Form membuat task baru
    public function create()
    {
        $jurusans = Jurusan::all();
        return view('client.orders.task', compact('jurusans'));
    }

    // 🟣 Simpan task baru ke database
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

        // Upload file jika ada
        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('tasks', 'public');
            $data['foto'] = $path;
        }

        // Simpan data task baru
        $task = new Task();
        $task->users_id = Auth::id();
        $task->judul = $data['judul'];
        $task->jurusan_id = $data['jurusan_id'];
        $task->deskripsi = $data['deskripsi'] ?? null;
        $task->budget = $data['budget'] ?? null;
        $task->deadline = $data['deadline'] ?? null;
        $task->waktu_estimasi = $data['waktu_estimasi'] ?? null;
        $task->foto = $data['foto'] ?? null;
        $task->status = 'open';
        $task->save();

        return redirect()->route('client.dashboard')
                         ->with('success', 'Task berhasil dibuat dan dipublikasikan!');
    }

    // 🟣 Lihat task milik client (dalam JSON)
    public function index()
    {
        try {
            $tasks = Task::where('users_id', Auth::id())->get();
            return response()->json($tasks);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Terjadi kesalahan saat menampilkan task.']);
        }
    }

    // 🟣 Tampilkan detail task (popup/detail page)
    public function show($id)
    {
        $task = Task::findOrFail($id);
        return view('client.task-detail', compact('task'));
    }

    // 🟣 Tampilkan task dalam format JSON (untuk AJAX)
    public function showJson($id)
    {
        try {
            $task = Task::with(['jurusan', 'user'])->findOrFail($id);

            return response()->json([
                'id' => $task->id_task,
                'judul' => $task->judul,
                'deskripsi' => $task->deskripsi ?? '-',
                'jurusan' => $task->jurusan->nama_jurusan ?? 'Tidak diketahui',
                'deadline' => $task->deadline ? \Carbon\Carbon::parse($task->deadline)->format('d M Y') : '-',
                'budget' => $task->budget ? 'Rp' . number_format($task->budget, 0, ',', '.') : '-',
                'foto' => $task->foto ? asset('storage/' . $task->foto) : asset('images/no-image.png'),
                'user' => $task->user->nama ?? 'Anonim',
                'waktu_estimasi' => $task->waktu_estimasi ?? '-',
                'status' => ucfirst($task->status),
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Task tidak ditemukan.'], 404);
        }
    }

    /* ===============================
       📌 BAGIAN FREELANCER
    =============================== */

    // 🟢 Lihat semua task (untuk freelancer)
    public function freelancerIndex()
    {
        $tasks = Task::with(['jurusan', 'user'])->orderBy('created_at', 'desc')->get();

        // Statistik sederhana
        $total = $tasks->count();
        $open = $tasks->where('status', 'open')->count();
        $progress = $tasks->where('status', 'in_progress')->count();
        $done = $tasks->where('status', 'done')->count();

        return view('freelancer.projects', compact('tasks', 'total', 'open', 'progress', 'done'));
    }

    // 🟢 Lihat detail task dari sisi freelancer
    public function freelancerShow($id)
    {
        $task = Task::with(['jurusan', 'user'])->findOrFail($id);
        return view('freelancer.task-detail', compact('task'));
    }
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'users_id', 'id_users');
    }
}
