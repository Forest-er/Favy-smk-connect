<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index()
    {
        // Ambil semua data jurusan dari database
        $jurusans = Jurusan::all();

        // Kirim data ke view
        return view('client.dashboard', compact('jurusans'));
    }
}
