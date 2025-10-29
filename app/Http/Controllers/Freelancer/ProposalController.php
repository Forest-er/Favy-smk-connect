<?php

namespace App\Http\Controllers\Freelancer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Proposal;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class ProposalController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'task_id' => 'required|integer',
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'message' => 'required|string',
            'cv_link' => 'required|url',
        ]);

        Proposal::create([
            'task_id' => $request->task_id,
            'worker_id' => Auth::id(), // pastikan user sudah login
            'nama' => $request->name,
            'email' => $request->email,
            'deskripsi' => $request->message,
            'cv_link' => $request->cv_link,
        ]);

        return response()->json(['success' => true]);
    }
    public function approve($id)
    {
        // Cari proposal
        $proposal = Proposal::findOrFail($id);

        // Ambil task terkait lewat relasi
        $task = $proposal->task;

        if ($task) {
            // Update kolom status dan freelancer_id di tasks
            $task->update([
                'status' => 'in_progress',
                'freelancer_id' => $proposal->worker_id, // ambil dari proposal
            ]);

            // Update status proposal menjadi approved
            $proposal->update(['status' => 'approved']);

            // Tolak proposal lain untuk task yang sama
            Proposal::where('task_id', $task->id_task)
                ->where('id_proposal', '!=', $proposal->id_proposal)
                ->update(['status' => 'rejected']);
        }

        return redirect()->back()->with('success', 'Proposal telah disetujui dan status task diperbarui.');
    }



}

