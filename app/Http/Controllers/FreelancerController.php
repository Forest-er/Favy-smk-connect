<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Freelancer;
use App\Models\Jurusan; // ✅ tambahkan baris ini
use Illuminate\Support\Facades\DB;

class FreelancerController extends Controller
{
    public function index()
    {
        $freelancers = Freelancer::all();
        return view('client.dashboard', compact('freelancers'));
    }

    public function show($id)
    {
        $freelancer = Freelancer::findOrFail($id);
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
}
