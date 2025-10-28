<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Freelancer;
use App\Models\User;
use App\Models\Jurusan; // ✅ tambahkan baris ini
use Illuminate\Support\Facades\DB;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class FreelancerController extends Controller
{
    public function index()
    {
        $freelancers = User::where('role', 'worker')->get();
        return view('client.dashboard', compact('freelancers'));
    }

    public function show($id)
    {
        $freelancer = User::findOrFail($id);
        return view('client.freelancer-detail', compact('freelancer'));
    }

    public function create()
    {
        return view('freelancer.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'specialization' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'photo' => 'nullable|string',
        ]);

        Freelancer::create($request->all());

        return redirect()->route('freelancer.index')->with('success', 'Freelancer berhasil ditambahkan!');
    }

    public function jurusRegist(Request $request)
    {
        $jurusans = DB::table('jurusans')->get();
        return view('auth.register.freelancer', compact('jurusans'));
    }

    public function dashboard(Request $request)
    {
        $search = $request->keyword;
        $jurusanId = $request->jurusan_id;

        // 🔹 Pagination ditambahkan di sini
        $tasks = Task::with(['jurusan', 'user'])
            ->when($search, function ($query) use ($search) {
                $query->where('judul', 'like', "%{$search}%");
            })
            ->when($jurusanId, function ($query, $jurusanId) {
                $query->where('jurusan_id', $jurusanId);
            })
            ->latest()
            ->paginate(9); // ✅ hanya 9 data per halaman

        $jurusans = Jurusan::all();
        $freelancers = User::all();
        $totalFreelancers = $freelancers->count();
        $OrderedTask = Task::where('status', 'ordered')->where('users_id', Auth::id())->count();
        $CompletedTask = Task::where('status', 'done')->where('users_id', Auth::id())->count();

        return view('freelancer.dashboard', compact(
            'freelancers',
            'totalFreelancers',
            'jurusans',
            'tasks',
            'OrderedTask',
            'CompletedTask'
        ));
    }

    public function profile()
    {
        $user = Auth::user();
        return view('freelancer.profile', compact('user'));
    }
}
