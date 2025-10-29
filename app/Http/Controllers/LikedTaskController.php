<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\LikedTask;

class LikedTaskController extends Controller
{
    public function store($taskId)
    {
        $userId = Auth::id();

        $existing = LikedTask::where('user_id', $userId)
                             ->where('task_id', $taskId)
                             ->first();

        if (!$existing) {
            LikedTask::create([
                'user_id' => $userId,
                'task_id' => $taskId,
            ]);
        }

        return back()->with('success', 'Project disimpan ke daftar favorit!');
    }
}
