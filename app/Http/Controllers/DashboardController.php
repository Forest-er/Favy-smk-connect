<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Task;
use App\Models\Jurusan;
class DashboardController extends Controller
{
    public function showDashboard($role)
    {
        $roleData = Role::where('name', $role)->first();

        if (!$roleData) {
            abort(404, 'Role tidak ditemukan');
        }

        switch ($roleData->name) {
            case 'client':
                return view('client.dashboard', ['role' => $roleData]);
            case 'worker':
                return view('freelancer.dashboard', ['role' => $roleData]);
            case 'admin':
                return view('admin.dashboard', ['role' => $roleData]);
            default:
                abort(403, 'Role tidak diizinkan.');
        }
    }
    public function dataview(Request $request){
        $search = $request->keyword;

        $tasks = Task::with(['jurusan', 'user'])
            ->when($search, function ($query) use ($search) {
                $query->where('judul', 'like', "%{$search}%");
            })
            ->get(); // ambil data task + relasi
        $jurusans = Jurusan::all();
        return view('client.dashboard', compact('jurusans', 'tasks'));
        return view('client.orders.task', compact('jurusans', 'tasks'));
    }
    public function insertTask(Request $request){
        $search = $request->keyword;

        $tasks = Task::with(['jurusan', 'user'])
            ->when($search, function ($query) use ($search) {
                $query->where('judul', 'like', "%{$search}%");
            })
            ->get(); // ambil data task + relasi
        $jurusans = Jurusan::all();
        return view('client.orders.task', compact('jurusans', 'tasks'));
    }
}

