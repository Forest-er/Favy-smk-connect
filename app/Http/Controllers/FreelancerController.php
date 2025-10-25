<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Freelancer;

class FreelancerController extends Controller
{
    /**
     * Tampilkan daftar semua freelancer (misalnya untuk halaman utama client)
     */
    public function index()
    {
        $freelancers = Freelancer::all();
        return view('client.dashboard', compact('freelancers'));
    }

    /**
     * Tampilkan detail satu freelancer berdasarkan ID
     */
    public function show($id)
    {
        $freelancer = Freelancer::findOrFail($id);
        return view('client.freelancer-detail', compact('freelancer'));
    }

    /**
     * (Opsional) Tambah freelancer baru
     */
    public function create()
    {
        return view('freelancer.create');
    }

    /**
     * (Opsional) Simpan freelancer baru ke database
     */
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
}
